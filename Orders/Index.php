<?php
$page = 'Commandes';
$ind = true;
include '../PHP/Inc/head.php';
?>
<div id="orders-list">
  <div class="row title">
    <div class="col position-relative">
      <div class="d-flex justify-content-between p-3 align-items-center rounded-3 mb-4">
        <h2 class="text-uppercase m-0">Commandes</h2>
        <!-- start commande Modal -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCommandeModal">
            <span class="flaticon-mathematical-addition-sign small-icon"></span>
            Ajouter Commande
          </button>
          <button type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseSearch" class="search-toogle btn btn-info">
            <span class="flaticon-magnifying-glass-1"></span>
          </button>
        </div>
        <div class="collapse position-absolute h-100 light-shadow" id="search">
          <div class="input-group h-100">
            <input type="search" name="search" placeholder="Recherchez dans clients..." class="search border-0 form-control px-4">
            <button type="reset" class="input-group-addon bg-white border-0 text-muted px-4" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseSearch">
              <span class="flaticon-cancel"></span>
            </button>
          </div>
        </div>
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
                        <div class="sugestion-wrapper position-relative"></div>
                      </fieldset>
                      <p class="small px-3 pt-2">List Article</p>
                      <div class="order-form-product-added position-relative"></div>
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
      </div>
    </div>
  </div>

  <!-- commande list -->

  <table class="table table-bordered table-sm border-top-0 border-left-0 border-right-0">
    <thead>
      <tr >
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="ref">
            Reference
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="client">
            Client
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="atricle">
            Articles
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="location">
            Lieu
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="date">
            Date De Com.
          </button>
        </th>
        <!-- <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="date">
            Date De Liv.
          </button>
        </th> -->
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="madeBy">
            Faite Par
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="sort bg-transparent rounded-30 btn btn-block" data-sort="delivrer">
            Livreur
          </button>
        </th>
        <th scope="col" class="text-center border-0">
          <button class="bg-transparent rounded-30 btn btn-block">
            Options
          </button>
        </th>
      </tr>
    </thead>
    <tbody class="list text-center light-shadow">
      <?php $livraisons = $db->prepare('
      SELECT orders.ID, orders.createdAt, cust.fullname AS custName, cust.phone, cust.location, emp.fullname AS empName, livr.fullname AS livrName, livr.ID as livrID FROM orders INNER JOIN users AS cust ON cust.ID = orders.customerID INNER JOIN users AS emp ON emp.ID = orders.employeeID INNER JOIN users AS livr ON livr.ID = orders.livreurID ORDER BY orders.createdAt DESC ');
      $livraisons->execute();

      while ($livraison = $livraisons->fetch()) { ?>
        <tr class="mb-3 bg-white border-bottom-1">
          <td class="ref align-middle">
            <svg class="barcode" jsbarcode-value="<?php echo $livraison['ID'] ?>" jsbarcode-height="20" jsbarcode-displayValue="false" jsbarcode-width="1"></svg>
            <p><strong>#<?php echo $livraison['ID'] ?></strong></p>
          </td>
          <td class="client align-middle"><?php echo $livraison['custName'] ?>
            <br>
            <strong class="text-muted small">(<?php echo $livraison['phone'] ?>)</strong></td>
          <td class="article align-middle bg-light">
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
          <td class="location align-middle"><?php echo $livraison['location'] ?></td>
          <td class="date position-relative align-middle date-order-<?php echo $livraison['ID'] ?>">
            <span class="init">../../..</span>
            <p class="small text-left px-2 py-1 my-1 bg-danger rounded light-shadow-danger text-white border-info ">
              14 Jan 2018
            </p>
            <p class="small text-left px-2 py-1 my-1 bg-info rounded light-shadow-info text-white border-info ">
              21 Jan 2018
            </p>
            <button type="button" class="btn btn-primary position-absolute btn-sm createEventBtn" data-toggle="modal" data-target="#addCategoryModal">
              <span class="flaticon-mathematical-addition-sign small-icon"></span>
            </button>
          </td>
          <script type="text/javascript">
            $(".date-order-<?php echo $livraison['ID'] ?> .init").text(moment("<?php echo $livraison['createdAt'] ?>").format("ddd Do MMM YYYY"));
          </script>
          <!-- <td class="madeBy align-middle"><?php echo $livraison['empName'] ?></td> -->
          <td class="madeBy align-middle"><?php echo $livraison['empName'] ?></td>
          <td class="delivrer align-middle">
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
</div>

<?php include '../PHP/Inc/foot.php'; ?>
