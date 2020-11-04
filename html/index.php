<?php

error_reporting(-1);

include 'config.php';

if (empty($_GET['md5'])) {
    die(show_source(__FILE__));
}

if ($_GET['md5'] != $_GET['md52'] && md5($_GET['md5']) === md5($_GET['md52'])) {
    echo $flag;
}
