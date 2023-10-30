<?php
session_start();?>
<?php   
        $link = mysqli_connect("localhost", "root", "", "test");
        if (!$link) {
            printf("Connect failed: %s\n", mysqli_connect_error()); exit();
        }

        $username = $_POST['NAZWA'];
        $password = $_POST['HASLO'];

        $username2 = stripcslashes($username);  
        $password2 = stripcslashes($password); 
        
        $_SESSION['konto'] = $_POST['NAZWA'];
        
        $hashed_password = hash("MD5", $password2);
       
        $sql = "SELECT * FROM uzytkownicy where PSEUDONIM = '$username2' and HASLO='$hashed_password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){ 
                $_SESSION['zalogowany'] = 1;
                unset($_SESSION['pierwszyraz']);
                unset($_SESSION['niezalogowany']);
                header("Location: andaw.php");
        }  
        else{
            $_SESSION['niezalogowany'] = 1; 
            header("Location: mojekonto.php");    
        } 
?>