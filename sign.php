<?php 
$kadi=$_POST['kadi'];
$sifo=$_POST['sifo'];


$admin = "root";
$adminpass = "toor134";

    if ($admin == $kadi && $adminpass == $sifo)
    {
        echo "Girişiniz Başarıyla gerçekleşti Bay Admin";
    }
    else
    {
        echo "Hatalı Şifre veya E-posta ";
    }




?>