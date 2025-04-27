document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const notification = document.getElementById('notification');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Empêche la soumission traditionnelle du formulaire

        // Simulation de l'envoi du formulaire
        setTimeout(function () {
            // Ici, vous pouvez ajouter le code pour envoyer les données du formulaire via AJAX si nécessaire

            // Affiche la notification de succès
            notification.style.display = 'block';

            // Réinitialise le formulaire
            form.reset();

            // Cache la notification après 5 secondes
            setTimeout(function () {
                notification.style.display = 'none';
            }, 5000);
        }, 500); // Délai simulé pour l'envoi du formulaire
    });
});
