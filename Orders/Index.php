<?php
$page = 'Products';
$ind = true;
include '../PHP/Inc/head.php';
?>

<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3 mb-4">
      <h2 class="text-uppercase m-0">Commandes <br/><small class="text-muted">Total: 20 Commandes</small></h2>
      <button type="button" class="btn btn-primary"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Commande</button>
    </div>
  </div>
</div>

<!-- commande list -->
<div class="row">
  <div class="col-4 opacity-tier order-item" data-commande-id="FB0506">
    <div>
      <div class="rounded-top bg-primary light-shadow-primary">
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 pt-3 text-white">
          <div>
            <p class="text-dark mb-1">Commande ID</p>
            <h4 class="mb-1">#FB0506</h4>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Date</p>
            <p class="mb-1">21 Dec 2017</p>
          </div>
        </div>
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 py-2 text-white">
          <div>
            <p class="text-dark mb-1">Client</p>
            <h6>Diomande Dro Freddy Junior</h6>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Agent</p>
            <h6>Fredius Tout Court</h6>
          </div>
        </div>
      </div>
      <div class="bg-white p-3 light-shadow product-ordered rounded-bottom">
        <!-- title of product order -->
        <div class="row">
          <div class="col-6">
            <p class="text-muted"><strong>Product</strong></p>
          </div>
          <div class="col">
            <p class="text-muted"><strong>Quantite</strong></p>
          </div>
          <div class="col">
            <p class="text-muted text-right"><strong>Prix</strong></p>
          </div>
        </div>
        <!-- end title product order -->

        <!-- product order list  -->
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <p class="text-muted text-right"><strong>Total</strong></p>
        <h4 class="text-primary text-right total-order mb-0 font-weight-bold">60.000 FR</h4>
      </div>
      <div class="bg-white p-3 order-serial rounded">
        <div class="d-flex justify-content-center align-items-center">
          <svg class="barcode"
            jsbarcode-format="CODE39"
            jsbarcode-value="FB0506"
            jsbarcode-height="30"
            jsbarcode-displayValue="false"
            >
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="col-4 order-item" data-commande-id="FB0506">
    <div>
      <div class="rounded-top bg-primary light-shadow-primary">
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 pt-3 text-white">
          <div>
            <p class="text-dark mb-1">Commande ID</p>
            <h4 class="mb-1">#FB0506</h4>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Date</p>
            <p class="mb-1">21 Dec 2017</p>
          </div>
        </div>
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 py-2 text-white">
          <div>
            <p class="text-dark mb-1">Client</p>
            <h6>Diomande Dro Freddy Junior</h6>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Agent</p>
            <h6>Fredius Tout Court</h6>
          </div>
        </div>
      </div>
      <div class="bg-white p-3 light-shadow product-ordered rounded-bottom">
        <!-- title of product order -->
        <div class="row">
          <div class="col-6">
            <p class="text-muted"><strong>Product</strong></p>
          </div>
          <div class="col">
            <p class="text-muted"><strong>Quantite</strong></p>
          </div>
          <div class="col">
            <p class="text-muted text-right"><strong>Prix</strong></p>
          </div>
        </div>
        <!-- end title product order -->

        <!-- product order list  -->
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <p class="text-muted text-right"><strong>Total</strong></p>
        <h4 class="text-primary text-right total-order mb-0 font-weight-bold">60.000 FR</h4>
      </div>
      <div class="bg-white p-3 order-serial rounded">
        <div class="d-flex justify-content-center align-items-center">
          <svg class="barcode"
            jsbarcode-format="CODE39"
            jsbarcode-value="FB0506"
            jsbarcode-height="30"
            jsbarcode-displayValue="false"
            >
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="col-4 opacity-tier order-item" data-commande-id="FB0506">
    <div>
      <div class="rounded-top bg-primary light-shadow-primary">
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 pt-3 text-white">
          <div>
            <p class="text-dark mb-1">Commande ID</p>
            <h4 class="mb-1">#FB0506</h4>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Date</p>
            <p class="mb-1">21 Dec 2017</p>
          </div>
        </div>
        <div class="d-flex w-100 justify-content-between allign-items-center px-3 py-2 text-white">
          <div>
            <p class="text-dark mb-1">Client</p>
            <h6>Diomande Dro Freddy Junior</h6>
          </div>
          <div class="text-right">
            <p class="text-dark mb-1">Agent</p>
            <h6>Fredius Tout Court</h6>
          </div>
        </div>
      </div>
      <div class="bg-white p-3 light-shadow product-ordered rounded-bottom">
        <!-- title of product order -->
        <div class="row">
          <div class="col-6">
            <p class="text-muted"><strong>Product</strong></p>
          </div>
          <div class="col">
            <p class="text-muted"><strong>Quantite</strong></p>
          </div>
          <div class="col">
            <p class="text-muted text-right"><strong>Prix</strong></p>
          </div>
        </div>
        <!-- end title product order -->

        <!-- product order list  -->
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p>12 Place Etagere</p>
          </div>
          <div class="col">
            <p><small>x</small>2</p>
          </div>
          <div class="col">
            <p class="text-right">10.000</p>
          </div>
        </div>
        <p class="text-muted text-right"><strong>Total</strong></p>
        <h4 class="text-primary text-right total-order mb-0 font-weight-bold">60.000 FR</h4>
      </div>
      <div class="bg-white p-3 order-serial rounded">
        <div class="d-flex justify-content-center align-items-center">
          <svg class="barcode"
            jsbarcode-format="CODE39"
            jsbarcode-value="FB0506"
            jsbarcode-height="30"
            jsbarcode-displayValue="false"
            >
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-center d-flex justify-content-center py-4">
  <button type="button" class="order-opt delete btn btn-danger rounded-30 mx-2 px-4 py-2"><span class="flaticon-delete"></span></button>
  <button type="button" class="order-opt edit btn btn-info rounded-30 mx-2 px-4 py-2"><span class="flaticon-edit-1"></span></button>
  <button type="button" class="order-opt done btn btn-success rounded-30 mx-2 px-4 py-2"><span class="flaticon-checked"></span></button>
</div>

<?php include '../PHP/Inc/foot.php'; ?>
