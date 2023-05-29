<?php

        @session_start([
            'cookie_lifetime' => 86400,
        ]); 
        $con = mysqli_connect('localhost', 'root', '', 'yasdbs') or die('Database Not Connected');
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = $protocol. $_SERVER['HTTP_HOST']."/Yas_Site/";
        $url_curent = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
?>