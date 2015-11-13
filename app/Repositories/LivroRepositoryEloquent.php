<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Contracts\LivroRepository;
use App\Entities\Livro;

/**
 * Class LivroRepositoryEloquent
 * @package namespace App\Repositorios;
 */
class LivroRepositoryEloquent extends BaseRepository implements LivroRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Livro::class;
    }

    
}
