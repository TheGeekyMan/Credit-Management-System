<?php

    $server="sql205.epizy.com";
    $username="epiz_26499003";
    $password="xxZoQ20QPQw";
    $dbname="epiz_26499003_cms";
    $con = mysqli_connect($server,$username,$password,$dbname);

    mysqli_select_db($con,'crud');

    /*if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "Not connected";
    }*/
    
    
?>