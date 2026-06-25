// Validations légères du formulaire de candidature (page Postuler).
document.addEventListener('DOMContentLoaded', function () {
    // 1. Met le nom en majuscules après la saisie
    const nomInput = document.getElementById('nom');
    if (nomInput) {
        nomInput.addEventListener('blur', function () {
            this.value = this.value.toUpperCase();
        });
    }

    // 2. Validation de l'adresse e-mail
    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.addEventListener('blur', function () {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value && !emailRegex.test(this.value)) {
                alert('Veuillez entrer une adresse e-mail valide.');
                this.focus();
            }
        });
    }
});
