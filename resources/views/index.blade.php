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
                                <?php
                                    for($i=0;$i<5;$i++)
                                    {
                                        ?>
                                        <div class="item {{($i==0)?'active':''}}">
                                            <img src="{{asset('img\Laptop.png')}}" alt="">
                                            <div class="carousel-caption">
                                                <p>Picture</p>
                                            </div>
                                        </div>
                                <?php
                                    }
                                ?>
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
            <div class="container-fluid pane-with-products">
                <h4 class="category-name-on-main"><a href="#">Most popular</a></h4>
                <?php
                       for($i=0;$i<4;$i++)
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <div class="product_item product_item_base">
                               <a href="#">
                                <div class="img-div">
                                        <img src="" alt="" class="product-img">
                                </div>
                                </a>
                                <div>
                                    <p class="product-name-link"><a href="#">Name</a></p>
                                    <p class="item_price">1000</p>
                                    <p class="btn_buy"><a href="#">Buy</a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                <p class="more"><a href="#">more... <i class="glyphicon glyphicon-menu-right"></i></a></p>
            </div>
            <!--Most expensive-->
            <div class="container-fluid pane-with-products">
                <h4 class="category-name-on-main"><a href="#">Most expensive</a></h4>
                <?php
                       for($i=0;$i<4;$i++)
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <div class=" product_item product_item_base ">
                                <a href="#">
                                    <div class="img-div">               
                                        <img src="#" alt="" class="product-img">
                                    </div>
                                </a>
                                <div>
                                    <p class="product-name-link"><a href="#">Name</a></p>
                                    <p class="item_price">1000</p>
                                    <p class="btn_buy"><a href="#">Buy</a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                <p class="more"><a href="#">more... <i class="glyphicon glyphicon-menu-right"></i></a></p>
            </div>
            <!--The cheapest-->
            <div class="container-fluid pane-with-products">
                <h4 class="category-name-on-main"><a href="#">Most cheap</a></h4>
                <?php
                       for($i=0;$i<4;$i++)
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <div class="product_item product_item_base">
                               <a href="#">
                                <div class="img-div">
                                        <img src="#" alt="" class="product-img">
                                </div>
                                </a>
                                <div>
                                    <p class="product-name-link"><a href="#">Name</a></p>
                                    <p class="item_price">1000</p>
                                    <p class="btn_buy"><a href="#">Buy</a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                <p class="more"><a href="#">more...<i class="glyphicon glyphicon-menu-right"></i></a></p>
            </div>
        </div>
@endsection
