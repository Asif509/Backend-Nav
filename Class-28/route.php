<?php

if (isset($_GET['page']))
{


if ($_GET['page'] == 'home')

    {
        include'pages/home.php';
    } elseif ($_GET['page'] == 'about')
    {
        include 'pages/about.php';
    }elseif ($_GET['page'] == 'service')
    {
        include 'pages/service.php';
    }
}
