<?php
//жесткая ссылка
    $Array1=array(
        "element_1"=>"First Element",
        "element_2"=>"Second Element"
    );
    $arrLink=&$Array1["element_1"];
    echo $arrLink."<br>";
    $arrLink="Теперь это нулевой элемент";
    echo $arrLink."<br>";
//символическая ссылка
    $main_var="input";
    $link_var="main_var";
    echo $$link_var."<br>";
    $$link_var="output";
    echo $main_var."<br>";

