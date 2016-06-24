<?php namespace App\Http\ViewComposers;

use App\xproyecto;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Paginator;


class ProyectosComposers
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $Pro = xproyecto::all();
        $view->with('todos', $Pro);
    }

}