<?php

namespace App\Presenters;

use App\Transformers\AutorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AutorPresenter
 *
 * @package namespace App\Apresentadores;
 */
class AutorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AutorTransformer();
    }
}
