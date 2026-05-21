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

<?php
$message = null;
$messageType = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ime = trim($_POST['ime'] ?? '');
  $priimek = trim($_POST['priimek'] ?? '');
  $naslov = trim($_POST['naslov'] ?? '');
  $telefon = trim($_POST['telefon'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $vrstaMedu = trim($_POST['vrsta_medu'] ?? '');
  $kolicina = (int)($_POST['kolicina'] ?? 0);

  if ($ime === '' || $priimek === '' || $naslov === '' || $telefon === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $vrstaMedu === '' || $kolicina < 1) {
    $message = 'Prosimo, pravilno izpolnite vsa polja.';
    $messageType = 'danger';
  } else {
    try {
      require 'db.php';

      $pdo->beginTransaction();

      $stmt = $pdo->prepare('INSERT INTO stranke (ime, priimek, naslov, telefon, email) VALUES (:ime, :priimek, :naslov, :telefon, :email)');
      $stmt->execute([
        ':ime' => $ime,
        ':priimek' => $priimek,
        ':naslov' => $naslov,
        ':telefon' => $telefon,
        ':email' => $email,
      ]);

      $strankaId = (int)$pdo->lastInsertId();

      $stmt = $pdo->prepare('SELECT id FROM vrste_medu WHERE naziv = :naziv LIMIT 1');
      $stmt->execute([':naziv' => $vrstaMedu]);
      $vrstaMeduId = $stmt->fetchColumn();

      if (!$vrstaMeduId) {
        throw new RuntimeException('Izbrana vrsta medu ne obstaja v bazi.');
      }

      $stmt = $pdo->prepare('INSERT INTO narocila (stranka_id, vrsta_medu_id, kolicina) VALUES (:stranka_id, :vrsta_medu_id, :kolicina)');
      $stmt->execute([
        ':stranka_id' => $strankaId,
        ':vrsta_medu_id' => (int)$vrstaMeduId,
        ':kolicina' => $kolicina,
      ]);

      $pdo->commit();
      $message = 'Naročilo je bilo uspešno oddano.';
    } catch (Throwable $exception) {
      if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
      }

      $message = 'Naročila ni bilo mogoče shraniti: ' . $exception->getMessage();
      $messageType = 'danger';
    }
  }
}
?>



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

        <?php if ($message): ?>
          <div class="alert alert-<?php echo htmlspecialchars($messageType, ENT_QUOTES, 'UTF-8'); ?>" role="alert">
            <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        <?php endif; ?>

        <form method="post" action="narocilo.php">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="ime">Ime</label>
              <input type="text" class="form-control" id="ime" name="ime" value="<?php echo htmlspecialchars($_POST['ime'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="priimek">Priimek</label>
              <input type="text" class="form-control" id="priimek" name="priimek" value="<?php echo htmlspecialchars($_POST['priimek'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="col-12">
              <label class="form-label" for="naslov">Naslov</label>
              <input type="text" class="form-control" id="naslov" name="naslov" value="<?php echo htmlspecialchars($_POST['naslov'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="telefon">Telefon</label>
              <input type="tel" class="form-control" id="telefon" name="telefon" value="<?php echo htmlspecialchars($_POST['telefon'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="email">E-pošta</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="col-md-8">
              <label class="form-label" for="vrsta-medu">Vrsta medu</label>
              <?php $selectedHoney = $_POST['vrsta_medu'] ?? ''; ?>
              <select class="form-select" id="vrsta-medu" name="vrsta_medu" required>
                <option value="" <?php echo $selectedHoney === '' ? 'selected' : ''; ?> disabled>Izberite vrsto medu</option>
                <option value="Cvetlični med" <?php echo $selectedHoney === 'Cvetlični med' ? 'selected' : ''; ?>>Cvetlični med</option>
                <option value="Borovničev med" <?php echo $selectedHoney === 'Borovničev med' ? 'selected' : ''; ?>>Borovničev med</option>
                <option value="Ajdov med" <?php echo $selectedHoney === 'Ajdov med' ? 'selected' : ''; ?>>Ajdov med</option>
                <option value="Malinin med" <?php echo $selectedHoney === 'Malinin med' ? 'selected' : ''; ?>>Malinin med</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label" for="kolicina">Količina</label>
              <input type="number" class="form-control" id="kolicina" name="kolicina" min="1" step="1" value="<?php echo htmlspecialchars($_POST['kolicina'] ?? '1', ENT_QUOTES, 'UTF-8'); ?>" required>
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
