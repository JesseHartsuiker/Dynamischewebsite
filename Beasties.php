<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4-12-2018
 * Time: 13:53
 */
print_r($_POST['birds']);

foreach ($_POST['birds']as $bird){
    echo "<img src='Bird pictures/".$bird.".jpg'>";
}
//echo "<img src= 'Bird pictures/".$_POST['birds'].".jpg'>";//