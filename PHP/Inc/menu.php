<ul class="navbar-nav w-100 justify-content-end align-items-center">
  <?php if ($_SESSION['admin']): ?>
  <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Employees">
    <a href="<?php echo $_ind ?>employees/" class="nav-link <?php echo $page == 'Employees' ? 'active' : '' ?>">
      <span class="flaticon-support"></span> <span class="d-sm-none d-xs-inline">Employees</span>
      <?php echo $page == 'Employees' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li>
  <?php endif; ?>
  <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Clients">
    <a href="<?php echo $_ind ?>customers/" class="nav-link <?php echo $page == 'Clients' ? 'active' : '' ?>">
      <span class="flaticon-transport"></span> <span class="d-sm-none d-xs-inline">Clients</span>
      <?php echo $page == 'Clients' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li>

  <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Produits">
    <a href="<?php echo $_ind ?>products/" class="nav-link <?php echo $page == 'Produits' ? 'active' : '' ?>">
      <span class="flaticon-box-3"></span> <span class="d-sm-none d-xs-inline">Produits</span>
      <?php echo $page == 'Produits' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li>
  <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Commandes">
    <a href="<?php echo $_ind ?>orders/" class="nav-link <?php echo $page == 'Commandes' ? 'active' : '' ?>">
      <span class="flaticon-receipt"></span> <span class="d-sm-none d-xs-inline">Commandes</span>
      <?php echo $page == 'Commandes' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li>
  <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Ventes">
    <a href="<?php echo $_ind ?>sales/" class="nav-link <?php echo $page == 'Ventes' ? 'active' : '' ?>">
      <span class="flaticon-banknote"></span> <span class="d-sm-none d-xs-inline">Ventes</span>
      <?php echo $page == 'Ventes' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li>
  <!-- <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Compte">
    <a href="<?php echo $_ind ?>Account" class="nav-link <?php echo $page == 'Compte' ? 'active' : '' ?>">
      <span class="flaticon-options"></span>
      <?php echo $page == 'Compte' ? '<span class="sr-only">(current)</span>' : '' ?>
    </a>
  </li> -->
  <!-- <li class="nav-item mr-4" data-toggle="tooltip" data-placement="bottom" title="Recherche">
    <a href="#" class="nav-link toogle-search"><span class="flaticon-magnifying-glass-1"></span></a>
  </li> -->
  <li class="nav-item">
    <a href="<?php echo $_ind ?>logout/" class="nav-link" data-toggle="tooltip" data-placement="left" title="Deconnexion">
      <span class="flaticon-logout-1"></span> <span class="d-sm-none d-xs-inline">Deconnection</span>
    </a>
  </li>
</ul>
