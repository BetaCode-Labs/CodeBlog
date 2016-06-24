<div class="info align-center">
    <div>
        <h2 class="mb-40">Nuestros Proyectos</h2>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel" data-autoplay="6000" loop="false">

                    @foreach($todos as $todo)
                        <div class="item">
                            <a href="{{$todo->url}}">
                                <img src="{{ $todo->imagen}}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>