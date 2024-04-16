<?php

$lang = 'pt-BR';
$page = 'index';

if (isset($_REQUEST['lang']) && !empty($_REQUEST['lang'])) {
    $lang = $_REQUEST['lang'];
}

if (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
}

require_once 'locale/' . $lang . '/' . $page . '.php';
?>