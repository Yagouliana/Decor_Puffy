document.addEventListener('DOMContentLoaded', function () {
    // Aqui você pode adicionar interações do carrinho ou outras funcionalidades
    const carrinhoBtn = document.getElementById('carrinhoBtn');
    const cadastroBtn = document.getElementById('cadastroBtn');
  
    // Ação de abrir o modal do carrinho
    carrinhoBtn.addEventListener('click', function() {
      // Simula a visualização do carrinho vazio
      alert('Carrinho aberto (em breve mais funcionalidades)');
    });
  
    // Ação de redirecionar para o login ao clicar em "Cadastre-se"
    cadastroBtn.addEventListener('click', function() {
      window.location.href = 'login.html';
    });
  });
  
  next.onclick = proximoSlide;
  prev.onclick = anteriorSlide;

  setInterval(proximoSlide, 1000)