<?php

/**
 * @author kacevnik
 * @copyright 2016
 */

    define(HOST,"localhost");
    define(ADMIN_DB,"joomlamix_novo");
    define(PASS_DB,"9564665");
    define(NAME_DB,"cross");
    define(TIMES,time());
    define(URLKA, $_SERVER['HTTP_REFERER']);
    define(IPUSER, $_SERVER['REMOTE_ADDR']);
    
    //Соединение с базой данных.
    
    $db = mysqli_connect(HOST,ADMIN_DB,PASS_DB);
    mysqli_query($db, "SET NAMES 'utf8'");         //Установка кодировки данных из базы.
    mysqli_select_db($db, NAME_DB) or die("Ощибка соединения с базой!");

?>