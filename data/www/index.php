<!doctype html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medek Medvedek</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="home-page">

  <?php include 'header.php'; ?>

  <header class="home-hero">
    <div class="home-hero-box">
      <h1>Medek Medvedek</h1>
      <p>Tvoj najljubši medek</p>
    </div>
  </header>

<section class="home-products section-padding">
  <img src="img/honey1.png" alt="" class="honey-decor honey-decor-1" aria-hidden="true">
  <img src="img/honey2.png" alt="" class="honey-decor honey-decor-2" aria-hidden="true">
  <img src="img/honey3.png" alt="" class="honey-decor honey-decor-3" aria-hidden="true">

  <div class="container text-center container-home">
    <span class="section-label">Aktualno</span>
    <h2>Naša ponudba</h2>
    <p class="section-text">
      Spremljajte, kaj je trenutno aktualno pri nas! Od sveže točenega medu
      do posebnih ponudb in novosti iz našega čebelnjaka.
    </p>

    <div class="products-grid">
      <div class="product-card product-card-flower">
        <img src="img/med1.png" alt="Cvetlični med">
        <div class="product-info">
          <div>
            <h3>Cvetlični med</h3>
            <p>10,00€</p>
          </div>
          <a href="narocilo.php" class="btn btn-dark btn-sm">Naroči</a>
        </div>
      </div>

      <div class="product-card product-card-blueberry">
        <img src="img/med2.png" alt="Borovničev med">
        <div class="product-info">
          <div>
            <h3>Borovničev med</h3>
            <p>10,00€</p>
          </div>
          <a href="narocilo.php" class="btn btn-dark btn-sm">Naroči</a>
        </div>
      </div>

      <div class="product-card product-card-buckwheat">
        <img src="img/med3.png" alt="Ajdov med">
        <div class="product-info">
          <div>
            <h3>Ajdov med</h3>
            <p>10,00€</p>
          </div>
          <a href="narocilo.php" class="btn btn-dark btn-sm">Naroči</a>
        </div>
      </div>
    </div>

    <a href="#" class="btn btn-dark mt-5 products-bottom-btn">Ostala ponudba</a>
  </div>
</section>

<section class="home-about">
  <div class="container">
    <div class="row about-row g-0">
      <div class="col-lg-6">
        <div class="about-content-box">
          <h2>O NAS</h2>
          <p>
            Medek Medvedek je zgodba o predanosti čebelarstvu, naravni kakovosti
            in medu, ki prihaja iz slovenskega čebelnjaka. Naš med pridelujemo
            na naraven način, z veliko skrbjo za čebele in okolje.
          </p>
          <a href="nasazgodba.php" class="btn btn-dark btn-sm">Preberi več</a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-img-wrap">
          <img src="img/cebele.png" alt="Čebele" class="about-img">
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
