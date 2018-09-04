@extends("baseStructure.base")
@section("content")
    <!--Content-->
        <div class="container">
            <!--Categories+Carousel-->
            <div class="container-fluid carousel-user">
                <!--carousel-->
                <div class="col-lg-12 carousel-user">
                    <div class="cantainer-fluid">

                        <div id="carousel" class="carousel slide">
                            <!--Индикаторы слайдов-->
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                                <li data-target="#carousel" data-slide-to="3"></li>
                                <li data-target="#carousel" data-slide-to="4"></li>
                            </ol>
                            <!--Слайды-->
                            <div class="carousel-inner">
                            @for($i = 0; $i < 5; $i++)
                                        <div class="item {{($i==0)?'active':''}}">
                                            <img src="{{asset('img\Laptop.png')}}" alt="">
                                            <div class="carousel-caption">
                                                <p>Picture</p>
                                            </div>
                                        </div>
                            @endfor
                            </div>
                            <!--Стрелки переклюяения сайдов-->
                            <a href="#carousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a href="#carousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!--Most popular-->
            @include('shop.productLine',['products_header' => 'Most popular', 'products' => $most_popular_products])
            <!--Most expensive-->
            @include('shop.productLine',['products_header' => 'Most expensive', 'products' => $most_expensive_products])
            <!--The cheapest-->
            @include('shop.productLine',['products_header' => 'The cheapest', 'products' => $the_cheapest_products])
        </div>
@endsection
