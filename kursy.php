<?php
session_start();
include('header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
?>
<div class="cointainer">
    <div class="row">
        <div class="col-12">
            <h1>Kursy</h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col text-center box-margin">
                
                </div>
            </div>
            <div class="row">
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="obrazek.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kursy</h5>
                            <p class="card-text">Kurs nauki o bohaterach niemieckich.</p>
                            <a href="kurs1.php" class="btn btn-primary">Kliknij aby zobaczyć</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kursy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kursy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="cointainer">
            <div class="row">
                <div class="col-12">
                    <h1>Brak dostępu </h1>
                    <p><a href="signin.php">Zaloguj się </a> albo <a href="signup.php">Zarejestruj</a> do portalu.</p>
                </div>
            </div>
        </div>

        <?php }  include('footer.php'); ?>
        