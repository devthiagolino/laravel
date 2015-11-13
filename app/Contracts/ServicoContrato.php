<?php 

namespace App\Contracts;

interface ServicoContrato
{

	public function index();
	public function edit($id);
	public function destroy($id);
	public function create();
	public function update($id, $dados);
	public function store($dados);

}