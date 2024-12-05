
        function carregarDados() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://127.0.0.1/dados.txt', true); 
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        
                        var dados = xhr.responseText;
                        document.getElementById('dadosContainer').innerText = dados;
                    } else {
                        
                        document.getElementById('dadosContainer').innerText = 'Erro ao carregar os dados.';
                    }
                }
            };
            xhr.send();
        }

       
        window.onload = carregarDados;