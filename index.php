<?php
require_once './head.php';
?>

<?php
require_once './menu.php';
?>


<style>
    *{
    margin: 0;
    
}
body{
     overflow: hidden;
}

.slider{
    width: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}
.slider ul{
    display: flex;
    padding: 0;
    width: 400%;
   
    animation: cambio 20s infinite alternate;
    animation-timing-function: ease-in;
    

}
.slider li{
    width: 100%;
    list-style: none;
}
.slider img{
    width: 100%;
}

@keyframes cambio{
    0% {margin-left: 0;}
    20% {margin-left: 0;}

    25% {margin-left: -100%;}
    45% {margin-left: -100%;}

    50% {margin-left: -200%;}
    70% {margin-left: -200%;}

    75% {margin-left: -300%;}
    100% {margin-left: -300%;}

}


</style>

 <div class="container" style="margin-top: 80px;">
    <img src="./img/Portada.jpg" alt="portada" class="img-fluid">

 <!-- <div class="slider">
        <ul>
            <li><img src="./img/Portada.jpg" alt=""></li>
            <li><img src="./img/dibu_1.jpg" alt=""></li>
            <li><img src="./img/meta_1.jpg" alt=""></li>
            <li><img src="./img/pint_1.jpg" alt=""></li>
        </ul>
    </div> -->
 </div>          

        







<?php
require_once './footer.php';
?>