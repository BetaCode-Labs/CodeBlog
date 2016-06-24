<?php namespace App\Http\ViewComposers;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;


class UltimosComposers
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $Noticias = DB::select('SELECT * FROM 
(
	(SELECT * FROM xlogs ORDER BY id DESC LIMIT 3) 
) AS NewsFeed ORDER BY updated_at DESC limit 1
');


        $N = array();
        foreach ($Noticias as $Noticia) {


            $Noticia->tiempo = Carbon::parse($Noticia->created_at)->diffForHumans();
            switch ($Noticia->codigo) {
                case 0:
                    $Noticia->tipo = "Linea Temporal";
                    $Noticia->url = "xlte/" . $Noticia->slug;

                    break;
                case 100:
                    $Noticia->tipo = "xlog";
                    $Noticia->url = "xlog/" . $Noticia->slug;

                    break;
                case  69:
                    $Noticia->tipo = "Infección";
                    $Noticia->url = "xinf/" . $Noticia->slug;

                    break;
            }

            array_push($N, $Noticia);
        }

        $view->with('ultimos', $N);
    }

}