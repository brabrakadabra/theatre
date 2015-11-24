<?php 

function includePage($pageName) {
    $filename = "content/". $pageName .".php";
    if ( file_exists ( $filename ) ) {
        include_once $filename;    
    } else {
        include_once "content/404.php";
    }    
}

include_once "parts/header_main.php"; 
include_once "parts/sidebar.php";
if ( array_key_exists ( 'p' , $_GET ) ) {
    includePage($_GET['p']);    
}
else {
     includePage('main'); 
}
//$_GET['p']




//$filename = "content/".$_GET['p'].".php";
//if ( file_exists ( $filename ) ) {
//    include_once $filename;    
//} else {
//    include_once "content/404.php";
//}

//include_once "content/main.php";

include_once "parts/footer.php";
?>