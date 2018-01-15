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
              <?php include '../PHP/Script/makeOrder.php'; ?>
              <form class="form-order" action="./" method="post">
                <div class="position-relative step-wrapper">
                  <div class="second-step position-absolute order-form-step w-100">
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Nom Client</label>

                      <input type="text" name="name-client" placeholder="EX: Lise Belle Kuame" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                      <div class="sugestion-wrapper client position-relative">
                        <div class="position-absolute w-100">
                          <div class="position-relative w-100 px-3 scroller">

                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                              <div class="alt px-2 py-1 small my-3 text-white rounded">
                                <h6 class="my-1 p-0 text-primary">Alternative</h6>
                                <div class="d-flex justify-content-between">
                                  <p class="mb-1">#BBBBBB</p>
                                  <p class="mb-1">10 Available(s)</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                  <p class="mb-0">Tshirt - VETEMENT</p>
                                  <p class="mb-0">(4 pour 1)</p>
                                </div>
                              </div>
                            </div>
                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                            </div>
                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Identifiant Facebook</label>
                      <input type="text" name="id-facebook" min="0" placeholder="EX: Belise Style" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Address Electronic</label>
                      <input type="email" name="email" placeholder="EX: belisestyle@yahoo.fr" class="form-control border-0 rounded-0 px-0">
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Numero</label>
                      <input type="text" name="phone" placeholder="EX: +22501234567" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Lieu De Livraison</label>
                      <input type="text" name="location" placeholder="EX: Riviera Faya" class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Livreur</label>
                      <select class="form-control custom-select" name="livreur" required>
                        <?php
                        $liv = $db->query('SELECT fullname, id FROM users WHERE usertype = 3 ORDER BY fullname');
                        while ($l = $liv->fetch()) { ?>
                          <option value="<?php echo $l['id'] ?>"><?php echo $l['fullname'] ?></option>
                        <?php } ?>
                      </select>
                    </fieldset>
                  </div>
                  <div class="first-step current-step position-absolute order-form-step w-100">
                    <fieldset class="form-group px-3 material-input mb-1">
                      <label class="small">Search</label>
                      <input type="text" name="name-product" placeholder="Ecris le nom ou l'ID du produit" class="form-control border-0 rounded-0 px-0 getProduct">
                      <span class="under w-100 d-block position-relative"></span>
                      <div class="sugestion-wrapper articles position-relative">
                        <div class="position-absolute w-100">
                          <div class="position-relative w-100 px-3 scroller">

                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                              <div class="alt px-2 py-1 small my-3 text-white rounded">
                                <h6 class="my-1 p-0 text-primary">Alternative</h6>
                                <div class="d-flex justify-content-between">
                                  <p class="mb-1">#BBBBBB</p>
                                  <p class="mb-1">10 Available(s)</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                  <p class="mb-0">Tshirt - VETEMENT</p>
                                  <p class="mb-0">(4 pour 1)</p>
                                </div>
                              </div>
                            </div>
                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                            </div>
                            <div class="bg-white light-shadow rounded my-3 p-2 w-100 suggestion">
                              <div class="d-flex justify-content-between">
                                <h4>#FFFFFF</h4>
                                <p class="small mb-0">10 Available(s)</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h5 class="text-muted mb-0">PB50 - Placar</h5>
                                <p class="text-primary mb-0">10000 FR</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
                    <button type="submit" name="makeOrder" class="btn btn-success mr-1 ">Ajouter</button>
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
  <?php
  $orders = $db->query('SELECT orders.ID, orders.createdAt, cust.fullname AS custName, cust.location, emp.fullname AS empName, livr.fullname AS livrName, livr.ID as livrID FROM orders INNER JOIN users AS cust ON cust.ID = orders.customerID INNER JOIN users AS emp ON emp.ID = orders.employeeID INNER JOIN users AS livr ON livr.ID = orders.livreurID ORDER BY orders.createdAt DESC ');
  while ($order = $orders->fetch()) { ?>
    <div class="col order-item" data-commande-id="<?php echo $order['ID'] ?>">
      <div>
        <div class="rounded-top bg-primary light-shadow-primary">
          <div class="d-flex w-100 justify-content-between allign-items-center px-3 pt-3 text-white">
            <div>
              <p class="text-dark mb-1">Commande ID</p>
              <h4 class="mb-1">#<?php echo $order['ID'] ?></h4>
            </div>
            <div class="text-right">
              <p class="text-dark mb-1">Date</p>
              <p class="mb-1 date-order-<?php echo $order['ID'] ?>">21 Dec 2017</p>
              <script type="text/javascript">
                document.querySelector(".date-order-<?php echo $order['ID'] ?>").innerHTML = moment("<?php echo $order['createdAt'] ?>").format('LLLL');
              </script>
            </div>
          </div>
          <div class="d-flex w-100 justify-content-between allign-items-center px-3 py-2 text-white">
            <div>
              <p class="text-dark mb-1">Client</p>
              <h6><?php echo $order['custName'] ?></h6>
            </div>
            <div class="text-right">
              <p class="text-dark mb-1">Caissiere</p>
              <h6><?php echo $order['empName'] ?></h6>
            </div>
          </div>
          <div class="d-flex w-100 justify-content-between allign-items-center px-3 py-2 text-white">
            <div>
              <p class="text-dark mb-1">Livreur</p>
              <h6> <a href="../Livreur?id=<?php echo $order['livrID'] ?>" class="text-white"><?php echo $order['livrName'] ?></a> </h6>
            </div>
            <div class="text-right">
              <p class="text-dark mb-1">Lieu</p>
              <h6><?php echo $order['location'] ?></h6>
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
          <div class="product-ordered-list position-relative">
            <?php
            $ordersArticles = $db->prepare('
              SELECT products.name, categories.name AS cat, product_ordered.paid, product_ordered.quantity, color.color
              FROM product_ordered
              INNER JOIN color ON color.ID = product_ordered.colorID
              INNER JOIN products ON products.ID = product_ordered.productID
              LEFT JOIN categories ON categories.ID = products.category
              WHERE product_ordered.orderID = ? ORDER BY products.name');
            $ordersArticles->execute(array($order['ID']));
            $total = 0;
            while ($article = $ordersArticles->fetch()) {
              $total += (double)$article['quantity'] * (double)$article['paid'];
              ?>
              <div class="row">
                <div class="col-6">
                  <p><?php echo $article['name'] ?> <?php echo $article['cat'] ?> <?php echo $article['color'] == 'pas de couleur' ? '' : '('.$article['color'].')' ?></p>
                </div>
                <div class="col">
                  <p><small>x</small><?php echo $article['quantity'] ?></p>
                </div>
                <div class="col">
                  <p class="text-right"><?php echo $article['paid'] ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
          <p class="text-muted text-right"><strong>Total</strong></p>
          <h4 class="text-primary text-right total-order mb-0 font-weight-bold"><?php echo $total ?> FR</h4>
        </div>
        <div class="bg-white p-3 order-serial rounded">
          <div class="d-flex justify-content-center align-items-center">
            <svg class="barcode" jsbarcode-value="<?php echo $order['ID'] ?>" jsbarcode-height="30" jsbarcode-displayValue="false"></svg>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<div class="text-center d-flex justify-content-center py-4">
  <button type="button" class="order-opt delete btn btn-danger rounded-30 mx-2 px-4 py-2"><span class="flaticon-delete"></span></button>
  <button type="button" class="order-opt edit btn btn-info rounded-30 mx-2 px-4 py-2"><span class="flaticon-edit-1"></span></button>
  <button type="button" class="order-opt done btn btn-success rounded-30 mx-2 px-4 py-2"><span class="flaticon-checked"></span></button>
</div>

<table class="table table-bordered light-shadow table-sm" id="printable" style="width:1210px">
  <thead class="bg-white">
    <tr>
      <th scope="col" class="text-center">
        <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="name">
          Reference
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="name">
          Client
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="name">
          Articles
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="category">
          Lieu
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="category">
          Date
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="bg-transparent rounded-30 btn btn-block">
          Faite Par
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="bg-transparent rounded-30 btn btn-block">
          Livreur
        </button>
      </th>
      <th scope="col" class="text-center">
        <button class="bg-transparent rounded-30 btn btn-block">
          Options
        </button>
      </th>
    </tr>
  </thead>
  <tbody class="list text-center">
    <?php $livraisons = $db->prepare('
    SELECT orders.ID, orders.createdAt, cust.fullname AS custName, cust.phone, cust.location, emp.fullname AS empName, livr.fullname AS livrName, livr.ID as livrID FROM orders INNER JOIN users AS cust ON cust.ID = orders.customerID INNER JOIN users AS emp ON emp.ID = orders.employeeID INNER JOIN users AS livr ON livr.ID = orders.livreurID ORDER BY orders.createdAt DESC ');
    $livraisons->execute();

    while ($livraison = $livraisons->fetch()) { ?>
      <tr class="mb-3 bg-white border-bottom-1">
        <td class="align-middle">
          <svg class="barcode" jsbarcode-value="<?php echo $livraison['ID'] ?>" jsbarcode-height="20" jsbarcode-displayValue="false" jsbarcode-width="1"></svg>
          <p><strong>#<?php echo $livraison['ID'] ?></strong></p>
        </td>
        <td class="align-middle"><?php echo $livraison['custName'] ?>
          <br>
          <strong class="text-muted small">(<?php echo $livraison['phone'] ?>)</strong></td>
        <td class="align-middle bg-light">
          <?php
          $ordersArticles = $db->prepare('
            SELECT products.name,products.ID, categories.name AS cat, product_ordered.paid, product_ordered.quantity, color.color
            FROM product_ordered
            INNER JOIN color ON color.ID = product_ordered.colorID
            INNER JOIN products ON products.ID = product_ordered.productID
            LEFT JOIN categories ON categories.ID = products.category
            WHERE product_ordered.orderID = ? ORDER BY products.name');
          $ordersArticles->execute(array($livraison['ID']));
          $total = 0;
          while ($article = $ordersArticles->fetch()) {
            $total += (double)$article['quantity'] * (double)$article['paid'];
            ?>
            <div class="row small text-left">
              <div class="col-6">
                <p class="mb-1"><strong>#<?php echo $article['ID'] ?></strong></p>
                <p class="mb-1"><?php echo $article['name'] ?> <?php echo $article['cat'] ?> <?php echo $article['color'] == 'pas de couleur' ? '' : '('.$article['color'].')' ?></p>
              </div>
              <div class="col">
                <p class="mb-1"><small>x</small><?php echo $article['quantity'] ?></p>
              </div>
              <div class="col">
                <p class="mb-1"> <strong class=""><?php echo $article['paid'] ?> Fr</strong></p>
              </div>
            </div>
          <?php } ?>
          <div class="row small text-left bg-white text-primary">
            <div class="col-6">
              <p class="mb-1 py-2"><strong>Total</strong></p>
            </div>
            <div class="col">
              <p class="mb-1 py-2"></p>
            </div>
            <div class="col">
              <p class="mb-1 py-2"><strong><?php echo $total ?> Fr</strong></p>
            </div>
          </div>
        </td>
        <td class="align-middle"><?php echo $livraison['location'] ?></td>
        <td class="align-middle date-order-<?php echo $livraison['ID'] ?>">21 Dec 2017
        </td>
        <script type="text/javascript">
          $(".date-order-<?php echo $livraison['ID'] ?>").text(moment("<?php echo $livraison['createdAt'] ?>").format("ddd Do MMM YYYY"));
        </script>
        <td class="align-middle"><?php echo $livraison['empName'] ?></td>
        <td class="align-middle">
          <a href="../Livreur?id=<?php echo $livraison['livrID'] ?>" class="text-dark">
            <?php echo $livraison['livrName'] ?>
          </a>
        </td>
        <td class="border-top-0 align-middle">
          <div class="btn-group-vertical">
            <button type="button" class="order-opt delete btn btn-danger py-2"><span class="flaticon-delete"></span></button>
            <button type="button" class="order-opt edit btn btn-info py-2"><span class="flaticon-edit-1"></span></button>
            <button type="button" class="order-opt done btn btn-success py-2"><span class="flaticon-checked"></span></button>
          </div>
        </td>
      </tr>
    <?php } ?>

  </tbody>
</table>

<?php include '../PHP/Inc/foot.php'; ?>
