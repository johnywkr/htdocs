<?php

    require_once 'app/core/core.php';

    $template = file_get_contents('app/template/estrutura.html');

    $core = new core;
    $core->start($_GET);


    echo $template;

?>