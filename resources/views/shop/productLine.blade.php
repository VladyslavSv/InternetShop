<div class="container-fluid pane-with-products">
    <h4 class="category-name-on-main"><a href="#">{{$products_header}}</a></h4>
@foreach($products as $product)
    <div class="col-lg-3 col-md-3 col-xs-6">
        <div class="product_item product_item_base">
            <a href="#">
                <div class="img-div">
                    <img src="{{asset($product->img_name)}}" alt="" class="product-img">
                </div>

            </a>
            <div>
                <p class="product-name-link"><a href="#">{{$product->name}}</a></p>
                <p class="item_price">{{$product->price}}</p>
                <p class="btn_buy"><a href="#">Buy</a></p>
            </div>
        </div>
    </div>
@endforeach
    <p class="more"><a href="#">more... <i class="glyphicon glyphicon-menu-right"></i></a></p>
</div>