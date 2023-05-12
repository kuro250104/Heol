@extends('layout.app')

@section('content')

<main>



        <div class="product_link">
            <a href="{{ route('generics.index')}}"> Home / </a>
            <a href="{{ route('products.index')}}"> Produits/ </a>
            <span style="color:#4B6F43">{{$product->name}}</span>
        </div>
        <div class="product_show">
            <div class="product_div">

                <div class="product_pict_view ">
                    <img src="{{ asset('images/' . $product->image) }} "class="articles_img">
                </div>
            </div>
            <div class="name_product">
                <h2>{{$product->name}}</h2>
                <div class="price_product1">{{$product->price}}€</div>
                <div class="product_size">
                    <div class="size">
                        <span>Taille:</span>
                        <select style="background-color: #BA9755; border-radius: 5px; color: #FAF0E6; padding-right: 1.5em; text-align: center; font-size: 0.6em;" class="philosopher">
                        @foreach($sizes as $size)
                            <option>{{$size->name}}</option>
                        @endforeach
                        </select>
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
