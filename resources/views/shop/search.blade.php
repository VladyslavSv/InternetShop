@extends("baseStructure.base")
@section("content")
<div class="pane-with-products container">
    <h4 class="category-name-on-main">Was searched elements: ???</h4>
    <div class="container-fluid">
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php
            for( $i = 0 ; $i < 4; $i++ )
            {

            ?>
            <div class="product_item product_item_base">
                <a href="#">
                    <div class="img-div">
                        <img src="#" alt="product-item" class="product-img">
                    </div>
                </a>
                <div>
                    <p class="product-name-link"><a href="#">Product name</a></p>
                    <p class="item_price">price</p>
                    <p class="btn_buy"><a href="#">Buy</a></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php
            for( $i = 0 ; $i < 4; $i++ )
            {
            ?>
                <div class="product_item product_item_base">
                    <a href="#">
                        <div class="img-div">
                            <img src="#" alt="product-item" class="product-img">
                        </div>
                    </a>
                    <div>
                        <p class="product-name-link"><a href="#">Product name</a></p>
                        <p class="item_price">price</p>
                        <p class="btn_buy"><a href="#">Buy</a></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php
            for( $i = 0 ; $i < 4; $i++ )
            {
            ?>
                <div class="product_item product_item_base">
                    <a href="#">
                        <div class="img-div">
                            <img src="#" alt="product-item" class="product-img">
                        </div>
                    </a>
                    <div>
                        <p class="product-name-link"><a href="#">Product name</a></p>
                        <p class="item_price">price</p>
                        <p class="btn_buy"><a href="#">Buy</a></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php
            for( $i = 0 ; $i < 4; $i++ )
            {
            ?>
                <div class="product_item product_item_base">
                    <a href="#">
                        <div class="img-div">
                            <img src="#" alt="product-item" class="product-img">
                        </div>
                    </a>
                    <div>
                        <p class="product-name-link"><a href="#">Product name</a></p>
                        <p class="item_price">price</p>
                        <p class="btn_buy"><a href="#">Buy</a></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
@endsection