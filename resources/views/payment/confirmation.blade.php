@extends('layout.app')

@section('content')

    <header>
        <div class="checkout_payement_check">
            <a class="checkout_icon">
                <i class="fa fa-shopping-cart "></i>
                <span class="txt_icon">Panier</span>
            </a>
            <div class="right_line_checkout"></div> 
            <a class="payement_icon">
                <i class="fa fa-credit-card "></i>
                <span class="txt_icon">Payement</span>
            </a>
            <div class="right_line_checkout"></div> 
            <a class="check_icon active">
                <i class="fa fa-check"></i>
                <span class="txt_icon">Confirmation</span>
            </a>
        </div>
    </header>
    <footer class="confimed_all_info">
        <div class="confirmed_img_txt">
            <div>
                <img src="images/Order_confirmed.png" alt="" class="order_confirmed">
            </div>
            <div class="confirmed_txt">
                <span>Achat confirmer</span>
            </div>
            <div>
                <a href="{{ route('generics.index') }}" class="reception_after_buy_btn" type="button">Allez a la page d'accueil</a>
            </div>
        </div>
        <div class="confirmed_payement_delivery">
            <div class="who_delivery_time">
                <div class="delivery_time">
                    <img src="images/time.png" alt="" class="img_who_delivery_time">
                    <span>Livrée dans 10j</span>
                </div>
                <div class="who_delivery">
                    <img src="images/courier.png" alt="" class="img_who_delivery_time">
                    <span>Chronopost</span>
                </div>
            </div>
            <div class="confirmed_price">
                <span class="confirmed_articles">1 tee shirt de sport</span>
                <span>150 €</span>
            </div>
            <div>
                <div class="confirmed_delivery_price">
                    <span class="confirmed_delivery_price_txt">Cout de la livraison</span>
                    <span>10 €</span>
                </div>
                <div class="confirmed_checkout">
                    <span class="confirmed_checkout_txt">Total du panier</span>
                    <span>150 €</span>
                </div>
                <div class="confirmation_line_checkout"></div> 
                <div class="confirmed_total_checkout_price">
                    <span class="total_txt">Total</span>
                    <span>160 €</span>
                </div>
                <div class="confirmation_line_checkout"></div> 
            </div>
            <div class="confiramtion_adress">
                <span class="confirmed_adress_txt">Adresse de livraison</span>
                <span>18 Richardson Drive<br>Fountain Valley, <br>CA 92708</span>
            </div>
        </div>
    </footer>

@endsection