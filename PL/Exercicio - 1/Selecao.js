

function EscolhiaDeOpcao(Opcao) {

    const OpcaoHomem = document.getElementById('OpcaoHomem');
    const OpcaoMulher = document.getElementById('OpcaoMulher');
  
    if (Opcao === 'OpcaoHomem') {

      OpcaoHomem.style.display = 'block';
      OpcaoMulher.style.display = 'none';

    } else if (Opcao === 'OpcaoMulher') {

      OpcaoHomem.style.display = 'none';
      OpcaoMulher.style.display = 'block';
      
    }
  }
  

