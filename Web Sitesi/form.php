<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ustmenu.css">
    
    
</head>
<body>
    <div class="menu">

        
        <ul>
            <li><a href="index.html">HAKKINDA</a></li>
            <li><a href="ozgecmis.html">ÖZGEÇMİŞ</a></li>
            <li><a href="sehrim.html">ŞEHRİM</a></li>
            <li><a href="takimimiz.html">TAKIMIMIZ</a></li>
            <li><a href="">İLGİ ALANLARIM</a></li>
            <li><a href="iletisim.html">İLETİŞİM</a></li>
        </ul>
    </div>
    <div class="container" >
    <?php
        error_reporting(0);
        $isim=$_POST["isim"];
        $Soyisim=$_POST["Soyisim"];
        $email=$_POST["email"];
        $cinsiyet=$_POST["cinsiyet"];
        $mesajturu=$_POST["mesajturu"];
        $telefon=$_POST["telefon"];
        $tarih=$_POST["tarih"];
        $mesaj=$_POST["mesaj"];
        if(isset($_POST['bildirim'])){
            $bildirim="Evet";
        }
        else{
            $bildirim="Hayır";
        }
        
        echo " <h3>Girdiğiniz Bilgiler</h3> <br> <br>
        İsim: ".$isim." <br>
        Soy isim: ".$Soyisim." <br>
        Mail adresi: ".$email." <br>
        Cinsiyet: ".$cinsiyet." <br>
        Mesaj Türü: ".$mesajturu." <br>
        Bildirim: ".$bildirim." <br>
        Telefon: ".$telefon." <br>
        Tarih: ".$tarih." <br> 
        Mesajınız: ".$mesaj." "; 
        

            
    ?>
    </div>
  </body>

    
</html>


