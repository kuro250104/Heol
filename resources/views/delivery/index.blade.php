@extends('layout.app')

@section('content')

    <div class="checkout_payement_check">
        <a class="checkout_icon active">
            <i class="fa fa-shopping-cart"></i>
            <span class="txt_icon">Panier</span>
        </a>
        <div class="right_line_checkout"></div>
        <a class="payement_icon">
            <i class="fa fa-credit-card"></i>
            <span class="txt_icon">Payement</span>
        </a>
        <div class="right_line_checkout"></div>
        <a class="check_icon">
            <i class="fa fa-check"></i>
            <span class="txt_icon">Confirmation</span>
        </a>
    </div>
    <div class="delivery_and_checkout_detail">
        <div  class="checkout_price_detail">
            <div>
                <span class="order_detail_txt">Détail panier</span>
            </div>
            <div class="order_detail_class_articles">
                <span class="order_detail_article_txt">Ensemble de sport</span>
                <div>
                    <div>
                        <button id="delete_one"type="button" class="btn_add_articles">-</button>
                        <button id="add_one"type="button" class="btn_add_articles">+</button>
                    </div>
                </div>
                <span class="order_detail_price" id="count">1</span>
            </div>
            <div>
                <div class="order_detail_class">
                    <span class="order_detail_alt_txt">Total du panier</span>
                    <span class="order_detail_price">300€</span>
                </div>
                <div class="order_detail_class">
                <span class="order_detail_alt_txt">Frais de livraison</span>
                    <span class="order_detail_price">0€</span>
                </div>
                <div class="top_line__totalcheckout"></div>
                <div class="order_detail_class">
                    <span class="order_detail_alt_txt">Total</span>
                    <span class="order_detail_price">300€</span>
                </div>
            </div>
        </div>
        <form action="{{ route('delivery.store')}}" method="POST">
            @csrf
            <div  class="delivery_all_info">
                <div class="delivery_all_info_div">
                    <span class="delivery_all_info_txt">Information de livraison</span>
                </div>
                <div>
                    <div>
                        <span class="delivery_txt">Nom</span>
                        <div>
                            <input type="text" class="input_delivery" name="name" id="name"required>
                        </div>
                    </div>
                    <div>
                        <span class="delivery_txt">Adresse mail</span>
                        <div>
                            <input type="email" class="input_delivery" name="email" id="email" required>
                        </div>
                    </div>
                    <div>
                        <span class="delivery_txt">Adresse de livraison</span>
                        <div>
                            <input type="text" class="input_delivery" name="delivery_address" id="delivery_address" required>
                        </div>
                    </div>
                    <div>
                        <span class="delivery_txt">Code Postale</span>
                        <div>
                            <input type="text" class="input_delivery" name="postal_code" id="postal_code" pattern="[0-9]{5}" required>
                        </div>
                    </div>
                    <div>
                        <span class="delivery_txt">Commune</span>
                        <div>
                            <input type="text" class="input_delivery" name="city" id="city" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_continue_payement_div">
                {{-- <a href="{{ route('products.index') }}" class="btn_continue">
                    <h4>Continuer mes achats</h4>
                </a> --}}
                <button href="{{ route('payment.index') }}" class="btn_payement">
                    <h4>Payement</h4>
                </button>
            </div>
        </form>
    </div>

@endsection
