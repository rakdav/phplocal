<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        echo "Это строка";
    ?>
    <p>Мой текст</p>
    <?php
        $greenApple=3;
        $redApple=$greenApple;//передача по значению
        //$redApple=&$greenApple;//передача по ссылке
        $redApple=5;
        $newVariable=4;
        $var1=$var2="New string";
        if(isset($newVariable))
            echo "Переменная существует";
        else
            echo "Переменная не существует";
        echo "<br>";
        unset($newVariable);
        if(isset($newVariable))
            echo "Переменная существует";
        else
            echo "Переменная не существует";
        echo "<br>";
        $var1=500;
        $var2=&$var1;
        $var2=100;
        echo "var1=$var1";
        echo "<br>";
        //однострочный
    /*
     много
    строчный
     */
    echo "У меня ".$greenApple." зеленых яблок." ;
    echo "У меня ".$redApple." красных яблок." ;
    ?>
</body>
</html>