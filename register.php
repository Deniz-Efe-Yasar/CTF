   <?php

 $username=$_POST['username'];
 $name=$_POST['name'];
 $surname=$_POST['surname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $passwordrepeat=$_POST['passwordrepeat'];









            if ($username == ""  || $name == ""   || $surname == "" || $password == ""  || $passwordrepeat == "" || $email == "" )
             {
                 echo"Lütfen Boş Bırakmadan Giriniz";
             }
             else if ($password == $passwordrepeat)
             {
                 echo "Başarıyla Hesabınızı Oluşturdunuz";
             }
             else
             {
                 echo "Şifreler Uyuşmuyor. Lütfen Tekrar Şİfrenizi Giriniz";
             }


         

        
             $data1 = array(
                           'kadi1' => $_POST['kadi'],
                           'sifo1' => $_POST['sifo'],
                     );
        
     $hesapbilgileri = array_push($email,$password);
                    
 echo "<pre>";         
 print_r($hesapbilgileri);
 echo "</pre>";       

?>