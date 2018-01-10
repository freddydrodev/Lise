  </div>

  <p class="fixed-bottom m-0 d-none" id="addStuff">
    <button type="button" name="addStuff" class="btn btn-primary rounded-circle p-0">
      <span class="flaticon-cross-1"></span>
    </button>
  </p>
  </div>

<div class="fixed-top w-100 h-100 bg-default-9 d-none" id="searchBox">
  <p class="h4 py-4 text-center m-0">Recherche</p>
  <div class="container-fluid">
    <p>
      <input type="text" name="search" class="form-control p-0 font-weight-light w-75 mx-auto bigsearch bg-none rounded-0 border-0 text-center">
    </p>
    <p class="text-center text-muted">Aucun resultat pour </b>Fredius Tout Court </b></p>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">1</div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
    </div>
    <ul class="nav nav-pills nav-justified fixed-bottom" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link rounded-0 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
      </li>
    </ul>
  </div>
</div>
    <script src="<?php echo $_ind; ?>Js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/popper.js"></script>
    <script src="<?php echo $_ind; ?>Js/bootstrap.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/list.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/slick.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/Chart.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/JsBarcode.all.min.js"></script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    <script type="text/javascript">


      // table display
      var options = {
      valueNames: [ 'fname', 'lname', 'email' ]
      };

      var userList = new List('productsList', options);


      <?php if ($page === 'Commandes'): ?>

      // barcode orders
      JsBarcode(".barcode").init();

      //perfectscroll
      var scrollEl = document.querySelectorAll('.product-ordered-list');

      scrollEl.forEach(function(el){
        new PerfectScrollbar(el);
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
                $('.sugestion-wrapper').append('<div class="sugestion bg-white light-shadow-primary w-100 mt-2 p-2 rounded-5 position-absolute" data-ID="' + data.ID + '"><h4>#' + data.ID + '</h4><div class="d-flex justify-content-between"><p class="mb-0">' + data.name + ' (Etagere)</p><p class="mb-0 text-primary">' + data.price +'Fr</p></div></div>');
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

                $('.order-form-product-added').append('<fieldset class="form-group px-3 material-input mb-1 row"><div class="col-3"><input type="text" name="article-id[]" class="form-control border-0 rounded-0 px-2 selected-article" value="' + data.prodID + ' (' + data.catName + ')" required title="' + data.prodName + ' (' + data.catName + ')"></div><div class="col-3"><select class="custom-select w-100 color-order" name="article-color[]">' + opts + '</select></div><div class="col-3"><div class="input-group input-group-number"><button type="button" class="remto input-group-addon btn rounded-0 btn-danger text-white">-</button><input type="number" name="article-qty[]" min="1" max="' + data.colors[0].colorQty + '" class="qty-order form-control border-0 rounded-0 px-2" value="1" required><button type="button" class="addto input-group-addon btn rounded-0 btn-primary text-white">+</button></div></div><div class="col-3"><input type="text" name="article-paid[]" class="form-control px-2" value="' + data.prodPrice + '" max="' + data.prodPrice + '" required></div></fieldset>');
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

      $('#addCommandeModal').modal('show');

      <?php endif; ?>


      <?php if ($page === 'Produits'): ?>
      //perfectscroll
      var scrollEl = document.querySelectorAll('#categories-list .card-text');

      scrollEl.forEach(function(el){
        new PerfectScrollbar(el);
      });

      // slick carousel
      $(document).ready(function(){
        $('#categories-list').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: true,
          adaptiveHeight: true,
          centerMode: true,
          centerPadding: '60px'
        });
      });
      <?php endif; ?>

      <?php if ($page === 'Ventes'): ?>
      //chartjs sales
      Chart.defaults.global.legend.display = false;
      Chart.defaults.global.defaultFontFamily = "'Poppins', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";
      Chart.defaults.global.defaultFontSize = 13;
      Chart.defaults.global.barThickness = .2;
      // Chart.defaults.global.title.display = true;
      var ctx = document.getElementById("thisYearSales").getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: "Ventes Cette Annee",
                backgroundColor: 'rgba(127, 42, 255, .5)',
                borderColor: 'rgb(127, 42, 255)',
                data: [0, 10000, 50000, 30000, 20, 30, 45],
                borderWidth: 2,
                pointBackgroundColor: 'rgb(127, 42, 255)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },

        // Configuration options go here
        options: {
          barPercentage: 0.2,
          categoryPercentage: 0.2,
          barThickness: 20,
          maxBarThickness: 20,
          scales: {
              xAxes: [{
                  gridLines: {
                      display: false,
                      drawBorder: false
                  }
              }],
              yAxes: [{
                  gridLines: {
                      display: false,
                      drawBorder: false
                  },
                  display: false
              }]
            }
          }
      });
    <?php endif; ?>

    $('.toogle-search').click(function(){
      $('#searchBox').toggleClass('d-none');
      $('.bigsearch').focus();
      return false;
    })
    </script>
    <script src="<?php echo $_ind; ?>Js/Templatize.js"></script>
  </body>
</html>
