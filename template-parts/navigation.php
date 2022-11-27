<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<nav class="navbar navbar-expand-lg navbar-dark" id="page-main-nav">
  <div class="container navbar-container" id="page-main-nav-container">
    <a class="navbar-brand">
      <img class="img-fluid" style="max-width: var(--logo-width, 100px);" src="https://via.placeholder.com/150x60/03a9f4/FFFFFF/?text=LOGO" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item active">
          <a class="nav-link px-lg-4" href="#Menu1">Menu1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-4" href="#Menu2">Menu2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-4" href="#Menu3">Menu3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-4" href="#Menu4">Menu4</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  #page-main-nav {
    --logo-width: 100px;
    position: absolute; 
    top: 0; 
    left: 0; 
    right: 0; 
    z-index: 100;
  }
  .hero-section {
    padding-top: 6rem!important;
  }
  /* nav mobile */
  @media (max-width: 991px) {
    #page-main-nav { 
      background-color: var(--bs-primary);
      position: fixed!important; 
    }
  }
  /* nav desktop */
  @media (min-width: 992px) {
    #page-main-nav-container {
      padding-right: var(--logo-width, 0);
    }
  }
</style>
