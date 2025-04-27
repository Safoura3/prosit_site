// wishlist.js

document.addEventListener('DOMContentLoaded', () => {
    const wishlistSection = document.getElementById('wishlist');
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

    if (wishlist.length === 0) {
        wishlistSection.innerHTML = '<p>Votre wishlist est vide.</p>';
    } else {
        wishlist.forEach(offer => {
            const article = document.createElement('article');
            article.classList.add('offre');
            article.innerHTML = `
                <h2>${offer.title}</h2>
                <p>${offer.company}</p>
                <button class="remove-btn" data-id="${offer.id}">Retirer de la wishlist</button>
            `;
            wishlistSection.appendChild(article);
        });

        const removeButtons = document.querySelectorAll('.remove-btn');
        removeButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                const offerId = event.target.getAttribute('data-id');
                wishlist = wishlist.filter(item => item.id !== offerId);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                location.reload();
            });
        });
    }
});
