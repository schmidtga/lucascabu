<?php

    if ($_SERVER['SERVER_NAME'] == 'lucascabu.local') {
        define("BASE", "http://lucascabu.local/");
        define("BASE_CKEDITOR", "http://lucascabu.local/midia/");
        // define("CONNECTION","mysql://root:@localhost/lucascabu?charset=utf8");
    } elseif ($_SERVER['SERVER_NAME'] == 'passodeluz.com') {
        define("BASE", "http://passodeluz.com/clientes/lucascabu/");
        define("BASE_CKEDITOR", "http://www.passodeluz.com/clientes/lucascabu/midia/");
        // define("CONNECTION","mysql://kardec:chicoxavier2019@mysql.lucascabu.com/lucascabu?charset=utf8");
    } else {
        define("BASE", "https://lucascabu.com/");
        define("BASE_CKEDITOR", "https://lucascabu.com/midia/");
        // define("CONNECTION","mysql://kardec:chicoxavier2019@mysql.lucascabu.com/lucascabu?charset=utf8");
    }

    date_default_timezone_set('America/Sao_Paulo');

?>
