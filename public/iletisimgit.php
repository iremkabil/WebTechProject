<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/main.css">
    <title>İletisim</title>
</head>
<body>
    
    <!-- header -->
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
                    <li><a href="iletisim.html" class="active">İletişim Sayfası</a></li>

                </ul>
            </nav>
            <div class="main-login">
                <button class="btn btn-dark main-nav__login"><a href="login.html">Login</a></button>
            </div>
        </div>
    </header>

    <section id="abilities3" class="text-white mx-5 mb-5">
        <div class="bg-dark container border border-secondary rounded shadow-lg">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3 text-white"  >İletisim Bilgileri</h1>
            </div>
          </div>
          <div class="row my-1 ">
            <div class="col-lg-12 my-1">
                <table class="table table-striped table-dark my-table" >
                    <tr>
                        <td >Name</td>
                        <td ><?php echo $_POST["fullname"]?></td>
                    </tr>
                    <tr>
                        <td >Phone</td>
                        <td ><?php echo $_POST["phone"]?></td>
                    </tr>
                    <tr>
                        <td>Mail</td>
                        <td ><?php echo $_POST["email"]?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td ><?php echo $_POST["password"]?></td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td ><?php echo $_POST["subject"]?></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td ><?php echo $_POST["message"]?></td>
                    </tr>
              
                    <tr>
                        <td>Kullandığınız programlama dilleri</td>
                        <td >
                            <?php if(isset($_POST['language']))
                                {
                                    $check=implode("-",$_POST['language']);
                                    echo($check);
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Cinsiyet</td>
                        <td ><?php echo $_POST["gender"]?></td>
                    </tr>
                    <tr>
                        <td>Adres</td>
                        <td ><?php echo $_POST["address"]?></td>
                    </tr>
                    <tr>
                        <td>Yaşadığınız Şehir</td>
                        <td ><?php echo $_POST["sehirler"]?></td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
      </section>


    <!-- section b -->
    <section id="iletisim-b" class="bg-pri py-4">
        <div class="container">
            <div class="contact-info">
                <div>
                    <i class="fas fa-envelope fa-2x"></i>
                    <h3>Email</h3>
                    <p>iremkabil54@gmail.com</p>
                </div>
                <div>
                    <i class="fas fa-phone fa-2x"></i>
                    <h3>Phone</h3>
                    <p>(555) 555 55 55</p>
                </div>
                <div>
                    <i class="fas fa-address-card fa-2x"></i>
                    <h3>Address</h3>
                    <p>Sakarya/Türkiye</p>
                </div>
                
            </div>
        </div>
    </section>

    <footer id="main-footer">
        <div class="footer-content container">
            <p>Copyright &copy; 2023. All Rights Reserved.</p>
            <div class="social">
                <a href="https://github.com/iremkabil"><i class="fab fa-brands fa-github"></i></a>
                
                <a href="mailto:iremkabil54@gmail.com"><i class="fab fa-thin fa-at"></i></a>

                <a href="https://www.linkedin.com/in/irem-kabil-6387b926b/"><i class="fab fa-brands fa-linkedin"></i></a>

            </div>
        </div>
    </footer>

</body>
</html> 