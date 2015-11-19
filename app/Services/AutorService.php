<?php 

namespace App\Services;

use App\Contracts\ServicoContrato;
use App\Contracts\AutorRepository;

/**
* Servico para Autores
*/
class AutorService implements ServicoContrato
{
	
	protected $repositorio = null;

	public function __construct(AutorRepository $repositorio){
		$this->repositorio = $repositorio;
	}

	public function index()
	{
		$data['resultado'] = $this->repositorio->scopeQuery(function($query){
			return $query->orderBy('nome','asc');
		})->paginate(5);
		return view('autores.index', $data);
	}
	
	public function show($id)
	{
		$item['item'] = $this->repositorio->find($id);
		return view('autores.show', $item);
	}

	public function edit($id)
	{
		$item['item'] = $this->repositorio->find($id);
		$item['rota'] = route('autores.update', $id);
		$item['_method'] = 'put';
		$item['acao'] = 'Editar';
		return view('autores.create', $item);
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
		$item['item'] = new \App\Entities\Autor();
		$item['rota'] = route('autores.store');
		$item['_method'] = 'post';
		$item['acao'] = 'Cadastrar';
		return view('autores.create', $item);
	}
	
	public function update($id, $dados)
	{
		$input = $dados->except(['_token', '_method']);

		try{						
			$validator = \Validator::make($input, \App\Entities\Autor::$regras);			
			if ($validator->fails()) {
				return redirect()
				->back()
				->withErrors($validator)
				->withInput();
			}

			$update = $this->repositorio->update($input, $id);			
			return redirect()->back()->with('sucesso', 'Registro atualizado com sucesso.');

		}catch (Exception $e){
			return redirect()->back()->with('erro', $e->getMessage()); 
		}
	}
	
	public function store($dados)
	{
		$input = $dados->except(['_token', '_method']);
		
		try{						
			$validator = \Validator::make($input, \App\Entities\Autor::$regras);			
			if ($validator->fails()) {
				return redirect()
				->back()
				->withErrors($validator)
				->withInput();
			}

			$create = $this->repositorio->create($input);			
			event(new \App\Events\StoreAutor($create));
			return redirect()->back()->with('sucesso', 'Registro criado com sucesso.');

		}catch (Exception $e){
			return redirect()->back()->with('erro', $e->getMessage()); 
		}
	}

}
