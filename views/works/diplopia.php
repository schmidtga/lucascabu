<?php 

  include_once '../helpers/top.php';
  include_once '../helpers/nav.php';
  include_once '../helpers/database.php';

?>

<div class="frame-2">

  <div class="info diplopia">
    <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
      <div class="spaceTop"></div>
      <?php foreach ($works['diplopia']['img'] as $key => $value) { ?>
        <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $value?>" alt="Work - <?php echo $works [$work]['name']?>">
        <p class="caption">
          <?php if(is_array($works['diplopia'])) {
            if($works['diplopia']['legenda'][$key]) {
                echo $works['diplopia']['legenda'][$key];
            }
          }?>
        </p>
        <div class="spaceBetween80"></div>
      <?php } ?>
      <div class="info-bottom">
        <p>
          <?php if (is_array($works['diplopia'])) {
            echo $works['diplopia']['bottom'];
          } ?>
        </p>
      </div>
      <div class="spaceBottom"></div>
    </div>
  </div>

</div>

<?php include_once '../helpers/footer.php' ?>
