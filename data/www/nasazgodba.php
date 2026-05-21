<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naša zgodba - Medek Medvedek</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

    <!-- Zgornji del strani z naslovom -->
    <header class="glava-strani d-flex align-items-center">
        <div class="container">
            <h1 class="glavni-naslov">Naša zgodba</h1>
            <h5 class="podnaslov">Od medu do medu</h5>
        </div>
    </header>

    <!-- Prvi del - Začetki -->
    <section class="sekcija-rumena">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="slike/pexels-bab2056-12147261 1.png" class="img-fluid slika-z-robom" alt="Čebelarjenje">
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <h2 class="naslov-sekcije">Začetki</h2>
                    <p class="besedilo-crno">Naša zgodba se je začela preprosto z nekaj panji, veliko radovednosti in spoštovanjem do narave. Kar je sprva bil hobi, je sčasoma preraslo v predanost čebelarstvu in željo ustvarjati med, ki ohranja svojo pristnost...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Drugi del - Danes -->
    <section class="sekcija-temna text-white">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="slike/pexels-kkwritesofficial-14489206 1.png" class="img-fluid slika-z-robom" alt="Med danes">
                </div>
                <div class="col-lg-7 pe-lg-5">
                    <h3 class="naslov-sekcije">Danes</h3>
                    <p class="besedilo-belo">Danes Medek Medvedek predstavlja kakovosten med, ki nastaja z dolgoletnim znanjem, izkušnjami in predanim delom. Vsak kozarec je rezultat skrbnega odnosa do čebel in narave, kjer nič ni prepuščeno naključju...</p>
                </div>
            </div>
        </div>
    </section>

<!--testimonialsi-->
<?php include 'testimonials.php'; ?>

    <!-- Noga strani -->
    <?php include 'footer.php'; ?>

    

</body>
</html>
