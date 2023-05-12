@extends('layout.app')

@section('content')


    <div class="articles_div"  href="">

        @foreach($products as $product)

            <a class="articles" href="{{ route('products.show',$product->id)}}">
                <div>
{{--                    <img src="images/bag-view-1.png" class="articles_img">--}}
{{--                    images/{{ $project->image }}--}}
                    <img src="{{ asset('images/' . $product->image) }}" alt="Image du produit" class="img-fluid articles_img">
                </div>
                <div class="articles_color">
                    <div class="item_color"></div>
                    <div class="item_color"></div>
                </div>
                <div class="articles_txt">
                    <p>{{$product->name}}</p>
                </div>
                <div class="articles_txt price">
                    <p>{{$product->price}}€</p>
                </div>
            </a>
        @endforeach

    </div>
@endsection
