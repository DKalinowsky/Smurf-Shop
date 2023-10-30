<?php
session_start();
?>
<!DOCTYPE html>
<script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js
"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<html lang="pl">
   <head>
       <title>SmerfShop </title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="style.css" type="text/css" />
       
       
   </head> 
   <body >
   <div id="header">

   <!--<script type="text/javascript">
    $(function () {
        $('c').click(function () {
            $('#prawstr').load($(this).attr('href'));
            return false;
        });
    });
    </script><!-->
   
        <B>SmerfShop</B>
        
        <p style=" font-size: 10px;">Tylko u nas </p>
        <?php
           $zal="Nie zalogowano";
            if(isset($_SESSION['zalogowany'])){
                $zal = "Zalogowano";
            }
            print<<<KONIEC

            <p style=" font-size: 10px; padding-left: 1300px">$zal </p>
            KONIEC;
            ?>
            <HR SHADE>
    </div>
       <nav>
           <ul >
           
               <li >
                
                <li><br><a href="glowna.php"><img src="https://cdn-icons-png.flaticon.com/512/69/69524.png?w=360" class="ikona"></ul>
    
        <!--<span><a href="glowna.php"><i class="fa fa-home" style="font-size:60px" ></i></a><span></li>-->
               <li type="none"class="drop"><span><a href="#"><br>SKLEP</a></span>
                    <ul class="dropdown">
                        <li><a href="smerfy.php">SMERFY</a></li>
                        <li><a href="smerfetki.php">SMERFETKI</a></li>
                        <li><a href="smerfiatka.php">SMERFIĄTKA</a></li>
                    </ul></li>
               <li type="none"><span><a><c href="kreator.php"><br>KREATOR</c></a></span></li>
               
           </ul>
           
           <script>
               $(".drop")
               .mouseover(function(){
                   $(".dropdown").show(300);
               });
               $(".drop")
               .mouseleave(function(){
                   $(".dropdown").hide(300);
               });
            </script>
            
           <k class="right"><a href="Logowanie.php"><img class="ikona" src="https://icon2.cleanpng.com/20180420/pwe/kisspng-computer-icons-user-profile-symbol-person-vector-5ada64c40a0da6.3569596715242620840412.jpg"></img></a>
           

            <a href="koszyk.php"><img src="ikona.jpg"></img></a></k>
            
           
           <!--<a href="koszyk.php"><i class='fas fa-shopping-cart' style='font-size:48px;'></i></a></k></!-->
           <button class="burger">

                <div class="line"></div>
               <div class="line"></div>
               <div class="line"></div>
           </button>
       </nav>
    <script>
    const mobileNav = document.querySelector('ul');
    const burgerIcon = document.querySelector('.burger');

    burgerIcon.addEventListener('click', function(){
        mobileNav.classList.toggle('active');
        burgerIcon.classList.toggle('active');

    })
    </script>
    <div id="lewstr">
    
        <picture>
        <img src="https://download.komputerswiat.pl/media/2019/77/8159734/smerfy-2-vod-film-do-wypozyczenia-s.jpg
" alt= "smerfy">
    </picture>
    <picture>
    <img src="https://filmozercy.com/uploads/images/747x400/smerfy-3-miniaturka-01.png
" alt= "smerfy">
    </picture>
    <picture>
    <img src="data:image/jpeg;base64,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
" alt= "smerfy">
    </picture>
    </div>
    <div id="prawstr">
        <video width="80%" height="70%" controls>
            <source src="Smerfy 2 - Zwiastun PL (Official Trailer) [www.downloadtube.net].mp4" type="video/mp4">
</video>
    </div>
     
    
    
   </body>
</html>