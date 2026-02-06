// main.js

// Vérification que le JS est chargé
console.log("Le site est chargé !");

// Smooth scroll pour les liens internes (À propos / Contact)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if(target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Exemple : animation simple sur les cartes lors du hover (optionnel)
const cards = document.querySelectorAll('.card');
cards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    card.style.transform = 'translateY(-5px)';
    card.style.boxShadow = '0 15px 35px rgba(2,6,23,0.6)';
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = 'translateY(0)';
    card.style.boxShadow = '0 10px 30px rgba(2,6,23,0.6)';
  });
});
