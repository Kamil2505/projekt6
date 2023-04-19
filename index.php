
<?php include('header.php'); ?>


       <header>
    <img src="1.jpg"  id="zdjp" alt="">
    <img src="2.jpg" id="zdjd" alt="">
    <img src="3.jpg" id="zdjt" alt="">
    <h1 id="hp">Lorem,ipsum dolor</h1>
    <h1 id="hd">Lorem,ipsum dolor sit</h1>
    <h1 id="ht">Lorem,ipsum dolor</h1>
    </header>

<div class="container" > 
    <div class="row">
        <div class="col text-center box-margin">
        <h1>Oferta kursów</h1>
        </div>
    </div> 
    <div class="row" >
        <div class="col-md box-margin" >
        <div class="card" style="width: 18rem;">
  <img src=" https://picsum.photos/200/300?random=1"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md box-margin" >
        <div class="card" style="width: 18rem;">
  <img src=" https://picsum.photos/200/300?random=2"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
        </div>
</div>
        <div class="col-md box-margin" >
        <div class="card" style="width: 18rem;">
  <img src=" https://picsum.photos/200/300?random=3"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
        </div>
    </div>
</div>


<div class="container">
     <div class="row">
        <div class="col-md-4 offset-md-1 box-margin"><div class="card" >
  <div class="card-body">
    <h5 class="card-title">Zarejestruj się</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="signup.php" class="card-link">Zarejestruj się</a>
  </div>
</div></div>
        <div class="col-md-4 offset-md-1 box-margin"><div class="card" >
  <div class="card-body">
    <h5 class="card-title">Zaloguj się</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="signin.php" class="card-link">Zaloguj się</a>
  </div>
</div></div>
    </div>
</div>



<div class="container-fluid py-5">
        <p class="col-md-8 fs-4">WYLOGUJ SIĘ</p>
        <form action="logout.php" method="post">
    <input type="submit" name="logout" value="Wyloguj">
</form>
      </div>

      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
            </div>
            <div class="col-md-4">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
            </div>
            <div class="col-md-4">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
            </div>
        </div>
      </div>
      <br>
      <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>
<?php include('footer.php'); ?>
