<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HEADER</title>
</head>
<body>
<?php include 'header.php'; ?>

<header class="glava-ponudba d-flex align-items-center">
        <div class="container">
            <h1 class="glavni-naslov">Si za kaj sladkega</h1>
            <h5 class="podnaslov">Tako dober, da ne moreš nehat</h5>
        </div>
    </header>


<div class="kategorije-wrapper my-5 text-center">
    <div class="kategorije-pill">
        <button class="kat-btn active">Domači med</button>
        <button class="kat-btn">Kremni med</button>
        <button class="kat-btn">Medena darila</button>
    </div>
</div>



<section class="card-grid">
 
  <div class="card">
    <div class="content">
      <h2 class="title">Gozdni med</h2>
      <p class="opis">
        Temnejši med z bogatim, polnim okusom in rahlo karamelnimi notami. 
        Gozdni med je odlična izbira za vse.
      </p>
      <div class="footer-card">
        <span class="price">12,00€ / 900g</span>
        <a href="narocilo.php" class="btn-order">Naroči</a>
      </div>
    </div>
    <div class="image-wrapper">
      <img src="slike/med5 1.png" alt="Gozdni med">
    </div>
  </div>

  
  <div class="card">
    <div class="content">
      <h2 class="title">Borovničev med</h2>
      <p class="opis">
        Poln okus z nežno gozdno noto, primeren za sladke in slane jedi.
      </p>
      <div class="footer-card">
        <span class="price">15,00€ / 900g</span>
        <a href="narocilo.php" class="btn-order">Naroči</a>
      </div>
    </div>
    <div class="image-wrapper">
      <img src="slike/med5_1 1.png" alt="Borovničev med">
    </div>
  </div>
</section>


<section class="card-grid">
  <div class="card">
    <div class="content">
      <h2 class="title">Malinin med</h2>
      <p class="opis">
        Nežna, redkejša sorta z rahlo sadnim pridihom in lahkotnim okusom.
      </p>
      <div class="footer-card">
        <span class="price">13,00€ / 900g</span>
        <a href="narocilo.php" class="btn-order">Naroči</a>
      </div>
    </div>
    <div class="image-wrapper">
      <img src="slike/med5_2 1.png" alt="Malinin med">
    </div>
  </div>

  
  <div class="card">
    <div class="content">
      <h2 class="title">Cvetlični med</h2>
      <p class="opis">
        Nežen in uravnotežen med iz travniških cvetov, primeren za vsakodnevno uporabo.
      </p>
      <div class="footer-card">
        <span class="price">11,00€ / 900g</span>
        <a href="narocilo.php" class="btn-order">Naroči</a>
      </div>
    </div>
    <div class="image-wrapper">
      <img src="slike/med5 2.png" alt="Cvetlični med">
    </div>
  </div>
</section>
  



<?php include 'testimonials.php'; ?>


<?php include 'footer.php'; ?>

    

</body>
</html>