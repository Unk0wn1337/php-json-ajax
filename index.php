<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myfile = fopen("konyv.json", "r") or die("halott kapcsolat, Nem elerheto!");
        $teljestartalom = fread($myfile,filesize("konyv.json"));
        echo ($teljestartalom);
        fclose($myfile);
    
     

        $obj =json_decode($teljestartalom);

        echo "<br>";
        echo "<pre>".var_export($obj, true)."</per>";
        echo "<pre>".var_export( $obj->konyvek["0"], true)."</per>";
        //echo $obj->konyvek["0"]["szerzo"];
        $konyv1= $obj->konyvek[0]->cim;
        echo $konyv1;
        //echo gettype($konyv1);
        //echo $konyv1->cim;
        //echo $obj2["szerzo"];
        
        // $tartalom = "<table>"
            
            
        // $tartalom = "</table>"
        
        ?>

</body>
</html>