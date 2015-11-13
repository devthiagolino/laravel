$(document).ready(function(){

	var botaoMaisLivro = $('.btn-mais-livro');
	var conteudoMaisLivro = $('.hidden-info');
	botaoMaisLivro.bind('click', function(){
		conteudoMaisLivro.toggle();
	});

});