// barcode orders
JsBarcode('.barcode').init();

//orders search
var userList = new List('orders-list',
{ valueNames:
  ['ref', 'client', 'article', 'location', 'date', 'madeBy', 'delivrer'],
});

//perfectscroll
var scrollEl = document.querySelectorAll('.product-ordered-list');
scrollEl.forEach(function (el) {
  new PerfectScrollbar(el, { suppressScrollX: true });
});

var ps = new PerfectScrollbar('.order-form-product-added', { suppressScrollX: true });

var ps2 = new PerfectScrollbar('.sugestion-wrapper .scroller', { suppressScrollX: true });

//form order popup
//change step
$('.change-step').click(function () {

  $('.order-form-step').toggleClass('current-step');
  $(this).text($(this).text() == 'Suivant' ? 'Precedant' : 'Suivant');

});

//change color
$(document).on('change', '.color-order', function () {
  var qty = $(this).find('option:selected').attr('data-qty');
  var $qtyOrder = $(this).parents('.form-group').find('.qty-order');
  var val = $qtyOrder.val();

  if (parseInt(val) > parseInt(qty)) {
    $qtyOrder.val(qty);
  }

  $qtyOrder.attr('max', qty);
});

//increase or decrease input number
$(document).on('click', '.input-group-number button', function () {
  var $inp = $(this).parent().find('input');
  var val = $inp.val();
  var max = $inp.attr('max');
  var min = $inp.attr('min');

  $inp.val(function () {
    return $(this).hasClass('remto') ?
    ((parseInt(val) - 1) > min ? (parseInt(val) - 1) : min) :
    ((parseInt(val) + 1) < max ? (parseInt(val) + 1) : max);
  });
});

// ajax request
var $scroler = $('.sugestion-wrapper .scroller');
var $getProd = $('.getProduct');

// search product autocomplete
$getProd.keyup(function () {
  var s = $(this).val();
  $scroler.empty();

  $.ajax({
    type: 'POST',
    url: '../PHP/Script/_orderCheckProducts.php',
    data: { s: s },
    success: function (data) {
      if (data) {
        console.log(data);

        for (var i = 0; i < data.length; i++) {
          if (data[i].available > 0) {
            $scroler.append(
            '<div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion" data-ID="' + data[i].ID + '">' +
              '<div class="d-flex justify-content-between">' +
                '<h4>#' + data[i].ID + '</h4>' +
                '<p class="small mb-0">' + data[i].available + ' Available(s)</p>' +
              '</div>' +
              '<div class="d-flex justify-content-between">' +
                '<h5 class="text-muted mb-0">' + data[i].prodName + ' - ' + data[i].catName + '</h5>' +
                '<p class="text-primary mb-0">' + data[i].price + ' FR</p>' +
              '</div>' +
            '</div>');
          } else {
            $scroler.append('<p>' + data[i].prodName + ' is not available</p>');
          }
        }
      }
    },

    dataType: 'json',
  });
});

//APPEND THE ELEMENT ON CLICK
$(document).on('click', '.suggestion', function () {
  var ID = $(this).attr('data-ID');
  $scroler.empty();
  $getProd.val('');

  $.ajax({
    type: 'POST',
    url: '../PHP/Script/_orderGetProduct.php',
    data: { s: ID },
    success: function (data) {
      if (data) {
        var opts = '';

        for (var i = 0; i < data.colors.length; i++) {
          opts += '<option value="' + data.colors[i].colorID +
          '" data-qty="' + data.colors[i].colorQty + '">' +
          data.colors[i].colorName +
          '</option>';
        }

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
      }
    },

    error: function (err) {
      console.log(err);
    },

    dataType: 'json',
  });
});

$('.form-order').submit(function (e) {
  e.preventDefault();
  var selectedArticle = $('.selected-article').length;

  if (selectedArticle <= 0) {
    $.notify(
    {
      // options
      icon: 'flaticon-question',
      message: 'aucun article selectionne',
    },
    {
      // settings
      type: 'danger',
      showProgressbar: true,
      placement: {
        from: 'bottom',
        align: 'left',
      },
      z_index: 1110,
      mouse_over: 'pause',
      animate: {
        enter: 'animated bounceIn',
        exit: 'animated bounceOut',
      },
    });
    return false;
  }
});

$('#addCommandeModal').modal('show');
