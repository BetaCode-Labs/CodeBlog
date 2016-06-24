@foreach($ultimos as $ultimo)
    <div class="news-one">
        <div class="row vertical-gutter">
            <div class="col-md-4">
                <a href="#" class="angled-img">
                    <div class="img">
                        <img src="{{$ultimo->imagen}}" alt="">
                    </div>

                    <div class="youplay-hexagon-rating youplay-hexagon-rating-small " data-max="10" data-size="50"
                         title="9.1 out of 10"><span>0</span>
                    </div>
                </a>
            </div>
            <div class="col-md-8">
                <div class="clearfix">
                    <h3 class="h2 pull-left m-0"><a href="#">{{$ultimo->title}}</a></h3>
                    <span class="date pull-right"><i class="fa fa-calendar"></i> {{$ultimo->tiempo}}</span>
                </div>
                <div class="tags">
                    <i class="fa fa-tags"></i> <a href="#">{{$ultimo->tipo}}</a>
                </div>
                <div class="description">
                    {{$ultimo->resumen}}
                </div>
                <a href="{{$ultimo->url}}" class="btn read-more pull-left">Revisar</a>
            </div>
        </div>
    </div>

@endforeach
