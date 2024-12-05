
function abrirPopup() {

  alert('Este é um exemplo de alerta!');

  const nome = prompt('Digite seu nome:');
  
  if (nome !== null && nome !== '') {
    alert('Olá, ' + nome + '! Você abriu o pop-up.');
  } else {
    alert('Você não digitou seu nome.');
  }
}
