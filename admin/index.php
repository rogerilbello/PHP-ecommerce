<!-- creazione query -->
<?php 
  $page = isset($_GET ["page"]) ? $_GET ["page"] : 'dashboard';
?>

<?php include '../inc/init.php' ?>
<?php include ROOT_PATH . 'public/template-parts/header.php' ?>

<!-- suddivisione per creazione sidebar tramite 4 cards -->
<div id="main" class="container" style="margin-top:100px;">
  <div class="row">
    <div class="col-9">
      <?php include ROOT_PATH . 'admin/pages/' . $page . '.php' ?>
    </div>

<?php include ROOT_PATH . 'public/template-parts/sidebar.php' ?>
  </div>
</div>

<?php include ROOT_PATH  .'public/template-parts/footer.php' ?>