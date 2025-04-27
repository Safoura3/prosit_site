// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');

    wishlistButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const offerId = event.target.getAttribute('data-id');
            const offerTitle = event.target.getAttribute('data-title');
            const offerCompany = event.target.getAttribute('data-company');

            const offer = { id: offerId, title: offerTitle, company: offerCompany };

            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            // Vérifie si l'offre est déjà dans la wishlist
            const exists = wishlist.some(item => item.id === offerId);
            if (!exists) {
                wishlist.push(offer);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                alert('Offre ajoutée à votre wishlist.');
            } else {
                alert('Cette offre est déjà dans votre wishlist.');
            }
        });
    });
});
