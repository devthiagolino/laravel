<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Contracts\AutorRepository;
use App\Entities\Autor;

/**
 * Class AutorRepositoryEloquent
 * @package namespace App\Repositorios;
 */
class AutorRepositoryEloquent extends BaseRepository implements AutorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Autor::class;
    }

}
