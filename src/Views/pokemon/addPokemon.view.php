<?php
require_once(__DIR__ . '/../partials/head.php');
?>


<div class="formulaire">

<h1>Ajouter un Pokémon</h1>

<form method="POST">
    <label for="name">Nom du Pokémon:</label>
    <input type="text" id="name" name="name" placeholder="Entrez le nom du Pokémon" required>
    <?php if (isset($this->arrayError['name'])) {
    ?>
        <p class='text-danger'><?= $this->arrayError['name'] ?></p>
    <?php
    } ?>

    <label for="type">Type de Pokémon:</label>
    <select id="type" name="type" required>
        <option value="">--Sélectionnez un type--</option>
        <option value="Feu">Feu</option>
        <option value="Eau">Eau</option>
        <option value="Plante">Plante</option>
        <option value="Électrique">Électrique</option>
        <option value="Roche">Roche</option>
        <option value="Psy">Psy</option>
        <option value="Normal">Normal</option>
        <option value="Dragon">Dragon</option>
    </select>
    <?php if (isset($this->arrayError['type'])) {
    ?>
        <p class='text-danger'><?= $this->arrayError['type'] ?></p>
    <?php
    } ?>

    <label for="level">Niveau du Pokémon:</label>
    <input type="number" id="level" name="level" min="1" max="100" placeholder="Entrez le niveau" required>
    <?php if (isset($this->arrayError['niveau'])) {
    ?>
        <p class='text-danger'><?= $this->arrayError['level'] ?></p>
    <?php
    } ?>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" placeholder="Entrez une brève description" required></textarea>
    <?php if (isset($this->arrayError['description'])) {
            ?>
            <p class='text-danger'><?= $this->arrayError['description'] ?></p>
            <?php
        } ?>

    <button type="submit">Ajouter le Pokémon</button>
</form>
</div>
