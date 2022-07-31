<?php

    include_once '../helpers/database.php';

    $path = $_SERVER['REQUEST_URI'];
    // para ambiente de homolog
    // $path = str_replace('clientes/', '', $path);
    $path = str_replace('/lucascabu/', '', $path);
    $path = str_replace('/', '-', $path);
    $path = ltrim($path, '-');

?>

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <nav>
        <a href="<?php echo BASE?>info" title="Carimbo">
            <img class="carimbo-nav img-fluid mx-auto d-block" src="<?php echo BASE . $carimbos[$path]['img']?>" alt="Lucas Cabu Menu">
        </a>
        <ul class="sidebar-nav">
            <!-- li>
                <a class="nav-info" href="<?php // echo BASE?>info">
                    <img src="<?php // echo BASE?>img/menu/principal/menu-info.png" alt="menu info">
                    <span></span>
                </a>
            </li -->
            <li>
                <a class="nav-works withKids" href="#">
                    <img src="<?php echo BASE?>img/menu/principal/menu-works.png" alt="menu works">
                    <span></span>
                </a>
                <ul class="sidebar-subnav">
                    <li>
                        <a class="subnav-works-diplopia" href="<?php echo BASE?>work/diplopia">
                            <img src="<?php echo BASE?>img/menu/works/menu-works-diplopia.png" alt="menu works diplopia">
                            <span></span>
                        </a>
                    </li>
                    <li>
                        <a class="subnav-works-anarquismo" href="<?php echo BASE?>work/anarquismo-espiritual">
                            <img src="<?php echo BASE?>img/menu/works/menu-works-anarquismo-espiritual.png" alt="menu works anarquismo espiritual">
                            <span></span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="subnav-works-letraset2" href="<?php echo BASE?>work/letraset2">
                            <img src="<?php echo BASE?>img/menu/works/menu-works-letraset2.png" alt="menu works letra set 2">
                            <span></span>
                        </a>
                    </li> -->
                    <li>
                        <a class="subnav-works-ciencia" href="<?php echo BASE?>work/ciencia-popular">
                            <img src="<?php echo BASE?>img/menu/works/menu-works-ciencia-popular.png" alt="menu works ciencia popular">
                            <span></span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="subnav-works-paraiso" href="<?php echo BASE?>work/ao-paraiso-recuperado">
                            <img src="<?php echo BASE?>img/menu/works/menu-works-paraiso-recuperado.png" alt="menu works paraiso recuperado">
                            <span></span>
                        </a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a class="nav-design" href="<?php echo BASE?>design">
                    <img src="<?php echo BASE?>img/menu/principal/menu-design.png" alt="menu design">
                    <span></span>
                </a>
            </li>
            <li>
                <a class="nav-videos" href="<?php echo BASE?>video">
                    <img src="<?php echo BASE?>img/menu/principal/menu-videos.png" alt="menu videos">
                    <span></span>
                </a>
            </li>
            <li>
                <a class="nav-duplo" href="<?php echo BASE?>duplo">
                    <img src="<?php echo BASE?>img/menu/principal/menu-duplo.png" alt="menu duplo">
                    <span></span>
                </a>
            </li>
            <li>
                <a class="nav-roloseco" href="https://roloseco.tumblr.com/" target="_blank">
                    <img src="<?php echo BASE?>img/menu/principal/menu-roloseco.png" alt="menu rolo seco">
                    <span></span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- /#sidebar-wrapper -->
