<?php
include 'baglan.php';

try {
    
    $sorgu = $db->prepare("SELECT * FROM valorant");
    $sorgu->execute();

    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
      //  echo " <br> kullanıcı adı : " . $cikti["valorant_ad"] . " / sifre : " . $cikti["valorant_sifre"]."<br>";
    
?>
<br>
<div style="background-color:red;" class="">
kullanıcı adı : <?php echo $cikti["valorant_ad"] ?> /
sifre :  <?php echo  $cikti["valorant_sifre"] ?>
</div>
    <?php
        }
}catch (PDOException $e) {
    die($e->getMessage());
}

?>