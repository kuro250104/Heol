@extends('layout.app')

@section('content')

    <div class="checkout_payement_check">
        <a class="checkout_icon active">
            <i class="fa fa-shopping-cart "></i>
            <span class="txt_icon">Panier</span>
        </a>
        <div class="right_line_checkout"></div> 
        <a class="payement_icon">
            <i class="fa fa-credit-card "></i>
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
        <div>
            <div  class="delivery_all_info">
                <div class="delivery_all_info_div">
                    <span class="delivery_all_info_txt">Information de livraison</span>
                </div>
                <div>
                    <div class="delivery_info_done">
                        <p>Nom</p>
                        <p>DUPOND Dupont</p>
                    </div>
                    <div class="delivery_info_done">
                        <p class="mail_txt_space">Adresse mail</p>
                        <p>dupond.dupont@dupons.com</p>
                    </div>
                    <div class="delivery_info_done">
                        <p>Adresse de livraison</p>
                        <p>18 rue du DUPOND</p>
                    </div>
                    <div class="delivery_info_done">
                        <p>Code Postale</p>
                        <p>49130</p>
                    </div>
                    <div class="delivery_info_done">
                        <p>Commune</p>
                        <p>Angers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all_info_payement">
        <div class="method_payement_txt">
            <p>Méthode de payement</p>
        </div>
        <div class="type_payement">
            <a href="" class="div_payement">
                <img src="images/mastercard.png" class="logo_for_payement">
                <p>Mastercard</p>
            </a>
            <a href="" class="div_payement">
                <img src="images/VISA.png" class="logo_for_payement">
                <p>VISA</p>
            </a>
            <a href="" class="div_payement">
                <img src="images/PayPal.png" class="logo_for_payement">
                <p>PayPal</p>
            </a>
        </div>
    </div>

@endsection