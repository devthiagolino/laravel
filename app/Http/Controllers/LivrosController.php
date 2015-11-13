<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\LivroService;

class LivrosController extends Controller
{
    /**
     * @var LivroServico
     */
    protected $servico = null;

    public function __construct(LivroService $servico)
    {
    	$this->servico = $servico;
    }

    public function index()
    {
    	return $this->servico->index();
    }

    public function edit($id)
    {
    	return $this->servico->edit($id);
    }

    public function show($id)
    {
        return $this->servico->show($id);
    }

    public function store(Request $post)
    {
    	return $this->servico->store($post);
    }

    public function update($id, Request $put)
    {
    	return $this->servico->update($id, $put);
    }

    public function destroy($id)
    {
    	return $this->servico->destroy($id);
    }

    public function create()
    {
    	return $this->servico->create();
    }

}
