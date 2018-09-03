@extends("baseStructure.base")
@section("content")
    <div class="container product-div" style="padding: 5px;position:relative;">
        <div class="col-lg-3 col-md-3" style="height:100%;border-right:1px solid rgba(0,0,0,0.07);">
            <div style="padding-right:5px;">
                <h4 class="category-name-on-main"><a href="#">Product name</a></h4>
                <img class="product-div-image" src="#" alt="alt-name" style="padding-left:5px;"><br>
            </div>
            <div>
                <h3 style="text-align: center;">Characteristics</h3><br>
                <p style="padding-left:20px;">
                    1.characteristic
                    2.characteristic
                </p>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-8 col-md-9 desc_product">
            <h3>Description:</h3>
            <p>
                Description ...
            </p>
        </div>
        <div class="btn_buy_single">
            <a href="#">Buy</a>
        </div>
    </div>
@endsection