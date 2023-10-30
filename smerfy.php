<?php 

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$message = '';

print<<<KONIEC
<html>
<head>
</head>
<body>
<a href="Logowanie.php">Zaloguj się</a>
<a href="Koszyk.php">Koszyk</a>
</body>
</html>
KONIEC;

if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);
	}
	else
	{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'item_id');

	if(in_array($_POST["hidden_id"], $item_id_list))
	{
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
			{
				$cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
			}
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["hidden_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (86400 * 30));
	header("location:smerfy.php?success=1");
}

?>
<!DOCTYPE html>
<html lang="pl">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sklep | Smerfy</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="smerfycss.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
       
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
    <?php
session_start();?>
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
		<div class="">
			<br />
			<h3 align="center">SMERFY</h3><br />
			<br /><br />
            <h1 class="heading"> Dostępne <span>smerfy</span> </h1> 
			<?php
			$query = "SELECT * FROM smerfy ORDER BY id ASC";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
            echo $message;
            
			foreach($result as $row)
			{
			?>
            
			
            <section class="menu" id="menu">

<div class="box-container">

    <div class="box">
        <img src="images/<?php echo $row["image"]; ?>" class="img"></img>
        <h3 class=""><?php echo $row["name"]; ?></h3>
        <h3 class=""><?php echo $row["price"]; ?>PLN</h3>
        <h3 class=""> <?php echo $row["description"]; ?></h3>
		<h3 class="">Ilość: </h3>
        <form method="POST">
		<input type="text" name="quantity" value="1" class="btn" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
            <br><input class="sbt" type="submit" name="add_to_cart" style="margin-top:5px;" value="Dodaj do koszyka"/>
        </form>
    </div>
</div>

</section>
			<?php
			}
			?>
			
			
			<div style="clear:both"></div>
			<br />
			
				
			</div>
		</div>
		
		<br />
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