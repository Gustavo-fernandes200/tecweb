
function criarCookie() {
    
    var dataCriacao = new Date('2024-04-08T12:00:00'); 

    
    var dataExpiracao = new Date();
    dataExpiracao.setDate(dataExpiracao.getDate() + 7); 
    
    Cookies.set('meuCookie', 'valorDoCookie', { expires: dataExpiracao, secure: true });

    alert('Cookie criado com sucesso!');
}
function enviarCookieParaServidor() {
    var cookieValue = Cookies.get('meuCookie');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'url_do_servidor_que_recebe_cookie.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert('Valor do cookie enviado para o servidor: ' + xhr.responseText);
            } else {
                alert('Erro ao enviar o cookie para o servidor.');
            }
        }
    };
    xhr.send(JSON.stringify({ cookieValue: cookieValue }));
}
function receberCookieDoServidor() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'url_do_servidor_que_envia_cookie.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var cookieValueFromServer = xhr.responseText;
                Cookies.set('meuCookie', cookieValueFromServer);
                alert('Cookie recebido do servidor: ' + cookieValueFromServer);
            } else {
                alert('Erro ao receber o cookie do servidor.');
            }
        }
    };
    xhr.send();
}
