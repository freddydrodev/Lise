<?php
$page = 'Clients';
$ind = true;
include '../PHP/Inc/head.php';
$_sex = array('' => '<small class="text-muted ">(Non Defini)</small>', 'H' => 'Homme', 'F' => 'Femme');
?>
<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
      <h2 class="text-uppercase m-0">Clients</h2>
    </div>
  </div>
</div>

<div class="row" id="customer-list">
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
            <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="category">
              Contact
            </button>
          </th>
          <th scope="col" class="border-top-0 border-bottom-0 text-center">
            <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="price">
              Facebook
            </button>
          </th>
          <th scope="col" class="border-top-0 border-bottom-0 text-center">
            <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="quantity">
              Email
            </button>
          </th>
          <th scope="col" class="border-top-0 border-bottom-0 text-center">
            <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="decrement">
              Sexe
            </button>
          </th>
          <th scope="col" class="border-top-0 border-bottom-0 text-center">
            <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="color">
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
            <td class="ID border-top-0 align-middle"><?php echo $cust['fullname'] ?></td>
            <td class="category border-top-0 align-middle"><?php echo strlen($cust['phone']) > 0 ? $cust['phone'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
            <td class="price border-top-0 align-middle"><?php echo strlen($cust['facebookID']) > 0 ? $cust['facebookID'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
            <td class="quantity border-top-0 align-middle"><?php echo strlen($cust['email']) > 0 ? $cust['email'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
            <td class="decrement border-top-0 align-middle"><?php echo $_sex[$cust['sex']] ?></td>
            <td class="color border-top-0 align-middle"><?php echo strlen($cust['location']) > 0 ? $cust['location'] : '<small class="text-muted ">(Non Defini)</small>' ?></td>
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
<?php include '../PHP/Inc/foot.php'; ?>
