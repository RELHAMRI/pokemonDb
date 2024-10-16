document.addEventListener("DOMContentLoaded", function() {
    const buttonsVoirPlus = document.querySelectorAll(".voirPlus");
    const buttonsVoirMoins = document.querySelectorAll(".voirMoins");

    buttonsVoirPlus.forEach(button => {
        button.addEventListener("click", function() {
            const card = this.closest('.card'); // Trouve la carte parente
            const description = this.nextElementSibling;
            const voirMoins = description.nextElementSibling;
            
            description.classList.remove("hidden");  // Affiche la description
            card.classList.add("expanded");  // Ajoute une classe pour agrandir la carte
            this.style.display = "none";  // Cache le bouton "Voir plus"
            voirMoins.classList.remove("hidden");  // Affiche le bouton "Voir moins"
        });
    });

    buttonsVoirMoins.forEach(button => {
        button.addEventListener("click", function() {
            const card = this.closest('.card'); // Trouve la carte parente
            const description = this.previousElementSibling;
            const voirPlus = description.previousElementSibling;
            
            description.classList.add("hidden");  // Cache la description
            card.classList.remove("expanded");  // Réduit la carte
            this.classList.add("hidden");  // Cache le bouton "Voir moins"
            voirPlus.style.display = "block";  // Réaffiche le bouton "Voir plus"
        });
    });
});
