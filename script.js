// Funcionalidad para el menú hamburguesa en dispositivos móviles
const menuBtn = document.getElementById('menuBtn');
const navLinks = document.getElementById('navLinks');

// Abrir y cerrar el menú al hacer clic en el ícono
menuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Cerrar el menú automáticamente cuando se hace clic en cualquier enlace (ideal para celulares)
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
    });
});