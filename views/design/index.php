<?php 
  
    include_once '../helpers/top.php';
    include_once '../helpers/nav.php';
    include_once '../helpers/database.php';

    $design = 'design';

?>

<div class="frame-2">
    <div class="info">
        <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div class="spaceTop"></div>
            <?php foreach ($designs[$design]['img'] as $key => $value) { ?>
                <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $value?>"  alt="Design - <?php echo $value?>">
                <div class="spaceBetween80"></div>
            <?php } ?>
            <div class="spaceBottom"></div>
        </div>
    </div>
</div>

<?php include_once '../helpers/footer.php' ?>
