<?php 

namespace App\Services;

use App\Contracts\ServicoContrato;
use App\Contracts\LivroRepository;

/**
* Servico para Livros
*/
class LivroService implements ServicoContrato
{
	
	protected $repositorio = null;

	public function __construct(LivroRepository $repositorio){
		$this->repositorio = $repositorio;
	}

	public function index()
	{
		$data['resultado'] = $this->repositorio->scopeQuery(function($query){
			return $query->orderBy('titulo','asc');
		})->paginate(5);
		return view('livros.index', $data);
	}
	
	public function show($id)
	{
		$item['item'] = $this->repositorio->find($id);
		return view('livros.show', $item);
	}

	public function edit($id)
	{
		$item['item'] = $this->repositorio->find($id);
		$item['rota'] = route('livros.update', $id);
		$item['_method'] = 'put';
		$item['acao'] = 'Editar';
		return view('livros.create', $item);
	}

	public function destroy($id)
	{
		try{
			$this->repositorio->delete($id);
			return redirect()->back()->with('sucesso', 'Registro removido com sucesso.');
		}catch (Exception $e){
			return redirect()->back()->with('erro', $e->getMessage());
		}

	}
	
	public function create()
	{
		$item['item'] = new \App\Entities\Livro();
		$item['rota'] = route('livros.store');
		$item['_method'] = 'post';
		$item['acao'] = 'Cadastrar';
		return view('livros.create', $item);
	}
	
	public function update($id, $dados)
	{
		$input = $dados->except(['_token', '_method']);

		try{						
			$validator = \Validator::make($input, \App\Entities\Livro::$regras);			
			if ($validator->fails()) {
				return redirect()
				->back()
				->withErrors($validator)
				->withInput();
			}

			$this->repositorio->update($input, $id);
			return redirect()->back()->with('sucesso', 'Registro atualizado com sucesso.');

		}catch (Exception $e){
			return redirect()->back()->with('erro', $e->getMessage()); 
		}
	}
	
	public function store($dados)
	{
		$input = $dados->except(['_token', '_method']);
		
		try{						
			$validator = \Validator::make($input, \App\Entities\Livro::$regras);			
			if ($validator->fails()) {
				return redirect()
				->back()
				->withErrors($validator)
				->withInput();
			}

			$this->repositorio->store($input);
			return redirect()->back()->with('sucesso', 'Registro criado com sucesso.');

		}catch (Exception $e){
			return redirect()->back()->with('erro', $e->getMessage()); 
		}
	}

}
