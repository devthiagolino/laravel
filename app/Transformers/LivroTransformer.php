<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entidades\Livro;

/**
 * Class LivroTransformer
 * @package namespace App\Transformadores;
 */
class LivroTransformer extends TransformerAbstract
{

    /**
     * Transform the \Livro entity
     * @param \Livro $model
     *
     * @return array
     */
    public function transform(Livro $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
