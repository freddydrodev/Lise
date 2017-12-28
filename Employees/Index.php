<?php
$page = 'Employees';
$ind = true;
include '../PHP/Inc/head.php';
?>
<div class="row title">
  <div class="col">
    <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
      <h2 class="text-uppercase m-0">Employee <br/><small class="text-muted">Afficher: 10 sur 20</small></h2>
      <button type="button" class="btn btn-primary"><span class="flaticon-mathematical-addition-sign small-icon"></span>Ajouter Employee</button>
    </div>
  </div>
</div>

<div class="row" id="employee-list">
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
        <tr class="mb-3 bg-white border-bottom-1">
          <td class="border-top-0 articleImg align-middle"><img src="../Media/Images/Articles/P30.jpeg" alt="Article Img" class="w-100"></td>
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
        <tr class="mb-3 bg-white border-bottom-1">
          <td class="border-top-0 articleImg align-middle"><img src="../Media/Images/Articles/P20.jpeg" alt="Article Img" class="w-100"></td>
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
        <tr class="mb-3 bg-white border-bottom-1">
          <td class="border-top-0 articleImg align-middle"><img src="../Media/Images/Articles/P40.jpeg" alt="Article Img" class="w-100"></td>
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
      </tbody>
    </table>
  </div>
</div>
<?php include '../PHP/Inc/foot.php'; ?>
