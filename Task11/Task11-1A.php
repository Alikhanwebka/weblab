<?php
if (isset($_GET["name"])){
	setcookie("name",$_GET["name"]);
}
else if (!isset($_COOKIE["name"])){
?>
<form action="Task11-1A.php">
Enter your name:<input type="text" name="name"/>
<input type="submit"/>
</form>
<?php
}
else{
echo "Hello ".$_COOKIE["name"];
}
?>