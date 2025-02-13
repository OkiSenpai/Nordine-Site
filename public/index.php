<?php


if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'interview':
            include("../view/interviewView.php");
            break;
        case 'exposition':
            include("../view/expositionView.php");
            break;
        case 'conclusion':
            include("../view/conclusionView.php");
            break;
        default:
            include("../view/home.php");
            break;
    }
}else{
include("../view/home.php");    

}
?>