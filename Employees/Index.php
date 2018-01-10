<?php
$page = 'Employees';
$ind = true;
include '../PHP/Inc/head.php';
$_sex = array('H' => 'Homme', 'F' => 'Femme');
?>
<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
      <h2 class="text-uppercase m-0">Employee <br/><small class="text-muted">Afficher: 10 sur 20</small></h2>
      <!-- insert category modal start -->

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Employee</button>

      <div class="modal fade" tabindex="-1" role="dialog" id="addCategoryModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-0 border-0">
            <div class="modal-header border-0 py-2">
              <h5 class="modal-title position-relative legend px-3"><span class="legend-text">Ajouter Employee</span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="./" method="post">
                <?php include '../PHP/Script/addEmployee.php'; ?>
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Nom</label>
                  <input type="text" name="name" placeholder="EX: Kuame Kore" class="form-control border-0 rounded-0 px-0" required>
                  <span class="under w-100 d-block position-relative"></span>
                </fieldset>
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Pseudo</label>
                  <input type="text" name="pseudo" placeholder="EX: KKre" class="form-control border-0 rounded-0 px-0" required>
                  <span class="under w-100 d-block position-relative"></span>
                </fieldset>
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Numero</label>
                  <input type="text" name="phone" placeholder="EX: +22501234567" class="form-control border-0 rounded-0 px-0" required>
                  <span class="under w-100 d-block position-relative"></span>
                </fieldset>
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Sex</label>
                  <select class="custom-select form-control" name="sex" required>
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                  </select>
                </fieldset>
                <fieldset class="form-group px-3 material-input mb-1">
                  <label class="small">Type D'employee</label>
                  <select class="custom-select form-control" name="type" required>
                    <option value="2">Caissiere</option>
                    <option value="3">Livreur</option>
                  </select>
                </fieldset>
                <div class="modal-footer border-0">
                  <button type="submit" name="addEmployee" class="btn btn-primary">Ajouter</button>
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

<div class="row" id="employee-list">
  <div class="col">
    <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="pills-caissiere-tab" data-toggle="pill" href="#pills-caissiere" role="tab" aria-controls="pills-caissiere" aria-selected="false">Caissieres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" id="pills-livreur-tab" data-toggle="pill" href="#pills-livreur" role="tab" aria-controls="pills-livreur" aria-selected="true">Livreurs</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-livreur" role="tabpanel" aria-labelledby="pills-livreur-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Nom
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Username
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Mot De Passe Initial
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Numero
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="category">
                  Sex
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
            <?php $livreurs = $db->query('SELECT * FROM users WHERE usertype = 3 ORDER BY fullname');
            while ($livreur = $livreurs->fetch()) { ?>
              <tr class="mb-3 bg-white border-bottom-1">
                <td class="border-top-0 align-middle"><?php echo $livreur['fullname'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['username'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['init'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['phone'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $_sex[$livreur['sex']] ?></td>
                <td class="border-top-0 align-middle">
                  <a href="#" class="btn btn-primary">
                    <span class="flaticon-edit-1"></span>
                  </a>
                  <a href="#" class="btn btn-danger ml-2">
                    <span class="flaticon-delete"></span>
                  </a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="pills-caissiere" role="tabpanel" aria-labelledby="pills-caissiere-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Nom
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Username
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Mot De Passe Initial
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                  Numero
                </button>
              </th>
              <th scope="col" class="border-top-0 border-bottom-0 text-center">
                <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="category">
                  Sex
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
            <?php $livreurs = $db->query('SELECT * FROM users WHERE usertype = 2 ORDER BY fullname');
            while ($livreur = $livreurs->fetch()) { ?>
              <tr class="mb-3 bg-white border-bottom-1">
                <td class="border-top-0 align-middle"><?php echo $livreur['fullname'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['username'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['init'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $livreur['phone'] ?></td>
                <td class="border-top-0 align-middle"><?php echo $_sex[$livreur['sex']] ?></td>
                <td class="border-top-0 align-middle">
                  <a href="#" class="btn btn-primary">
                    <span class="flaticon-edit-1"></span>
                  </a>
                  <a href="#" class="btn btn-danger ml-2">
                    <span class="flaticon-delete"></span>
                  </a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
<?php include '../PHP/Inc/foot.php'; ?>
