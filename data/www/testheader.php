<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$navigationItems = [
    'index.html' => 'DOMOV',
    'nasazgodba.html' => 'NAŠA ZGODBA',
    'narocilo.html' => 'NAROČILO',
    'kontakt.html' => 'KONTAKT',
];
?>

<nav class="navbar navbar-expand-lg navigacija">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src="slike/logo 1.png" alt="Logo honey" class="logotip-glavni">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Odpri navigacijo">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach ($navigationItems as $href => $label): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $currentPage === $href ? ' active' : ''; ?>" href="<?php echo $href; ?>">
                            <?php echo $label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
