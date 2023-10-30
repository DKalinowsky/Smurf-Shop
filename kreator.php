<?php
session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<style>
		.pagination {
  display: inline-block;
  width:100%;
}

.pagination a {
  color: black;
  float: left;
  padding: 15px 9.85%;
  text-decoration: none;
}


.pagination a:hover:not(.active) {background-color: #001466;color: white;}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmerfShop</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="andaw.css" type="text/css">

</head>
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
      if( $( "main" ).hasClass( "dark" ) || $( "header" ).hasClass( "dark" )) {
          $( "main" ).removeClass( "dark" );
          $( "header" ).removeClass( "dark" );
          $( ".change" ).text( "OFF" );
      } else {
          $( "main" ).addClass( "dark" );
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

            <p class="mode">$zal</p>
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
<br>
<br>
<br>
<br><main>
<section class="about" id="about">
    <h1 class="heading"> <span>Stwórz własnego Smerfa Już wkrótce tylko u nas</span></h1>
    
    <div class="row">
        <div class="content">
            <h3>Czy wiesz, że możesz personalizaować swojego smerfa?</h3>
			<img  width="99%" src="https://www.kiteoffer.com/media/wysiwyg/404/strona-w-budowie.png"></img>
			<p>Już wkrótce za pomocą przycisków poniżej beziesz mógł/mogła personalizować swojego smerfa. Persanlizować będzie można między innymi:</p>
            <p>Kolor skóry</p>
			<p>Płeć</p>
			<p>Wzrost</p>
			<p>Kolor ubranka w zestawie</p>
        </div>
    </div>
</section>
<div class="pagination">
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
</div></main>
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