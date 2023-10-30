<?php
session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <style>
        .bialy{
            color:white;
            padding:5rem 10%;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmerfShop</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="login.css" type="text/css">

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="about" id="about">
    <h1 class="heading"> Artykuł <span>5</span> - <span>zakaz</span> niewolnictwa</h1>
    
    <div class="row">
        <div class="content">
			<p>Prawo zawarte w artykule 5 ustępy 1 i 2 odpowiada artykułowi 4 ustępy 1 i 2 europejskiej Konwencji o ochronie praw istot żywych i podstawowych wolności o takim samym brzmieniu. Zgodnie z artykułem 52 ustęp 3 Karty prawo to ma więc takie samo znaczenie i zakres jak wspomniany artykuł europejskiej Konwencji o ochronie praw człowieka i podstawowych wolności. W związku z tym:
- prawo przewidziane w ustępie 1 nie może zgodnie z prawem zostać ograniczone,
- w ustępie 2 określenia `pracy przymusowej lub obowiązkowej` są interpretowane z uwzględnieniem definicji `negatywnych` zawartych w artykule 4 ustęp 3 europejskiej Konwencji o ochronie praw człowieka i podstawowych wolności:
`W rozumieniu tego artykułu pojęcie `praca przymusowa lub obowiązkowa` nie obejmuje:
a) żadnej pracy, jakiej wymaga się zwykle w ramach wykonywania kary pozbawienia wolności orzeczonej zgodnie z postanowieniami artykułu 5 niniejszej Konwencji lub w okresie warunkowego zwolnienia;
b) żadnej służby o charakterze wojskowym bądź służby wymaganej zamiast obowiązkowej służby wojskowej w tych krajach, które uznają odmowę służby wojskowej ze względu na przekonania;
c) żadnych świadczeń wymaganych w stanach nadzwyczajnych lub klęsk zagrażających życiu lub dobru społeczeństwa;
d) żadnej pracy ani świadczeń stanowiących część zwykłych obowiązków obywatelskich`.
Ustęp 3 wynika bezpośrednio z prawa do godności człowieka i uwzględnia niedawne zmiany w zakresie przestępczości zorganizowanej, tj. tworzenie organizacji czerpiących korzyści z nielegalnej imigracji i wykorzystywania seksualnego. Załącznik do Konwencji o Europolu zawiera następującą definicję handlu ludźmi mającego na celu wykorzystywanie seksualne: `handel ludźmi oznacza poddanie danej osoby rzeczywistemu i nielegalnemu wywieraniu wpływu przez inne osoby w drodze stosowania siły lub groźby, względnie w drodze nadużycia władzy albo podstępu, w szczególności w związku z czerpaniem korzyści z prostytucji, z formami seksualnego wykorzystywania oraz naruszaniem nietykalności cielesnej małoletnich, lub handlem porzuconymi dziećmi`. Rozdział VI Konwencji wykonawczej do Układu z Schengen, która została włączona do dorobku Unii i w której uczestniczą Zjednoczone Królestwo i Irlandia, zawiera w artykule 27 ustęp 1 fragment dotyczący organizacji zajmujących się nielegalną imigracją: `Umawiające się Strony zobowiązują się do nałożenia odpowiednich kar na wszelkie osoby, które dla osiągnięcia korzyści majątkowych, pomagają lub usiłują pomóc cudzoziemcowi wjechać lub zamieszkać na terytorium jednej z Umawiających się Stron, z naruszeniem postanowień tej Umawiającej się Strony w zakresie wjazdu i pobytu cudzoziemców`. Dnia 19 lipca 2002 roku Rada przyjęła decyzję ramową w sprawie zwalczania handlu ludźmi (Dz.U. L 203 z 1.8.2002, str. 1) określającą dokładnie w artykule 1 przestępstwa dotyczące handlu ludźmi w celach wyzysku ich pracy lub wykorzystywania seksualnego, które powinny stać się karalne w wykonaniu tej decyzji ramowej przez Państwa Członkowskie.</p>
<a class="btn2" href="Potwierdzenie.php" onClick="alert('Zamówienie zostało złożone pomyślnie')">Potwierdź</a>
<a class="btn2" href="koszyk.php" onClick="alert('Zamówienie zostało odrzucone')">Odrzuć</a></h3>        
</div>
    </div>
</section>
