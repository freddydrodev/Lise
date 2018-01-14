<?php
$page = 'Clients';
$ind = true;
include '../PHP/Inc/head.php';
$_sex = array('' => '<small class="text-muted ">(Non Defini)</small>', 'H' => 'Homme', 'F' => 'Femme');
?>
<div id="customer-list">

  <div class="row title">
    <div class="col position-relative">
      <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
        <h2 class="text-uppercase m-0">Clients</h2>
        <button type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseSearch" class="search-toogle btn btn-primary rounded-30"><span class="flaticon-magnifying-glass-1"></span></button>
      </div>
      <div class="collapse position-absolute h-100 light-shadow" id="search">
        <div class="input-group h-100">
          <input type="search" name="search" placeholder="Recherchez dans clients..." class="search border-0 form-control px-4">
          <button type="reset" class="input-group-addon bg-white border-0 text-muted px-4" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseSearch">
            <span class="flaticon-cancel"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                Nom
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="phone">
                Contact
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="facebook">
                Facebook
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="email">
                Email
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="sex">
                Sexe
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="location">
                Lieu de residence
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
          <?php
          $users = $db->query('SELECT * FROM users WHERE usertype = 4 ORDER BY fullname');
          while ($cust = $users->fetch()) { ?>
            <tr class="mb-3 bg-white border-bottom-1">
              <td class="name border-top-0 align-middle"><?php echo $cust['fullname'] ?></td>
              <td class="phone border-top-0 align-middle"><?php echo strlen($cust['phone']) > 0 ? $cust['phone'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
              <td class="facebook border-top-0 align-middle"><?php echo strlen($cust['facebookID']) > 0 ? $cust['facebookID'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
              <td class="email border-top-0 align-middle"><?php echo strlen($cust['email']) > 0 ? $cust['email'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
              <td class="sex border-top-0 align-middle"><?php echo $_sex[$cust['sex']] ?></td>
              <td class="location border-top-0 align-middle"><?php echo strlen($cust['location']) > 0 ? $cust['location'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
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

<?php include '../PHP/Inc/foot.php'; ?>
