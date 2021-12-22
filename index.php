<?
include_once('./includes/function.php');
include_once('./includes/header.php');
include_once('./includes/menu.php');
if($route == ''){
    include_once("./main.php");
}
else {
    include_once("./$route.php");
}
include_once('./includes/footer.php');
?>