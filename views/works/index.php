<?php 

    include_once '../helpers/top.php';
    include_once '../helpers/nav.php';
    include_once '../helpers/database.php';

    if(isset($_GET['work'])) {
        $work = $_GET['work'];
    } else {
        $work = '';
    }

?>

<div class="frame-2">

    <div class="info">
        <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div class="spaceTop"></div>
            <?php if (is_array($works[$work]['img'])) { ?>
                <?php foreach ($works[$work]['img'] as $key => $value) { ?>
                    <?php if (is_array($value)) { ?>
                        <?php if ($value['video']['tipo'] == 'youtube') { ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo 'https://www.youtube.com/embed/' . $value['video']['embed']?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $value?>" alt="Work - <?php echo $works [$work]['name']?>">
                        <?php if(is_array($works[$work])) {
                            if($works[$work]['legenda'][$key]) {
                                echo $works[$work]['legenda'][$key];
                            }
                        }
                        ?>
                    <?php } ?>
                    <div class="spaceBetween80"></div>
                <?php } ?>
            <?php } else { ?>
                <img class="img-fluid mx-auto d-block lazyload" data-src="<?php echo BASE . $works[$work]['img']?>" alt="Work - <?php echo $works [$work]['name']?>">
            <?php } ?>
            <div class="spaceBottom"></div>
            <div class="container info-txt">
            <?php if (is_array($works[$work])) {
                echo  $works[$work]['bottom'];
            } ?>
            </div>
            <div class="spaceBottom"></div>
        </div>
    </div>

</div>

<?php include_once '../helpers/footer.php' ?>
