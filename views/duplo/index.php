<?php 
    include_once '../helpers/top.php';
    include_once '../helpers/nav.php';
    include_once '../helpers/database.php';

    $duplo = 'duplo';


?>

<div class="frame-2">
    <div class="info">
        <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div class="spaceTop"></div>
            <?php foreach ($duplos[$duplo]['img'] as $key => $value) { ?>
                <?php if ($value['video']['tipo'] == 'youtube') { ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo 'https://www.youtube.com/embed/' . $value['video']['embed']?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                <?php } else { ?>
                    <?php if (isset($value['link']) ) { ?>
                        <a href="<?php echo $value['link'] ?>" target="_blank">
                            <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $value['img']?>"  alt="Duplo - <?php echo $value?>">
                        </a>
                    <?php } else { ?>
                        <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $value?>"  alt="Duplo - <?php echo $value?>">
                    <?php } ?>
                <?php } ?>    
                <div class="spaceBetween80"></div>
            <?php } ?>
            <div class="spaceBottom"></div>
        </div>
    </div>
</div>

<?php include_once '../helpers/footer.php' ?>
