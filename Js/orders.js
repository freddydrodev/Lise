// barcode orders
JsBarcode(".barcode").init();

//perfectscroll
var scrollEl = document.querySelectorAll('.product-ordered-list');

scrollEl.forEach(function(el){
  new PerfectScrollbar(el, {suppressScrollX: true});
});

var ps = new PerfectScrollbar('.order-form-product-added', {
  suppressScrollX: true
});

// slick carousel
$(document).ready(function(){
  $('#list-order').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: '0'
  });
});

//form order popup
var selected = [];

//change step
$('.change-step').click(function(){
  if($(this).hasClass('prev')){
    $('.order-form-step').removeClass('current-step');
    $('.first-step').addClass('current-step');
    $(this).next().addClass('d-none');
    $(this).text('Suivant');
    $(this).removeClass('prev');
    $(this).addClass('next');
  }
  else if ($(this).hasClass('next')) {
    $('.order-form-step').removeClass('current-step');
    $('.second-step').addClass('current-step');
    $(this).next().removeClass('d-none');
    $(this).text('Precedant');
    $(this).addClass('prev');
    $(this).removeClass('next');
  }
});

function colorOrder(){
    $('.color-order').change(function(){

      var qty = $(this).find('option:selected').attr('data-qty');
      console.log(qty, $(this).parents('fieldset.form-group').find('.qty-order').val());
      if(parseInt($(this).parents('fieldset.form-group').find('.qty-order').val()) > parseInt(qty)){
        $(this).parents('fieldset.form-group').find('.qty-order').val(qty);
      }

      $(this).parents('fieldset.form-group').find('.qty-order').attr('max', qty);
    });
}

$(document).on('click', '.input-group-number button', function(){
  var $inp = $(this).parent().find('input');
  var val = $inp.val();
  var max = $inp.attr('max');
  var min = $inp.attr('min');

  if($(this).hasClass('remto')){
    $inp.val(function(){
      return (parseInt(val) - 1) > min ? (parseInt(val) - 1) : min;
    });
  }
  if($(this).hasClass('addto')){
    $inp.val(function(){
      return (parseInt(val) + 1) < max ? (parseInt(val) + 1) : max;
    });
  }
});

// ajax request

// search product autocomplete
$('.getProduct').keyup(function(){
  var s = $(this).val();
  $('.sugestion-wrapper').empty();

  $.ajax({
    type: "POST",
    url: "../PHP/Script/_orderCheckProduct.php",
    data: {s:s},
    success: function (data) {
      if(data){
        if(selected.indexOf(data.ID) == -1 ){
          $('.sugestion-wrapper').append(
            '<div class="sugestion bg-white light-shadow-primary w-100 mt-2 p-2 rounded-5 position-absolute" data-ID="' + data.ID + '">'+
              '<h4>#' + data.ID + '</h4>'+
              '<div class="d-flex justify-content-between">'+
                '<p class="mb-0">' + data.name + ' (Etagere)</p>'+
                '<p class="mb-0 text-primary">' + data.price +'Fr</p>'+
              '</div>'+
            '</div>');

          appendProduct();
        }
      }
    },
    dataType : 'json'
  });
});

//APPEND THE ELEMENT ON CLICK
function appendProduct() {
  $('.sugestion').click(function(){
    var ID = $(this).attr('data-ID');
    $('.sugestion-wrapper').empty();
    $('.getProduct').val('');

    $.ajax({
      type: "POST",
      url: "../PHP/Script/_orderGetProduct.php",
      data: {s:ID},
      success: function (data) {
        // console.log(data);
        if(data){
          var opts = '';

          for (var i = 0; i < data.colors.length; i++) {
            opts += '<option value="' + data.colors[i].colorID + '" data-qty="' + data.colors[i].colorQty + '">' + data.colors[i].colorName + '</option>';
          };

          $('.order-form-product-added').append(
            '<fieldset class="form-group px-3 material-input mb-1 row">'+
              '<div class="col-3">'+
                '<input type="text" name="article-id[]" class="form-control border-0 rounded-0 px-2 selected-article" value="' + data.prodID + ' (' + data.catName + ')" required title="' + data.prodName + ' (' + data.catName + ')">'+
              '</div>'+
              '<div class="col-3">'+
                '<select class="custom-select w-100 color-order" name="article-color[]">' + opts +
                '</select>'+
              '</div>'+
              '<div class="col-3">'+
                '<div class="input-group input-group-number">'+
                  '<button type="button" class="remto input-group-addon btn rounded-0 btn-danger text-white">-</button>'+
                  '<input type="number" name="article-qty[]" min="1" max="' + data.colors[0].colorQty + '" class="qty-order form-control border-0 rounded-0 px-2" value="1" required>'+
                  '<button type="button" class="addto input-group-addon btn rounded-0 btn-primary text-white">+</button>'+
                '</div>'+
              '</div>'+
              '<div class="col-3">'+
                '<input type="text" name="article-paid[]" class="form-control px-2" value="' + data.prodPrice + '" max="' + data.prodPrice + '" required>'+
              '</div>'+
            '</fieldset>');

          selected.push(data.prodID);
          console.log(selected);
          colorOrder();
        }
      },
      error : function(err){
        console.log(err);
      } ,
      dataType : 'json'
    });
  });
}

$('.form-order').submit(function(e){
  var selectedArticle = $('.selected-article').length;

  if(selectedArticle <= 0){
    $.notify({
    // options
    icon: 'flaticon-question',
    message: 'aucun article selectionne'
    },{
      // settings
      type: 'danger',
      showProgressbar: true,
      placement: {
        from: "bottom",
        align: "left"
      },
      z_index: 1110,
      mouse_over: 'pause',
      animate: {
        enter: 'animated bounceIn',
        exit: 'animated bounceOut'
      }
    });
    return false;
  }

});

// $('#addCommandeModal').modal('show');
