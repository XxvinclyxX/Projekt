<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


'<img src="" alt="">';

<?php

$zahl = value('RG01');  
 
for($i=1;$i<16;$i++){

if ($zahl == $i) {
  html("<p><img src=\"stimulus$i.png\"></p>");
}

}
?>
<body>

    
</body>
</html>