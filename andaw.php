<?php
session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmerfShop</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="andaw.css" type="text/css">

</head>
<body>
<script type="text/javascript">
        $(function () {
            $('c').click(function () {
                $('html').load($(this).attr('href'));
                return false;
            });
    });
    </script>
<?php
$_SESSION['pierwszyraz']=1;
$zal="Nie zalogowano";
            if(isset($_SESSION['zalogowany'])){
                $zal = "Zalogowano";
            }
?>
<header class="header">
    
    <a href="andaw.php" class="icons">
        <div class="fas fa-home" id="home-btn"></div>
    </a>
    <div class="mode">
        Dark mode:            
        <span class="change">OFF</span>
    </div>
    
    <nav class="navbar">
        <div class="dropdown">
        <script>
  $( ".change" ).on("click", function() {
      if( $( "body" ).hasClass( "dark" )) {
          $( "body" ).removeClass( "dark" );
          $( "header" ).removeClass( "dark" );
          $( ".change" ).text( "OFF" );
      } else {
          $( "body" ).addClass( "dark" );
          $( "header" ).addClass( "dark" );
          $( ".change" ).text( "ON" );
      }
  });
</script>
            <a class="dropbtn">SKLEP</a>
                <div class="dropdown-content">
                    <a href="smerfy.php">SMERFY</a>
                    <a href="smerfetki.php">SMERFETKI</a>
                    <a href="smerfiki.php">SMERFIKI</a>
                </div>
            </div>
        <a><c href="kreator.php">KREATOR</c></a>
    </nav>
    <?php
           $zal="Nie zalogowano";
            if(isset($_SESSION['zalogowany'])){
                $zal = "Zalogowano";
            }
            print<<<KONIEC

            <h2 class="mode">$zal</h2>
            KONIEC;
            ?>
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <a href="koszyk.php"><div class="fas fa-shopping-cart" id="cart-btn" ></div></a>
        <a href="mojekonto.php"><div class="fas fa-user" id="user-btn"></div></a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
    
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
    
</header>
<div class="animation">
<h1 class="animation_area"> TYLKO U NAS</h1>
        </div>
<section class="home" id="home">
    <div class="content">
        <h3>TWÓJ WŁASNY ZWIERZAK DOMOWY</h3>
        <p>Jedyna i niepowtarzalna okazja, abyś już dziś mógł jako jeden z pierwszych kupić nowe zwierzątko domowe jakim jest smerf. Tak jest nie przewidzieliście się smerf. Małe niebieskie stworzenie już teraz w twoim domu.</p>
        <a href="#" class="btn">Sprawdź Ofertę Sprzedaży</a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"> <span>O</span> Nas </h1>
    
    <div class="row">
        
        <video width="100%" height="100%" controls>
            <source src="Smerfy 2 - Zwiastun PL (Official Trailer) [www.downloadtube.net].mp4" type="video/mp4">
        </video>
        <div class="content">
            <h3>Czy wiesz, że możesz personalizaować swojego smerfa?</h3>
            <p>Już za niedługo, będziesz mógł zamówić personalizowanego przez sibie smerfa.</p>
            <p>Na ten moment dla użytkowników naszej strony dostępny jest jedynie krator w wersji beta(testowej)</p>
            <p>Jednak, już wkrótce możecie się spodziewać wypuszczenie pełnej wersji kreatora z możliwością realizacji persanlizowanych zamówień </p>
            <a href="kreator.php" class="btn2">Stwórz Własnego Smerfa w Naszym Kreatorze</a>
        </div>
    </div>
</section>

<section class="blogs" id="blogs">

    <h1 class="heading"> Nasza <span>Galeria</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="https://download.komputerswiat.pl/media/2019/77/8159734/smerfy-2-vod-film-do-wypozyczenia-s.jpg" alt=""></img></div>

        <div class="box">
            <div class="image">
                <img src="https://filmozercy.com/uploads/images/747x400/smerfy-3-miniaturka-01.png" alt=""></img></div>

        <div class="box">
            <div class="image">
                <img src="https://wizerunekkobiety.pl/content/uploads/2017/05/Bajka-o-Smerfach-Smerfy-poszukiwacze-zaginionej-wioski-nowy-film-kinowy-animowany-dla-dzieci-Recenzja-opinie-opis-trzecia-część.jpg" alt=""></img></div>

</section>
<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://twitter.com/?lang=pl" class="fab fa-twitter"></a>
        <a href="https://pl.linkedin.com/" class="fab fa-linkedin"></a>
    </div>

    <div class="credit">created <span>by</span> Anita Dybiec <span>Wiktoria Taźbirek</span> Dawid Kalinowski</div>

</section>
<script src="daw.js"></script>
</body>
</html>