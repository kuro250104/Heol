@extends('layout.app')

@section('content')

<main>



        <div class="product_link">
            <a href="{{ route('generics.index')}}"> Home / </a>
            <a href=""> Produits/ </a>
            <span style="color:#4B6F43">{{$product->category_id}}</span>
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
                <h2>{{$product->name}}</h2>
                <div class="price_product1">{{$product->price}}</div>
                <div class="product_size">
                    <div class="size">
                        <span>Taille:</span>
                        @foreach($sizes as $size)
                            <button type="button" class="btn_size">{{$size->name}}</button>
                        @endforeach
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
                    {{$product->description}}
                </div>
                <div class="description_name_product">
                    <h2>Important to Note</h2>
                </div>
                <div class="description_txt_product">
                    {{$product->important_to_note}}
                </div>
            </div>
            <div class="pict_description" ><img src="images/croquis_montre.png"></div>
        </div>


</main>

@endsection
