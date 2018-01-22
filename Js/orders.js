// barcode orders
JsBarcode('.barcode').init();

//orders search
var userList = new List('orders-list',
{ valueNames:
  ['ref', 'client', 'article', 'location', 'date', 'madeBy', 'delivrer'],
});

//perfectscroll
// var scrollEl = document.querySelectorAll('.product-ordered-list');
// scrollEl.forEach(function (el) {
//   new PerfectScrollbar(el, { suppressScrollX: true });
// });

var ps = new PerfectScrollbar('.order-form-product-added', { suppressScrollX: true });

var ps2 = new PerfectScrollbar('.sugestion-wrapper .scroller', { suppressScrollX: true });

// AJAX POP EVOLUTION
// var unAvailable = [];
var currentElement = null;
var selectOpt = [];
var $scroler = $('.sugestion-wrapper .scroller');
var $getProd = $('.getProduct');

// autocomple ajax products
$getProd.keyup(function () {
  var s = $(this).val();
  $scroler.addClass('.active');
  $scroler.empty();

  // console.log(unAvailable);
  $.ajax({
    type: 'POST',
    url: '../PHP/Script/_orderCheckProducts.php',
    data: { s: s },
    success: function (data) {
      if (data) {
        data.forEach(function(el){
          if (el.available > 0) {
            $.ajax({
              type: 'POST',

              url: '../PHP/Script/_inProcess.php',

              data: { ID: el.ID, type: 'get' },

              success: function (data) {
                if(!data.exist){
                  $scroler.append(
                  '<div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion" data-ID="' + el.ID + '"> ' +
                    '<div class="d-flex justify-content-between"> ' +
                      '<h4>#' + el.ID + '</h4> ' +
                      '<p class="small mb-0"> ' + el.available + ' Available(s)</p> ' +
                    '</div> ' +
                    '<div class="d-flex justify-content-between"> ' +
                      '<h5 class="text-muted mb-0"> ' + el.prodName + ' - ' + el.catName + '</h5> ' +
                      '<p class="text-primary mb-0"> ' + el.price + ' FR</p> ' +
                    '</div> ' +
                  '</div> ');
                }
              },

              error: function (err) {
                console.log('erreur: ', err);
              },

              dataType: 'json',
            });

          } else {
            // has to be done
            $scroler.append('<p> ' + data[i].prodName + ' is not available</p> ');
          }
        });
      }
    },

    dataType: 'json',
  });
});

//make suggestion append on click
$(document).on('click', '.suggestion', function () {
  var ID = $(this).attr('data-ID');
  $scroler.empty();
  $scroler.removeClass('.active');
  $getProd.val('');

  $.ajax({
    type: 'POST',
    url: '../PHP/Script/_orderGetProduct.php',
    data: { s: ID },
    success: function (data) {
      if (data) {
        var opts =
        '<div class="row align-items-center"> '+
          '<div class="col"> '+
            '<h5 class="px-3 mb-0">#' + data.prodID +
              ' <small> ' + data.prodName + ' (' + data.catName + ')</small> '+
            '</h5> '+
          '</div> '+
          '<div class="col-3"> '+
            '<div class="px-3 mb-2 text-right"> '+
              '<button type="button" class="btn btn-danger delSelProd" data-id=" ' + data.prodID + '"> '+
                  '<span class="flaticon-delete"></span> '+
                '</button> '+
              '</div> '+
            '</div> '+
        '</div> ';

        for (var i = 0; i < data.colors.length; i++) {
          opts +=
          '<fieldset class="form-group px-3 material-input mb-1 row"> '+
            '<div class="col-4"> '+
              '<input '+
                'type="text" '+
                'name="color-name[]" '+
                'class="form-control text-center bg-white px-2" value=" ' + data.colors[i].colorName + '" ' + ' readonly required> '+
              '<input type="hidden" name="color-id[]" value=" ' + data.colors[i].colorID + '" readonly> '+
            '</div> '+
            '<div class="col-4"> '+
              '<div class="input-group input-group-number rounded text-truncate"> '+
                '<button type="button" '+
                  'class="remto input-group-addon btn rounded-0 btn-danger'+
                  ' text-white"> '+
                '-</button> '+
                '<input '+
                  'type="number" '+
                  'name="quantity-color[]" '+
                  'min="0" '+
                  'max=" ' + data.colors[i].colorQty + '" '+
                  'class="form-control qty-order text-center bg-white px-1" value="0" '+
                  'readonly required> '+
                '<button type="button" '+
                  'class="addto input-group-addon btn rounded-0 btn-primary '+
                  'text-white"> '+
                '+</button> '+
              '</div> '+
            '</div> '+
            '<div class="col-4"> '+
              '<input '+
                'type="text" '+
                'name="price-prod[]" '+
                'min="0" '+
                'class="form-control text-center px-2" '+
                'value=" ' + data.prodPrice + '" '+
                'max=" ' + data.prodPrice + '" required> '+
            '</div> '+
          '</fieldset> ';
        }

        $('.order-form-product-added').append('<div class="selected-item rounded light-shadow bg-white mx-3 py-2 mb-2"> '+ opts +'</div> ');

        //Add as unAvailable
        // unAvailable.push(data.prodID);
        $.ajax({
          type: 'POST',
          url: '../PHP/Script/_inProcess.php',
          data: { ID: data.prodID, type: 'add' },
          success: function (data) {
            bootstrapNotify(data.txt, data.type);
          },

          error: function (err) {
            console.log(err);
          },

          dataType: 'json',
        });
      }
    },

    error: function (err) {
      console.log(err);
    },

    dataType: 'json',
  });
});

//increase or decrease input number
$(document).on('click', '.input-group-number button', function () {
  var $par = $(this).parents('.material-input.row');
  var $qty = $par.find('.qty-order');
  var _color = $par.find('.color-order').val();
  var _id = $par.find('.selected-article').attr('data-ID');
  var val = $qty.val();
  var max = $qty.attr('max');
  var min = $qty.attr('min');

  // console.log($par, _color, _id);
  function change() {
    return $(this).hasClass('remto') ?
    ((parseInt(val) - 1) > min ? (parseInt(val) - 1) : parseInt(min)) :
    ((parseInt(val) + 1) < max ? (parseInt(val) + 1) : parseInt(max));
  }

  $qty.val(change.bind(this));

});

// delete selected product
$(document).on('click', '.delSelProd', function(){
  var $this = $(this);
  var dataID = $this.attr('data-id');
  alertify.confirm(
    '<strong>Attention:</strong> Voulez vraiment supprimer cet produit de la liste?',

    function(){
      $.ajax({
        type: 'POST',
        url: '../PHP/Script/_inProcess.php',
        data: { ID: dataID, type: 'delete' },
        success: function (data) {
          bootstrapNotify(data.txt, data.type);

          if(data.type === 'success'){
            $this.parents('.selected-item').fadeOut();
          }
        },

        error: function (err) {
          console.log(err);
        },

        dataType: 'json',
      });
    },

    function(){ bootstrapNotify('Annuler', 'danger'); }
  );
});

//change step
$('.change-step').click(function () {

  $('.order-form-step').toggleClass('current-step');
  $(this).text($(this).text() == 'Suivant' ? 'Precedant' : 'Suivant');
  $('.moreOpt').toggleClass('d-none');
});
$('.second-step input').focus(function(){
  if(!$('.second-step').hasClass('current-step')){
    $('.order-form-step').toggleClass('current-step');
    $('.change-step').text('Precedant');
    $('.moreOpt').removeClass('d-none');
  }
})

$('.form-order').submit(function (e) {
  var selectedArticle = $('.selected-item').length;

  if (selectedArticle <= 0) {

    //change the step
    $('.order-form-step').toggleClass('current-step');
    $('.change-step').text('Suivant');
    $('.moreOpt').toggleClass('d-none');

    //show msg
    bootstrapNotify('Aucun article selectionne', 'danger');
  }
});

$('#addCommandeModal').modal('show');
