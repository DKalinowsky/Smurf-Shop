<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmerfShop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="register.css" type="text/css">

</head>
<body>
<?php
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
        <div class="dropdown">
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
<?php
$link = mysqli_connect("localhost", "root", "", "test");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if(isset($_SESSION["msg"])){
    $mess=$_SESSION["msg"];
    unset($_SESSION["msg"]);
    echo $mess;
}
?>



<section class="contact" id="contact">
    <div class="row">
    <form action = "MechanizmRejestracji.php" method="POST"> 
            <h3>ZAREJESTRUJ SIĘ</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Imie" name="IMIE" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Nazwisko" name="NAZWISKO" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Nazwa użytkownika" name="NAZWA" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Adres email" name="EMAIL" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" placeholder="Hasło" name="HASLO" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-home"></span>
                <input type="text" placeholder="Adres zamieszkania" name="ADRES" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Numer telefonu" name="TELEFON" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-hourglass-half"></span>
                <input type="number" placeholder="Wiek" name="WIEK" required>
            </div>
            <input type="submit" value="Zarejestruj konto" class="btn">
            <legend class="text">Masz już konto ? Zaloguj się</legend>
            <a class="btn" href="Logowanie.php">Zaloguj się</a>
        </form>
    </div>
</section>

<script src="daw.js"></script>