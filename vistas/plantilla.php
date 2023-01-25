<?php
// Start session 
session_start();

// Get data from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
 
// Get status from session 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $status = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 

//header
include('includes/header.php');
?>
 <?php 
if(isset($_GET["pagina"])){
    if($_GET["pagina"] == "add" ||
        $_GET["pagina"] == "edit" ||
        $_GET["pagina"] == "start"){
        include "paginas/".$_GET["pagina"].".php";
    }else{
        include "paginas/404.php";
    }
}else{
    include "paginas/start.php";
}
?>
<?php
//footer
include('includes/footer.php');
?>