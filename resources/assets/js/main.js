$(document).ready(function(){

	var botaoMaisLivro = $('.btn-mais-livro');
	var conteudoMaisLivro = $('.hidden-info');
	botaoMaisLivro.bind('click', function(){
		conteudoMaisLivro.toggle();
	});
});

var pusher = new Pusher('0ead76d257f3c453f435', {
	encrypted: true
});

var channel = pusher.subscribe('app-channel');
channel.bind('App\\Events\\StoreAutor', function(data) {
	$('#realtime-msg').text('Um novo autor foi adicionado:' + data.item.nome);
	$('#alerts').fadeIn(600);
});