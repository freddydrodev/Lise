<?php
$page = 'Sales';
$ind = true;
include '../PHP/Inc/head.php';
?>
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active" aria-current="page">Ventes</li>
  </ol>
</nav>
<div class="row chart-resume">
  <div class="col">
    <div class="card border-0 p-3 mb-4 light-shadow">
      <div class="d-flex align-items-center">
        <div class="w-50">
          <h5 class="card-title">Evolution Des Ventes</h5>
          <h6 class="card-subtitle text-muted">Courbe representant l'evolution des ventes</h6>
        </div>
        <div class="w-50">
          <ul class="nav nav-tabs justify-content-end border-bottom-0" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link py-1 px-4 btn btn-outline-primary mr-2 text-small" id="thisweek-tab" data-toggle="tab" href="#thisweek" role="tab" aria-controls="thisweek" aria-selected="false">Cette Semaine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link py-1 px-4 btn btn-outline-primary mr-2 text-small" id="thisMonth-tab" data-toggle="tab" href="#thisMonth" role="tab" aria-controls="thisMonth" aria-selected="false">Ce Mois</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active py-1 px-4 btn btn-outline-primary text-small" id="thisYear-tab" data-toggle="tab" href="#thisYear" role="tab" aria-controls="thisYear" aria-selected="true">Cette Annee</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body px-0 pb-0">
        <div class="tab-content" id="salesTab">
          <div class="tab-pane fade" id="thisweek" role="tabpanel" aria-labelledby="thisweek-tab">
            ok2
          </div>
          <div class="tab-pane fade" id="thisMonth" role="tabpanel" aria-labelledby="thisMonth-tab">
            ok3
          </div>
          <div class="tab-pane fade show active" id="thisYear" role="tabpanel" aria-labelledby="thisYear-tab">
            <canvas id="thisYearSales" class="w-100 rounded-3" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Produits title -->
<div  id="productsList">
  <div class="row mb-4 title">
    <div class="col">
      <div class="d-flex justify-content-between p-3 align-items-center rounded-3">
        <h2 class="text-uppercase m-0">Listes des Ventes<br/>
          <small class="text-muted text-capitalize">Afficher: <i>20 Ventes</i> </small>
        </h2>
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
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="ID">
                Article ID
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="name">
                Articles
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="price">
                Payer
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="quantity">
                Clients
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="decrement">
                Agents
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="color">
                Quantites
              </button>
            </th>
            <th scope="col" class="border-top-0 border-bottom-0 text-center">
              <button class="sort bg-none border-0 rounded-30 btn btn-block" data-sort="color">
                Date
              </button>
            </th>
          </tr>
        </thead>
        <tbody class="list text-center light-shadow">
          <tr class="mb-3 bg-white border-bottom-1">
            <th scope="row" class="ID border-top-0 align-middle">#FB03H</th>
            <td class="name border-top-0 align-middle">12 paires <span class="badge badge-pill badge-info font-weight-normal">etagere</span></td>
            <td class="price border-top-0 align-middle">10.000</td>
            <td class="quantity border-top-0 align-middle">100</td>
            <td class="decrement border-top-0 align-middle">1.5</td>
            <td class="color border-top-0 align-middle">Rouge</td>
            <td class="color border-top-0 align-middle">Rouge</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include '../PHP/Inc/foot.php'; ?>
