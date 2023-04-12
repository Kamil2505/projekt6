<?php include('header.php'); ?>
<?php
$error=array("","","","","",true);
if(isset($_POST['submit'])){
    $login=htmlspecialchars($_POST['login']);
    if ($login == "" || strlen($login) < 3) {
        $error[2] = "Brak Loginu";
    
    }
    $haslo1=htmlspecialchars($_POST['haslo1']);
  
            
    $haslo1= $_POST['haslo1'];
     $login= $_POST['login'];
        // echo $nazwisko;
        // echo $imie;
        // echo $haslo1;
        // echo $email;
        // echo $login;
        if(!empty($_POST['submit'])){
            $error[5]=true;
        }else {
            $error[5]=false;
        }
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <form action="signup.php" method="post"> -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mb-3">
                <?php
                if($error[0]!=""){

                
                ?>


                
            
                <label class="alert alert-warning"><?php echo $error[2]; ?></label>
<?php } ?>
                <input type="text"id="login" placeholder="Login" name="login" class="form-control" aria-labelledby="passwordHelpBlock">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <div class="mb-3">
                <?php
                if($error[3]!=""){

                
                ?>
            
               
<?php } ?>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="haslo1" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                

                
        
              
<input type="submit" value="Zaloguj się" name="submit">
<input type="reset" value="Wyczyść">


        </div>
    </div>
</div>

<?php
if ($error[0] == "" && $error[1] == "" && $error[2] == "" && $error[3] == "" && $error[4] == "" && $error[5]) {
    $conn = mysqli_connect('localhost', 'Josef', '123', 'portal');
    if (!$conn) {
        echo ' NIE POŁĄCZONO Z BAZĄ! Error: '.mysqli_connect_error() ; 
    }else{
    echo 'Połączono z bazą';

} 
}
?>