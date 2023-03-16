@extends('layout.app')

@section('content')

<main>
    <div class="product_link">
        <a href="{{ route('generics.index')}}"> Home / </a>
        <a href=""> Produits/ </a>
        <span style="color:#4B6F43">Sac</span>
    </div>
    <div class="product_show">
        <div class="product">
            <div class="product_pict">
                <div class="product_pict_select" ><a href=""><img src="images/bag-view-1.png"></a></div>
                <div class="product_pict_select" ><a href=""><img src="images/bag-view-2.png"></a></div>
                <div class="product_pict_select" ><a href=""><img src="images/bag-view-3.png"></a></div>
                <div class="product_pict_select" ><a href=""><img src="images/bag-view-4.png"></a></div>
            </div>
            <div class="product_pict_view"><img src="images/bag-view-1.png"></div>
        </div>
        <div class="name_product">
            <h2>Legging vintage sport/mode femme.</h2>
            <div class="price_product1">21€</div>
            <div class="product_size">
                <div class="size">
                    <span>Taille:</span>
                    <button type="button" class="btn_size">XS</button>
                    <button type="button" class="btn_size">S</button>
                    <button type="button" class="btn_size">M</button>
                    <button type="button" class="btn_size">L</button>
                    <button type="button" class="btn_size">XL</button>
                    <button type="button" class="btn_size">XXL</button>
                    <button type="button" class="btn_size">XXXL</button>
                </div>
            </div>
            <div>
                <a href="" class="btn" type="button">Ajouter au panier</a>
            </div>
        </div>  
    </div>
    <div class="description_product1">
        <div class="description_product1_txt">
            <div class="name_product1">
                <h3>Details</h3>
            </div>
            <div class="description_name_product">
                <h2>Material</h2>
            </div>
            <div class="description_txt_product">
                MATOA Way Kambas - Sumatran Rhino comes with a material form of Makassar Ebony (Diospyros celebica).
                This wood is chosen to represent the Sumatran Rhino's skin which is designed with an overlap effect on its strap to represent Rhino's skin.
                Sumatran Rhino has unique skin fold, the skin is fairly thin about 10-16mm, and is soft and pliable.
            </div>
            <div class="description_name_product">
                <h2>Important to Note</h2>
            </div>
            <div class="description_txt_product">
                Wood color on watches is produced from a combination of mature and fresh wood but should not be viewed as a defect.
                It is a very natural process of wood aging.
            </div>
        </div>
        <div class="pict_description" ><img src="images/croquis_montre.png"></div>
    </div>
</main>

@endsection