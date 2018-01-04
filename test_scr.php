<?php
require 'PHP/Inc/_db.php';

if(isset($_POST['test'])){
  $cat = '%' . htmlspecialchars(trim($_POST['test'])) . '%';
  $ar = array();

  $selCat = $db->prepare('SELECT * FROM categories WHERE name LIKE ? ORDER BY name');
  $selCat->execute(array($cat));
  while ($result = $selCat->fetch()) {
    array_push($ar, $result);
  }

  echo json_encode($ar);
}

/*
<div class="row px-3">
  <fieldset class="form-group px-3 material-input mb-1 col">
    <label class="small">Couleur</label>
    <input type="text" name="defaultColor" placeholder="EX: Rouge, Bleu, Vert, ..." class="form-control border-0 rounded-0 px-0">
    <span class="under w-100 d-block position-relative"></span>
  </fieldset>
  <fieldset class="form-group px-3 material-input mb-1 col">
    <label class="small">Quantite</label>
    <input type="number" name="defaultQty" min="0" placeholder="EX: 100, 10, ..." class="form-control border-0 rounded-0 px-0" required>
    <span class="under w-100 d-block position-relative"></span>
  </fieldset>
</div>
<fieldset class="form-group px-3 pt-3 material-input mb-1 col">
  <button type="button" class="btn btn-success btn-block addMoreQuantity" data-toggle="tooltip" data-placement="bottom" title="Ajouter Nouvelle Couleur et Quantite">
    <span class="flaticon-cross small-icon"></span>
  </button>
</fieldset>
<fieldset class="form-group px-3 material-input mb-1 col">
  <label class="small">Categorie</label>
  <select class="form-control custom-select" name="category" required>
    <?php
    $selectCategories = $db->query('SELECT * FROM Categories ORDER BY name');
    while($selectCategory = $selectCategories->fetch()){ ?>
      <option value="<?php echo $selectCategory['ID'] ?>"<?php if ($selectCategory['name'] == 'Uncategorized'): ?> selected <?php endif; ?>><?php echo $selectCategory['name'] ?></option>
    <?php } ?>
  </select>
</fieldset>
<!-- list of alternatif product -->
<?php
$countProducts = $db->query('SELECT COUNT(*) AS nbr FROM products');
$countProduct = $countProducts->fetch();
if($countProduct['nbr'] > 0){
 ?>
<fieldset class="form-group px-3 material-input mb-1 col">
  <input type="checkbox" name="addProductAlt" id="addProductAlt" class="d-none">
  <label for="addProductAlt" class="position-relative">Alternative</label>
  <div class="alternative">
    <div class="row">
      <fieldset class="form-group px-3 material-input mb-1 col">
        <label class="small">Product</label>
        <select class="form-control custom-select alt-inp" name="alt-product">
          <?php
          $productAlt = $db->query('SELECT ID, name FROM products ORDER BY name');
          while($_productAlt = $productAlt->fetch()){ ?>
            <option value="<?php echo $_productAlt['ID'] ?>"><?php echo $_productAlt['name'] ?></option>
          <?php } ?>
        </select>
      </fieldset>
      <fieldset class="form-group px-3 material-input mb-1 col">
        <label class="small">Quantite pour un</label>
        <input type="text" name="alt-quantity" placeholder="EX: 100, 10, ..." class="form-control border-0 rounded-0 px-0 alt-inp">
        <span class="under w-100 d-block position-relative"></span>
      </fieldset>
    </div>
  </div>
</fieldset>

*/
