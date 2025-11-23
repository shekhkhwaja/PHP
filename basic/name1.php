<?php
 $name=array("shekhkhwaja","raju","razzaq","imran babbar","salmanlala");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            background-color:blue;
            color: blue;
            height: 20px;
            width: 100%;
            color: white;
        }
        li{
            float: left;
            display: flex;
            padding: 2px;
        }
    </style>
</head>
<body>
    <ul>
         <?php
           for($i=0;$i<=4;$i++)
           {
           echo "<li>". $name[$i] ."</li>";
           }
         ?>
    </ul>
</body>
</html>