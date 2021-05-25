<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/giris.css">
    <link rel="stylesheet" href="css/ustmenu.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body class="giris">
    <div class="giris-div1">
            <div class="giris-div2">
                <?php
                error_reporting(0);
                $Kullanici=$_POST["KAdi"];
                $Sifre=$_POST["sifre"];
                if ($Sifre=="b191210038" and $Kullanici=="b191210038@sakarya.edu.tr") {
                    echo "HOŞGELDİN ".$Sifre."";?><br>
                    <a href="hakkinda.html" id="devam">Devam</a>
                    <?php
                }
                else {
                    echo "KULLANICI ADI VEYA ŞİFRE HATALI";
                }

                ?>
            </div><br>
    </div>
    
</body>
</html>