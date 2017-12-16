<?php include 'PHP/Inc/head.php'; ?>

    <div class="d-flex w-100 h-100 justify-content-center align-items-center">
      <div class="d-flex justify-content-center flex-column mr-5">
        <p class="logo-img-wrapper connexion d-flex align-items-center justify-content-center rounded-circle mx-auto">
          <img src="Media/Images/logo.jpeg" alt="logo-img" class="d-inline-block" id="logo-connexion">
        </p>
        <h1 class="intro text-center font-weight-light">Welcome to BelliseStyle</h1>
        <h2 class="text-muted text-center font-weight-light">Admin session <span class="h1">.</span>  </h2>
      </div>
      <form class="log-form pb-3  bg-white" action="index.html" method="post">
        <h3 class="mb-3 p-3">Connexion</h3>
        <fieldset class="form-group px-3">
          <label for="username">UserName</label>
          <input type="text" id="username" class="rounded-0 form-control">
        </fieldset>
        <fieldset class="form-group px-3">
          <label for="password">Password</label>
          <input type="password" id="password" class="rounded-0 form-control">
        </fieldset>
        <fieldset class="form-group px-3">
          <button type="submit" name="login" class="btn btn-primary btn-block border-none rounded-0">Connexion</button>
        </fieldset>
        <p class="px-3"> <a href="#">Mot de passe oubliez?</a></p>
      </form>
    </div>

<?php include 'PHP/Inc/foot.php'; ?>