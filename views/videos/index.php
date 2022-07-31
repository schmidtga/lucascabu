<?php

    include_once '../helpers/database.php';
    include_once '../helpers/top.php';
    include_once '../helpers/nav.php';


    $youtube = 'https://www.youtube.com/embed/';
    $vimeo = 'https://player.vimeo.com/video/';
    $tipo = '';

?>

<div class="frame-2">
    <div class="info">
        <div class="offset-md-3 col-md-6 offset-lg-3 col-lg-6">
            <div class="spaceTop"></div>
            <?php foreach ($videos as $key => $value) { ?>

                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php ($value['tipo']=='youtube') ? $tipo = $youtube : $tipo = $vimeo; ?>
                        <iframe class="embed-responsive-item" src="<?php echo $tipo . $value['embed']?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <p class="card-text"><?php echo $value['label']?></p>
                </div>

            <?php } ?>
            <div class="spaceBottom"></div>
        </div>
    </div>
</div>

<?php include_once '../helpers/footer.php' ?>