document.addEventListener('DOMContentLoaded', () => {

    const menu = document.querySelector('.menu');
    const navMenu = document.querySelector('.nav-menu');
    const dropdownLinks = document.querySelectorAll('.dropdown > a');

    // MENU MOBILE
    if (menu && navMenu) {
        menu.addEventListener('click', () => {
            menu.classList.toggle('ativo');
            navMenu.classList.toggle('ativo');
        });
    }

    // SUBMENU MOBILE
    dropdownLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {

                const dropdown = link.parentElement;

                // se submenu fechado → só abre
                if (!dropdown.classList.contains('ativo')) {
                    e.preventDefault();
                    dropdown.classList.add('ativo');
                }
                // se já estiver aberto → deixa navegar
            }
        });
    });
    
});