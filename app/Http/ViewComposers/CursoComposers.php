<?php namespace App\Http\ViewComposers;

use App\xcurso as Curso;
use Illuminate\Contracts\View\View;


class CursoComposers
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $Cursos = Curso::all();
        $view->with('Cursos', $Cursos);
    }

}