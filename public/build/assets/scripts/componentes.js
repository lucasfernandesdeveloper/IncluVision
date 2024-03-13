cardSecao = document.getElementById('cardSecao')

secao1 = document.getElementById('secao1')

secao1.addEventListener('click', function(e) {
    if (cardSecao.style.display !== 'block') {
      cardSecao.style.display = 'block';
      cardSecao.classList.add('card-entrada');
      secao1.classList.add('secao-clicked');
    } else {
      cardSecao.style.display = 'none';
      cardSecao.classList.remove('card-entrada');
      secao1.classList.add('secao-clicked');

      cardSecao.addEventListener('animationend', function() {
        cardSecao.classList.remove('card-saida');
      }, { once: true });
  
      secao1.classList.remove('secao-clicked');
    }
  });
