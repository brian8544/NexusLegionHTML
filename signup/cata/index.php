<?php
/*
    Simultaneous Core Registration
    coded by Faded - www.EmuDevs.com
*/
    include('include/config.php');
    $page = $_GET['p'];
    @include('p/header.php');

    switch ($page)
    {
        case "register":
            @include('include/register.php');
            break;

        default:
            @include('p/create.php');
            break;
    }



    @include('p/footer.php');