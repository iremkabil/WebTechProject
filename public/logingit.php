<?php 
  
  $myemail="CC@hotmail.com";
  $mypassword="123";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $namen=explode("@",$email);
  $signal=false;
  if($email==$myemail && $mypassword==$password)
  {
    $signal=true;
    
  }else {
    $signal=false;
    header("refresh:5;url=login.html");

    
    
    
    //header("Location:login.html");
  }
?>
<html lang="en">
  <head>

  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--  CSS -->
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
  <header id="header__inner">
        <div class="main">
            <div class="main-logo">
                <a href="index.html" >İrem Kabil</a>
            </div>
            <nav class="main-nav">
                <ul class="main-nav__items">
                    <li><a href="ozgecmis.html">Özgeçmiş</a></li>
                    <li><a href="sehrim.html">Şehrim</a></li>
                    <li><a href="takim.html">Takımımız</a></li>
                    <li><a href="ilgi-alanlarim.html">İlgi Alanlarım</a></li>
                    <li><a href="iletisim.html">İletişim Sayfası</a></li>
                </ul>
            </nav>
            <div class="main-login">
                <button class="btn btn-dark main-nav__login"><a href="login.html" class=" active">Login</a></button>
            </div>
        </div>
    </header>

    <section id="login" class="text-center py-3">
        <div class="container">
            <h2 class="section-title">Login</h2>
            <div class="border-bottom"></div>
            <p class="lead">Lütfen giriş yapınız...</p>
            <!-- <form action="">
                <div class="form-login">
                    <div class="my-4">
                        Email: CC@hotmail.com Şifre: 123
                    </div>
                    <input type="email" class="email input" name="email" id="email" placeholder="Email">

                    <input type="password" class="password input" name="password" id="password" placeholder="password">

                </div>
            </form> -->

            <form action="logingit.php" name="myForm" class="needs-validation" onsubmit = "return validate();"  method="POST">
              <div class="form-row my-3">Email: CC@hotmail.com   Şifre: 123
              </div>
              <div class="form-row my-3">
                <div class="col-lg-4 my-3">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" name="email" id="email" onchange="emailV();">
                  <div class="valid-feedback">
                    Kriterlere uyuyor
                  </div>
                  <div class="invalid-feedback">
                    Alan boş yada Girdiğiniz bilgiler E mail formatında DEĞİL!!
                  </div>
                </div>
              </div>
              <div class="form-row my-3">
                <div class="col-lg-4 mb-3">
                  <label for="password">Şifre:</label>
                  <input type="password"class="form-control" name="password" onchange="sifreV();">
                  <div class="invalid-feedback">
                    Alan boş yada Şifre rakamdan başka karakter içeriyor
                  </div>
                  <div class="valid-feedback">
                    Kriterlere Uyuyor
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-12 mb-3">
                  <input type="submit"  class="btn btn-primary" value="Gönder">
                </div>
              </div>        
            </form>

            <!-- <button type="submit" class="btn-dark">Submit</button> -->

        </div>
    </section>
    <section id="abilities3" class="text-white mx-5 mb-5">
      <div class="bg-dark container border border-secondary rounded shadow-lg">
        <div class="row my-3 ">
          <div class="col-lg-12 my-4">
          <!-- align="center" css'te ver -->
            <h1 class="display-4 text-white"  >
                <?php
                  if($signal==true)
                  {
                    echo $namen[0]."  Hoşgeldin" ;
                  }
                  else
                  {
                    echo "Kullanıcı epostası yada şifre hatalı ";
                    echo "5 saniye içinde geri yönlendiriliyorsunuz";
                  }
                ?>
            </h1>
          </div>
        </div>
      </div>
    </section>

  </body>
<html>