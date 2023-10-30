<?php
session_start();?>
<?php
$_SESSION['koszyknielog']=1;
if(isset($_SESSION['zalogowany'])){
    unset($_SESSION['koszyknielog']);
    unset($_SESSION['niezalogowany']);
    $_SESSION['koszyklog']=1;
    $_SESSION['zalogowany']=1;    
}
if(isset($_SESSION['koszyknielog'])){
    header("Location: unloged.php");

}
?>
<?php 

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$message = '';


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['item_id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (86400 * 30));
				header("location:Koszyk.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		header("location:Koszyk.php?clearall=1");
	}
}


if(isset($_GET["remove"]))
{
	$message = '
	<div class="">
		Produkt usunięty z koszyka...
	</div>
	';
}
if(isset($_GET["clearall"]))
{
	$message = '
	<div class="">
		
		Twój koszyk został opróżniony...
	</div>
	';
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sklep | Smerfy</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<link rel="stylesheet" href="style_kosz.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
	<body>
			<br />
			<h1 align="center"></h1><br />
			<br />
		
			<center>
			<br><h3>Szczegóły zamówienia:</h3><br>
			<br>
			<div id="box" class="box-hidden">
			<?php echo $message; ?><button aria-label="Close" onclick="document.getElementById('box').style.display='none';" class="close-button">X</button></div>
			<br>
			<br>
			<table class="">
				<tr>
					<th width="30%">Nazwa produktu</th>
					<th width="10%">Ilość</th>
					<th width="20%">Cena</th>
					<th width="15%">Łącznie</th>
					<th width="5%"><a href="Koszyk.php?action=clear"><img src="https://cdn-icons-png.flaticon.com/512/39/39220.png" width="70%" height="70%"></img></a></th>
				</tr>
				
					
			</center>
			<?php
			if(isset($_COOKIE["shopping_cart"]))
			{
				$total = 0;
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{
			?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td><?php echo $values["item_price"]; ?>PLN</td>
					<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>PLN</td>
					<td><a href="Koszyk.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="">Usuń</span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
			?>
			<br />
				<tr>
					<td colspan="3" align="right"></td>
					<td align="right"><?php echo number_format($total, 2); ?>PLN</td>
					<td></td>
				</tr>
			<?php
			}
			else
			{
				
				echo '
				<tr>
					<td colspan="5" align="center">Koszyk jest pusty</td>
				</tr>
				';
			}
			?>
	
		<br />			

			</table>
			<br>
			<br>
			<a class="btn" href="Zamówienie.php">Złóż zamówienie</a>
		</div>
		<br />
		
		<script src="daw.js"></script>
	</body>
</html>
