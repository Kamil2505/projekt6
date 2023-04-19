<?php include('header.php');?>
<?php
// $kod = array();
            if(isset($_POST['submit']) && $_POST['kod']==$_POST['codesave']){
                // $tmp = $kod;
                // echo $_POST['kod'][0] . " " . $tmp[0];
                // if($_POST['kod']==$tmp[0]) {
                echo $_POST['ImieNazwisko'];
                echo $_POST['email'];
                echo $_POST['temat'];
                echo $_POST['wiad'];
                echo $_POST['kod'];
                echo $_POST['codesave'];
                  }  // }
    ?>


<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

<form action="kontakt.php" method="post">
<div class="container">
    <div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">Imię i nazwisko</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imię i Nazwisko" name="ImieNazwisko">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">E-mail:</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">Temat wiadomości</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Temat wiadomości"name="temat">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlTextarea1" class="form-label">Wiadomość:</label>
</div>
            <div class="col-xl-4 col-md-8">
           
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Wpisz treść wiadomości" name="wiad"></textarea>
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4 alert alert-success text-center">
            <?php
            $tmp='';
            $kod=array();
            for($i=0;$i<4;$i++){
                $kod[]= rand(0,9);
                echo $kod[$i];
                $tmp .= $kod[$i];
            }
        //   print_r($kod);
            ?>
            <input  type="hidden"  name="codesave" value="<?php echo $tmp; ?>" ></input>
          
        </div>
      
        <div class="col-xl-2  col-md-4">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz kod do wysłania"name ="kod">
        </div>
</div>
         <div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <button type="submit" class="btn btn-primary" name="submit">Wyślij wiadomość</button>
           
    <button type="submit" class="btn btn-primary">Reset</button>
        </div>
    </div>
</div>
</form>
<?php include('footer.php'); ?>