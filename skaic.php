<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skaiciuotuvas</title>
</head>
<body>
    <form method="GET" action="skaic.php">
        <input id="skaicius1" name="skaicius1" value="<?php echo isset($_GET["skaicius1"]) ? $_GET["skaicius1"] : ""; ?>" />
        <input id="skaicius2" name="skaicius2" value="<?php echo isset($_GET["skaicius2"]) ? $_GET["skaicius2"] : ""; ?>" />
        <input id="tipas" name="tipas" placeholder="+ - * /" value="<?php echo isset($_GET["tipas"]) ? $_GET["tipas"] : ""; ?>" />
        <button name="patvirtinti" type="submit">Skaiciuti</button>
    </form>

    <div>
    <?php
    if(isset($_GET["patvirtinti"]))
    {
        if($_GET["tipas"] == "+"){
        $skaicius1 = $_GET["skaicius1"];
        $skaicius2 = $_GET["skaicius2"];
        
        $suma = $skaicius1 + $skaicius2;

        echo $suma;
        }
        else if($_GET["tipas"] == "-"){
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
        
            $suma = $skaicius1 - $skaicius2;

            echo $suma;
        }
        else if($_GET["tipas"] == "*"){
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
        
            $suma = $skaicius1 * $skaicius2;

            echo $suma;
        }
        else if($_GET["tipas"] == "/"){
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
        
            $suma = $skaicius1 / $skaicius2;

            echo $suma;
        }
    }
    ?>
    </div>
</body>
</html>