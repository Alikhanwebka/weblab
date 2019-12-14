<?php
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
$basket = null;
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
else{
	$basket = [];
}
?>
<form name="form" action="task11B.php" method="GET">
<?php
if(isset($_COOKIE['basket'])){
    foreach($cars as $car){
        if(in_array($car['id'],$basket)){
            echo $car['maker'] ." ".$car['model'] ." Already in basket</br>";
        }
        else{
            echo $car['maker'] ." ".$car['model'] ."<a href='task11B.php?id=".$car['id']."'> Add to basket</a></br>";
        }
    }
            
}
else{
    foreach($cars as $car){
        echo $car['maker'] ." ".$car['model'] ."<a href='task11B.php?id=".$car['id']."'> Add to basket</a></br>";
    }
}
?>
<h1> In Basket</h1></br>
<?php
if(!isset($_COOKIE['basket'])){
    echo "There is no items in basket";
}
else{
    echo "Items with id ".implode(',',$basket);
}
?>