<?php
require_once(__DIR__ . "/partials/head.php");
?>

<div class="container">
    <h1>Bienvenue sur la page </h1>
    <?php
    foreach ($allPokemon as $pokemon) {
    ?>
        <div class="flex-container">
            <div class="card <?= $pokemon->getType() ?>">
                <h2><?= $pokemon->getName() ?></h2>
                <p>Type : <?= $pokemon->getType() ?></p>
                <p>Niveau : <?= $pokemon->getLevel() ?></p>
                <button class="voirPlus">Voir plus</button>
                <p class="description hidden"><?= $pokemon->getDescription() ?></p>
                <button class="voirMoins hidden">Réduire</button>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php
require_once (__DIR__ . '/partials/footer.php');