<!doctype html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medek Medvedek - Narocilo</title>

  
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="narocilo-page">
<?php include 'header.php'; ?>



<header class="glava-strani d-flex align-items-center">
  <div class="container">
      <h1 class="glavni-naslov">Naročite svoj užitek</h1>
      <h5 class="podnaslov">Vaš najljubši medek že skoraj pri vas</h5>
  </div>
</header>

<main>

  <section class="contact-section">

    <div class="decor decor-1">
        <img src="img/honey1.png" alt="">
      </div>
      
      <div class="decor decor-2">
        <img src="img/honey2.png" alt="">
      </div>
      
      <div class="decor decor-3">
        <img src="img/honey3.png" alt="">
      </div>

    <div class="container">
      <div class="contact-card mx-auto">
        <div class="text-center mb-4">
            <img src="img/logo.png" alt="Honey logo" class="logo-img">
          </div>

        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="ime">Ime</label>
              <input type="text" class="form-control" id="ime" name="ime" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="priimek">Priimek</label>
              <input type="text" class="form-control" id="priimek" name="priimek" required>
            </div>

            <div class="col-12">
              <label class="form-label" for="naslov">Naslov</label>
              <input type="text" class="form-control" id="naslov" name="naslov" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="telefon">Telefon</label>
              <input type="tel" class="form-control" id="telefon" name="telefon" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="email">E-pošta</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="col-md-8">
              <label class="form-label" for="vrsta-medu">Vrsta medu</label>
              <select class="form-select" id="vrsta-medu" name="vrsta-medu" required>
                <option value="" selected disabled>Izberite vrsto medu</option>
                <option value="cvetlicni-med">Cvetlični med</option>
                <option value="borovnicev-med">Borovničev med</option>
                <option value="ajdov-med">Ajdov med</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label" for="kolicina">Količina</label>
              <input type="number" class="form-control" id="kolicina" name="kolicina" min="1" step="1" value="1" required>
            </div>

            <div class="col-12 d-flex justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                  Strinjam se s pogoji uporabe
                </label>
              </div>

              <button type="submit" class="btn btn-dark px-4">Oddaj naročilo</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="info-section py-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6">
          <h2>Obratovanje</h2>
          <p>Pon: 7.00 – 15.00<br>
             Tor: 7.00 – 15.00<br>
             Sre: 7.00 – 15.00<br>
             Čet: 7.00 – 15.00<br>
             Pet: 7.00 – 15.00<br>
             Vikendi: zaprto</p>
        </div>

        <div class="col-md-6">
          <h2>Medek Medvedek</h2>
          <p>Ulica: Naša ulica 59<br>
             Kraj: Maribor<br>
             Država: Slovenija</p>

          <p>+386 67 676 767<br>
             medek@email.si</p>
        </div>
      </div>
    </div>
  </section>

  <section class="map-section"></section>

</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
