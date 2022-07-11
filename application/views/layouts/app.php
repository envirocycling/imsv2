<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$app_name?></title>

    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">

  </head>

<body style="background-color: #f1f5f9 !important;">

  <?php include_once APPPATH . 'views/partials/navbar.php';?>

  <div class="container-fluid mt-4" id="app">
  <?php include_once APPPATH . $content_view;?>
  </div>

  <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

</body>
</html>