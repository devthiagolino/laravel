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

var listadeautores = $('table.autores');
var channel = pusher.subscribe('app-channel');

channel.bind('App\\Events\\StoreAutor', function(data) {
	
	var autor = data.item;	
	var source   = $("#item-autor").html();
	var template = Handlebars.compile(source);
	var context = {item:autor};
	var html    = template(context);
	var firstElement = listadeautores.find('tbody');
	firstElement.prepend($(html).fadeIn('slow'));

});