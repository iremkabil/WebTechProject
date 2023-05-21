<?php 
  $email = $_POST['email'];
  $password=$_POST['password'];
  $validEmailPrefix=substr($email, 0, strpos($email,"@"));

  if($email ===$validEmailPrefix."@sakarya.edu.tr" && $validEmailPrefix===$password){
    $signal=true;
  }else{
    $signal=false;
    header("refresh:10;url=login.html");
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

    <section id="abilities3" class="text-white mx-5 mb-5">
      <div class="bg-dark container border border-secondary rounded shadow-lg">
        <div class="text-center my-3 "> 
          <h5 class=" text-white"  >
              <?php
                if($signal==true)
                {
                  echo "  Hoşgeldin" ;
                }
                else
                {
                  echo "Hatalı giriş yaptınız !";
                  echo "10 saniye içinde geri yönlendiriliyorsunuz";
                }
              ?>
          </h5>
          
        </div>
      </div>
    </section>

    <footer id="login-footer">
        <div class="footer-content container">
            <p>Copyright &copy; 2023. All Rights Reserved.</p>
            <div class="social">
                <a href="https://github.com/iremkabil"><i class="fab fa-brands fa-github"></i></a>
                
                <a href="mailto:iremkabil54@gmail.com"><i class="fab fa-thin fa-at"></i></a>

                <a href="https://www.linkedin.com/in/irem-kabil-6387b926b/"><i class="fab fa-brands fa-linkedin"></i></a>

            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/type-writer.js"></script>
    <script src="js/login.js"></script>
    <script src="js/validation.js"></script>

  </body>
<html>