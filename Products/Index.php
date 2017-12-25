<?php
$page = 'Products';
$ind = true;
include '../PHP/Inc/head.php';
include $_ind . 'PHP/Script/addCategory.php';

// show categories list
$showCategories = $db->query('SELECT * FROM Categories ORDER BY createdAt');

?>

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active" aria-current="page">Produits</li>
  </ol>
</nav>
<div class="row resume">
  <div class="col-md-6 col-lg-3 mb-4">
    <div class="p-3 d-flex bg-white text-truncate light-shadow">
      <h3 class="mr-3 text-primary">100</h3>
      <div class="w-100">
        <h5>Produits</h5>
        <p class="text-muted">Libre</p>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 mb-4">
    <div class="p-3 d-flex bg-white text-truncate light-shadow">
      <h3 class="mr-3 text-warning">50</h3>
      <div class="w-100">
        <h5>Categories</h5>
        <p class="text-muted">Total</p>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 mb-4">
    <div class="p-3 d-flex bg-white text-truncate light-shadow">
      <h3 class="mr-3 text-danger">50</h3>
      <div class="w-100">
        <h5>Commandes</h5>
        <p class="text-muted">Total</p>
        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 mb-4">
    <div class="p-3 d-flex bg-white text-truncate light-shadow">
      <h3 class="mr-3 text-success">500k</h3>
      <div class="w-100">
        <h5>Ventes</h5>
        <p class="text-muted">Total</p>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Categories title -->
<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
      <h2 class="text-uppercase m-0">Categories</h2>
      <!-- insert category modal start -->

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Categorie</button>

      <div class="modal fade" tabindex="-1" role="dialog" id="addCategoryModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-0 border-0">
            <div class="modal-header border-0 py-2">
              <h5 class="modal-title position-relative legend px-3"><span class="legend-text">Ajouter Categorie</span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="./" method="post">
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Nom de la Categorie</label>
                  <input type="text" name="category" placeholder="EX: Etagere, Electronique, Ordinateur, Vetement, ..." class="form-control border-0 rounded-0 px-0" required>
                  <span class="under w-100 d-block position-relative"></span>
                </fieldset>
                <div class="modal-footer border-0">
                  <button type="submit" name="addCategory" class="btn btn-primary">Ajouter</button>
                  <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <!-- end insert category modal -->
    </div>
  </div>
</div>
<!-- Categories list -->
<div class="row mb-0" id="categories-list">
  <!-- start category items -->
  <?php while ($showCategory = $showCategories->fetch()) { ?>
    <div class="col-4 py-5">
      <div class="card border-0 light-shadow">
        <div class="card-body">
          <h4 class="card-title"><?php echo $showCategory['name'] ?></h4>
          <!-- items in category count -->
          <?php
          $countItemsInCategory = $db->prepare('SELECT COUNT(*) AS nbr FROM items_in_category WHERE categoryID = ?');
          $countItemsInCategory->execute(array($showCategory['ID']));
          $_countItemsInCategory = $countItemsInCategory->fetch();
           ?>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $_countItemsInCategory['nbr'] > 1 ?  $_countItemsInCategory['nbr'] . ' Articles' : $_countItemsInCategory['nbr'] . ' Article' ?></h6>
          <div class="card-text mb-3 position-relative">
            <!-- begining items in category list -->
            <?php if ($_countItemsInCategory['nbr'] > 0): ?>
              <div class="media">
                <img class="mr-3 img-prev-media" src="../Media/Images/Articles/P50.jpeg" alt="Image de l'article">
                <div class="media-body">
                  <h5 class="mt-0 mb-0">12 Paires</h5>
                  <p class="text-muted">10.000Fr <span class="badge badge-primary badge-pill font-weight-normal float-right">12 Disponible</span></p>
                </div>
              </div>
            <?php else: ?>
              <p>Aucun Produit.</p>
            <?php endif; ?>
            <!-- end items in category list -->
          </div>
          <a href="#" class="card-link btn btn-primary"><span class="flaticon-edit-1"></span></a>
          <a href="#" class="card-link btn btn-danger ml-2"><span class="flaticon-delete"></span></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- end category items -->
</div>

<!-- Produits title -->
<div  id="productsList">
  <div class="row mb-4 title">
    <div class="col">
      <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
        <h2 class="text-uppercase m-0">Produits <br/>
          <small class="text-muted text-capitalize">Afficher: <i>20 Articles</i> </small>
        </h2>
        <!-- start add product modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Produit</button>

        <div class="modal fade" tabindex="-1" role="dialog" id="addProductModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0 border-0">
              <div class="modal-header border-0 py-2">
                <h5 class="modal-title position-relative legend px-3"><span class="legend-text">Ajouter Produit</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="./" method="post">
                  <fieldset class="form-group px-3 material-input mb-1">
                    <label class="small">Nom</label>
                    <input type="text" name="name" placeholder="EX:  T-shirt Nike, Chaussure AD, ..." class="form-control border-0 rounded-0 px-0" required>
                    <span class="under w-100 d-block position-relative"></span>
                  </fieldset>
                  <div class="row px-3">
                    <fieldset class="form-group px-3 material-input mb-1 col">
                      <label class="small">Prix</label>
                      <input type="text" name="price" placeholder="EX: 10000, 500000, ..." class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1 col">
                      <label class="small">Decrementation</label>
                      <input type="text" name="decrem" placeholder="EX: 1, 1.5, ..." class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                  </div>
                  <div class="row px-3">
                    <fieldset class="form-group px-3 material-input mb-1 col">
                      <label class="small">Couleur</label>
                      <input type="text" name="color" placeholder="EX: Rouge, Bleu, Vert, ..." class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                    <fieldset class="form-group px-3 material-input mb-1 col">
                      <label class="small">Quantite</label>
                      <input type="text" name="quantity" placeholder="EX: 100, 10, ..." class="form-control border-0 rounded-0 px-0" required>
                      <span class="under w-100 d-block position-relative"></span>
                    </fieldset>
                  </div>
                  <fieldset class="form-group p-3 material-input mb-1 col">
                    <button type="button" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Ajouter Nouvelle Couleur et Quantite"><span class="flaticon-mathematical-addition-sign"></span></button>
                  </fieldset>
                  <fieldset class="form-group px-3 material-input mb-1 col">
                    <label class="small">Categorie</label>
                    <input type="text" name="category" placeholder="EX: Etagere, electronic, ..." class="form-control border-0 rounded-0 px-0" required>
                    <span class="under w-100 d-block position-relative"></span>
                  </fieldset>
                  <div class="modal-footer border-0">
                    <button type="submit" name="addProduct" class="btn btn-primary">Ajouter</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end add Product modal -->
        <!-- <div class="">
          <div class="input-group search-products">
            <input class="search form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Rechercher un produits" />
            <span class="input-group-addon bg-primary text-white rounded-0 border-0"><i class="flaticon-magnifying-glass-1"></i></span>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Produits list -->
  <div class="row" id="products-list">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="bg-none border-0 rounded-30 btn btn-block">
                Image
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="ID">
                ID
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                Nom
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="category">
                Categories
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="price">
                Prix
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="quantity">
                Quantite
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="decrement">
                RDS
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="color">
                Couleur
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="bg-none border-0 rounded-30 btn btn-block">
                Options
              </button>
            </th>
          </tr>
        </thead>
        <tbody class="list text-center light-shadow">
          <!-- start item list -->
          <tr class="mb-3 bg-white border-bottom-1">
            <td class="border-top-0 articleImg align-middle"><img src="../Media/Images/Articles/P50.jpeg" alt="Article Img" class="w-100"></td>
            <th scope="row" class="ID border-top-0 align-middle">#FB03H</th>
            <td class="name border-top-0 align-middle">12 paires</td>
            <td class="category border-top-0 align-middle">Etagere</td>
            <td class="price border-top-0 align-middle">10.000</td>
            <td class="quantity border-top-0 align-middle">100</td>
            <td class="decrement border-top-0 align-middle">1.5</td>
            <td class="color border-top-0 align-middle">Rouge</td>
            <td class="border-top-0 align-middle">
              <a href="#" class="btn btn-primary">
                <span class="flaticon-edit-1"></span>
              </a>
              <a href="#" class="btn btn-danger ml-2">
                <span class="flaticon-delete"></span>
              </a>
            </td>
          </tr>
          <!-- end item list -->
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include '../PHP/Inc/foot.php'; ?>
