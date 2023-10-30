<?php
session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmerfShop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="konto.css" type="text/css">

</head>
<body>
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
if(isset($_SESSION['niezalogowany'])){
    header("Location: Logowanie.php"); 
}
if(isset($_SESSION['pierwszyraz'])){
    header("Location: Logowanie.php"); 
}
if(isset($_SESSION['zalogowany'])){
unset($_SESSION['pierwszyraz']);
$link = mysqli_connect("localhost", "root", "", "test");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if(isset($_POST["wyloguj"])){
    unset($_SESSION['zalogowany']);
    header("Location: andaw.php");
}
}
$link = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM uzytkownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    if($v["PSEUDONIM"]==$_SESSION['konto']){
        ?>
        <br>
        <br>
        <br>
        <section class="review" id="review">
            <h1 class="heading"> Dane <span>użytkownika</span> </h1>
            <div class="box-container">
                <div class="box">
                    <h1><?php echo $_SESSION['konto']; ?></h1>
                    <p>Imię: <?php  echo $v["IMIE"]; ?></p>
                    <p>Nazwisko: <?php echo $v["NAZWISKO"]; ?></p>
                    <p>Adres Email: <?php echo $v["EMAIL"]; ?></p>
                    <p>Adres zamieszkania: <?php echo $v["ADRES"]; ?></p>
                    <p>Numer telefonu: <?php echo $v["TELEFON"]; ?></p>
                    <p>Wiek: <?php echo $v["WIEK"]; ?></p>
                    <form method='POST' action='mojekonto.php'>
                        <input type="submit" value="Wyloguj się" name="wyloguj" class="btn">
                    </form>
                </div>
            </div>
        </section>
        <?php
    }
}
?>
<script src="daw.js"></script>
