// Määrittää onko valikko auki vai kiinni
const burgerMenuBtn = document.querySelector('.burgerMenu');
let menuOpen = false;
burgerMenuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        burgerMenuBtn.classList.add('open');
        menuOpen = true;
    } else {
        burgerMenuBtn.classList.remove('open');
        menuOpen = false;
    }
});
// Tuo navBarin esille burgeria painaessa
const navbar = document.querySelector('.navBar');
burgerMenuBtn.addEventListener('click', () => {
    navbar.classList.toggle('change');
});