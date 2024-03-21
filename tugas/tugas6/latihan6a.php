<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramit kebalik</title>

    <style>
        .box2,
        .box{
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: blue;
            color: black;
            text-align: center;
            line-height: 20px;
            border: 1px solid black;
            margin : 3px;
        }

        .box2{
            background-color: white;
        }
    </style>
</head>
<body>
    <a href="?angka=10">10</a>
    <br>
    <?php
    if(isset($_GET['angka'])){
        $angka = $_GET['angka'];
    for($i =$angka; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        if($i%2==0){
            echo '<div class="box">'.$i.'</div>';
        }else{
            echo '<div class="box2">'.$i.'</div>';
        }
    }
    echo "<br>";
}
}else{}
?>
    
</body>
</html>