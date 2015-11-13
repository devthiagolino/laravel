<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Autor;

/**
 * Class AutorTransformer
 * @package namespace App\Transformadores;
 */
class AutorTransformer extends TransformerAbstract
{

    /**
     * Transform the \Autor entity
     * @param \Autor $model
     *
     * @return array
     */
    public function transform(Autor $model)
    {
        return [
        'id' => (int) $model->id,
        'email' => $model->email,
        'telefone' => $model->telefone,
        'foto' => $model->foto,
        'dt_nascimento' => $model->dt_nascimento,
        'updated_at' => $model->updated_at,
        'created_at' => $model->created_at->format('d/m/Y H:i')
        ];
    }
}
