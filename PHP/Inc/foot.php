  </div>

  <p class="fixed-bottom m-0 d-none" id="addStuff">
    <button type="button" name="addStuff" class="btn btn-primary rounded-circle p-0">
      <span class="flaticon-cross-1"></span>
    </button>
  </p>
  </div>

    <script src="<?php echo $_ind; ?>Js/jQuery.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/popper.js"></script>
    <script src="<?php echo $_ind; ?>Js/bootstrap.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/list.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/slick.min.js"></script>
    <script src="<?php echo $_ind; ?>Js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    <script type="text/javascript">
      var options = {
      valueNames: [ 'fname', 'lname', 'email' ]
      };

      var userList = new List('productsList', options);

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

      //perfectscroll
      var ps = new PerfectScrollbar('#categories-list .card-text');
    </script>
  </body>
</html>
