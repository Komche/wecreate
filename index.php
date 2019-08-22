<?php

    if (isset($_GET['action'])) {
        extract($_GET);
        if ($action=='project') {
            require_once('view/projectView.php');
        }
    }else {
        require_once('view/homeView.php');
    }