<?php

namespace App\Apresentadores;

use App\Transformers\LivroTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class LivroPresenter
 *
 * @package namespace App\Apresentadores;
 */
class LivroPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LivroTransformer();
    }
}
