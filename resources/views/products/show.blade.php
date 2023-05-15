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
                <form method="POST" action="{{ route('products.store', ['id' => $product->id]) }}">
                    @csrf
                    <div class="center_product">
                        <h2>{{$product->name}}</h2>
                        <div class="size">
                            <span>Taille:</span>
                            <select name="size_id" style="background-color: #BA9755; border-radius: 5px; color: #FAF0E6; padding-right: 1.5em; text-align: center; font-size: 0.6em;" class="philosopher">
                            @foreach($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        @if(Auth::check())
                            <form action="{{ route('products.store', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn">Ajouter au panier</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn connect_cart">Ajouter au panier</a>
                        @endif
                    </div>
                </form>

            </div>
        </div>
        <div class="description_product1">
            <div class="description_product1_txt">
                <div class="name_product1">
                    <h3>Details</h3>
                </div>
                <div class="description_name_product">
                    <h2>Matétiel</h2>
                </div>
                <div class="description_txt_product">
                    {{$product->description}}
                </div>
                <div class="description_name_product">
                    <h2>Conseil d'entretien</h2>
                </div>
                <div class="description_txt_product">
                    {{$product->important_to_note}}
                </div>
            </div>
            <div class="pict_description" ><img src="images/croquis_montre.png"></div>
        </div>


</main>

@endsection
