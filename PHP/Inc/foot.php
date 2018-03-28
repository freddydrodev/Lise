  </div>

  <p class="fixed-bottom m-0 d-none">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.0/alertify.min.js"></script>
    <script src="<?php echo $_ind; ?>js/perfect-scrollbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.8.0/JsBarcode.all.min.js"></script>
    <script src="<?php echo $_ind; ?>js/print.min.js"></script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    <script src="<?php echo $_ind; ?>js/main.js"></script>
    <script src="<?php echo $_ind; ?>js/templatize.js"></script>
    
    <?php if ($page === 'Clients'): ?>
    <script src="<?php echo $_ind; ?>js/clients.js"></script>
    <?php endif; ?>

    <?php if ($page === 'Employees'): ?>
    <script src="<?php echo $_ind; ?>js/employees.js"></script>
    <?php endif; ?>

    <?php if ($page === 'Livreur'): ?>
    <script src="<?php echo $_ind; ?>js/delivrer.js"></script>
    <?php endif; ?>

    <?php if ($page === 'Commandes'): ?>
    <script src="<?php echo $_ind; ?>js/orders.js"></script>
    <?php endif; ?>

    <?php if ($page === 'Produits'): ?>
    <script src="<?php echo $_ind; ?>js/products.js"></script>
    <?php endif; ?>

    <?php if ($page === 'Ventes'): ?>
    <script src="<?php echo $_ind; ?>js/sales.js"></script>
    <?php endif; ?>



  </body>
</html>
