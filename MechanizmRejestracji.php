<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM uzytkownicy";
$result = $link->query($sql);
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if (isset($_POST['IMIE']) && isset($_POST['NAZWISKO']) && isset($_POST['NAZWA']) && isset($_POST['EMAIL']) && isset($_POST['HASLO']) && isset($_POST['ADRES']) && isset($_POST['TELEFON']) && isset($_POST['WIEK']))
{
    foreach($result as $v){
        if($v["PSEUDONIM"]==$_POST["NAZWA"] || $v["EMAIL"]==$_POST["EMAIL"] || $v["TELEFON"]==$_POST["TELEFON"]){
            $_SESSION["error"] = 0;
            $_SESSION["msg"] = "Takie konto już istnieje";
            header("Location: Rejestracja.php");
        }
        /*if($v["EMAIL"]==$_POST["EMAIL"]){
            $_SESSION["error"] = 0;
            $_SESSION["msg"] = "Podany email jest używany w istniejącym już koncie";
            header("Location: Rejestracja.php");
        }
        if($v["TELEFON"]==$_POST["TELEFON"]){
            $_SESSION["error"] = 0;
            $_SESSION["msg"] = "Podany numer telefonu jest używany w istniejącym już koncie";
            header("Location: Rejestracja.php");
        }*/
    }
$hashed_password = hash("MD5", $_POST['HASLO']);
$sql = "INSERT INTO uzytkownicy(IMIE,NAZWISKO,PSEUDONIM,EMAIL,HASLO,ADRES,TELEFON,WIEK) VALUES(?,?,?,?,?,?,?,?)"; $stmt = $link->prepare($sql); // ON DUPLICATE KEY UPDATE USERS_ID=USERS_ID, NICKNAME=NICKNAME;
$stmt->bind_param("ssssssii", $_POST['IMIE'], $_POST['NAZWISKO'], $_POST['NAZWA'], $_POST['EMAIL'], $hashed_password, $_POST['ADRES'], $_POST['TELEFON'], $_POST['WIEK']); $result = $stmt->execute();
$_SESSION["error"] = 1;
$_SESSION["msg"] = "Pomyślnie zarejestrowano";
if (!$result) {
printf("Query failed: %s\n", mysqli_error($link));
}
$stmt->close();
}
else{
    $_SESSION["error"] = 0;
    $_SESSION["msg"] = "Nie udalo sie zarejestrowano";
    header("Location: Rejestracja.php");
}
$sql = "SELECT * FROM uzytkownicy";
if ($_SESSION["error"] == 1){
    $_SESSION["msg"] = "Pomyślnie zarejestrowano";
    header("Location: Logowanie.php");}
if ($_SESSION["error"] == 0){
    $_SESSION["msg"] = "Nie udalo sie zarejestrowano";
    header("Location: Rejestracja.php");}
$result->free();
$link->close();
?>