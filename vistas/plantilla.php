<?php
// Start session 
session_start();
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