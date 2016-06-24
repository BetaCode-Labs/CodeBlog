@foreach($Cursos as $Curso)

    <a class="angled-img" href="{{$Curso->slug}}">
        <div class="img">
            <img src="{{ $Curso->imagen }}" alt="">
        </div>
        <div class="over-info">
            <div>
            </div>
        </div>
    </a>
@endforeach
