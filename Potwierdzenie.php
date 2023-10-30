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
    <link rel="stylesheet" href="login.css" type="text/css">

</head>
<?php setcookie("shopping_cart", "", time() - 3600); ?>
<body>
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
        <a href="kreator.php">KREATOR</a>
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

<section class="about" id="about">
    <br>
    <br>
    <br>
    <br>
    <h1 class="heading"> Twoje <span>zamówienie</span></h1>
    
    <div class="row">
        <div class="content">
            <p>Gratulację, aktualnie przetwarzamy Twoje zamówienie.</p>
			<p>Twój numer zamówienia to: <?php echo rand(10000000, 999999999); ?></p>
            <p>Przewidywany czas dostawy to: <?php echo rand(3, 30); ?> dni roboczych</p> 
</div>
    </div>
</section>
<script src="daw.js"></script>
</body>
</html>