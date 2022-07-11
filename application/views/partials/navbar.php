<?php

function is_active($url) {
  return current_url() === site_url($url);
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav">

        <li class="nav-item ">
          <a class="nav-link <?= is_active('/receiving-daily-breakdown') ? 'nav-active' : '' ?>" href="<?= site_url('/receiving-daily-breakdown') ?>">Daily Breakdown</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= is_active('/supplier-deliveries') ? 'nav-active' : '' ?>" href="<?= site_url('/supplier-deliveries') ?>">Supplier Deliveries</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= is_active('/supplier-tonnage-summary') ? 'nav-active' : '' ?>" href="<?= site_url('/supplier-tonnage-summary') ?>">Supplier Tonnage</a>
        </li>
      </ul>
    </div>

  </div>
</nav>