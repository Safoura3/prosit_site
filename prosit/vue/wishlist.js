// Affiche les offres sauvegardées dans la wishlist (stockées dans le navigateur).
document.addEventListener('DOMContentLoaded', () => {
    const wishlistSection = document.getElementById('wishlist');
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

    function rendre() {
        if (wishlist.length === 0) {
            wishlistSection.classList.remove('grid-offres');
            wishlistSection.innerHTML =
                '<div class="empty">Votre wishlist est vide.<br><a href="../controlleur/offres.php" class="btn btn-primary" style="margin-top:16px;">Parcourir les offres</a></div>';
            return;
        }
        wishlistSection.classList.add('grid-offres');
        wishlistSection.innerHTML = '';
        wishlist.forEach(offer => {
            const article = document.createElement('article');
            article.classList.add('offre');
            article.innerHTML = `
                <h2>${offer.title}</h2>
                <p class="entreprise">${offer.company}</p>
                <div class="offre-actions">
                    <button class="wishlist-btn remove-btn" data-id="${offer.id}">Retirer</button>
                </div>`;
            wishlistSection.appendChild(article);
        });
        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', (event) => {
                const offerId = event.target.getAttribute('data-id');
                wishlist = wishlist.filter(item => item.id !== offerId);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                rendre();
            });
        });
    }

    rendre();
});
