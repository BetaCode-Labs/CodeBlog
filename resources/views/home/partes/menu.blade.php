<nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logodos.png') }}" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">Inicio<span class="label">Home</span></a></li>
                <li><a href="{{ URL::to('/cursos') }}">Cursos<span class="label">Guias</span></a></li>
                <li><a href="{{ URL::to('/xlog') }}">xLogs<span class="label">Blog</span></a></li>
                <li><a href="{{ URL::to('/xinf') }}">Infección<span class="label">Dia {x}</span></a></li>
                <li><a href="{{ URL::to('/xlte') }}">LTE<span class="label">{x} Items</span></a></li>
                <li><a href="{{ URL::to('/contacto') }}">Hablemos<span class="label">Contacto</span></a></li>

            </ul>
        </div>
    </div>
</nav>
