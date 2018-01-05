<?php
$page = 'Commandes';
$ind = true;
include '../PHP/Inc/head.php';
?>
<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3 mb-4">
      <h2 class="text-uppercase m-0">Commandes <br/><small class="text-muted">Total: 20 Commandes</small></h2>
      <!-- start commande Modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCommandeModal"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Commande</button>
      <div class="modal fade" tabindex="-1" role="dialog" id="addCommandeModal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content rounded-0 border-0">
            <div class="modal-header border-0 py-2">
              <h5 class="modal-title position-relative legend px-3"><span class="legend-text">Ajouter Produit</span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-order" action="./" method="post">
                <div class="position-relative step-wrapper">
                  <div class="second-step position-absolute order-form-step w-100">
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Nom Client</label>
                      <input type="text" name="name-client" placeholder="EX: Lise Belle Kuame" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Identifiant Facebook</label>
                      <input type="text" name="id-facebook" min="0" placeholder="EX: Belise Style" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Address Electronic</label>
                      <input type="email" name="email" min="0" placeholder="EX: belisestyle@yahoo.fr" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Numero</label>
                      <input type="phone" name="phone" min="0" placeholder="EX: +22501234567" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                  </div>
                  <div class="first-step current-step position-absolute order-form-step w-100">
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Search</label>
                      <input type="text" name="name-product" placeholder="Ecris le nom ou l'ID du produit" class="form-control border-0 rounded-0 px-0 getProduct">
                      <span class="under w-100 d-block position-relative"></span>
                      <div class="sugestion-wrapper position-relative"></div>
                    </fieldset>
                    <p class="small px-3 pt-2">List Article</p>
                    <div class="order-form-product-added position-relative">
                      <!-- <fieldset class="form-group px-3 material-input mb-1 row">
                        <div class="col-3">
                          <input type="text" name="id-facebook" placeholder="EX: Belise Style" class="form-control border-0 rounded-0 px-2" value="12 Paire (Etagere)" disabled required>
                        </div>
                        <div class="col-3">
                          <select class="custom-select w-100" name="color">
                            <option value="">Red</option>
                          </select>
                        </div>
                        <div class="col-3">
                          <div class="input-group input-group-number">
                            <button type="button" class="remto input-group-addon btn rounded-0 btn-danger text-white">-</button>
                            <input type="number" name="id-facebook" min="0" max="15" placeholder="EX: Belise Style" class="form-control border-0 rounded-0 px-2" value="10" disabled required>
                            <button type="button" class="addto input-group-addon btn rounded-0 btn-primary text-white">+</button>
                          </div>
                        </div>
                        <div class="col-3">
                          <input type="text" name="id-facebook" min="0" placeholder="EX: Belise Style" class="form-control border-0 rounded-0 px-2" value="10000" disabled required>
                        </div>
                      </fieldset> -->
                    </div>
                  </div>
                </div>
                <div class="modal-footer border-0 justify-content-between">
                  <button type="button" name="addProduct" class="btn btn-info change-step next">Suivant</button>
                  <div class="d-none">
                    <button type="submit" name="addProduct" class="btn btn-success mr-1 ">Ajouter</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal order -->
      <!-- <button type="button" class="btn btn-primary"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Commande</button> -->
    </div>
  </div>
</div>

<!-- commande list -->
<div class="row" id="list-order">
  <div class="col order-item" data-commande-id="FB0506">
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
        <div class="product-ordered-list">
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
        </div>
        <p class="text-muted text-right"><strong>Total</strong></p>
        <h4 class="text-primary text-right total-order mb-0 font-weight-bold">60.000 FR</h4>
      </div>
      <div class="bg-white p-3 order-serial rounded">
        <div class="d-flex justify-content-center align-items-center">
          <svg class="barcode" jsbarcode-value="FB0506" jsbarcode-height="30" jsbarcode-displayValue="false"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="col order-item" data-commande-id="FB0506">
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
        <div class="product-ordered-list">
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
        </div>
        <p class="text-muted text-right"><strong>Total</strong></p>
        <h4 class="text-primary text-right total-order mb-0 font-weight-bold">60.000 FR</h4>
      </div>
      <div class="bg-white p-3 order-serial rounded">
        <div class="d-flex justify-content-center align-items-center">
          <svg class="barcode"
            jsbarcode-value="FB0506"
            jsbarcode-height="30"
            jsbarcode-displayValue="false"
            >
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="col order-item" data-commande-id="FB0506">
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
            jsbarcode-value="FB0506"
            jsbarcode-height="30"
            jsbarcode-displayValue="false"
            >
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="col order-item" data-commande-id="FB0506">
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
