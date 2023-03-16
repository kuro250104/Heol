@extends('layout.app')

@section('content')

    <div class="marque-history">
        <div>
            <img src="images/heol_logo_index.png" class="product_show_img" alt="">
        </div>
        <div  class="align_text_show">
            <div>
                <span class="name_product_show">HEOL, le nouveau souffle</span>
            </div>
            <div class="bottom_line_product_show"></div> 
                <span class="description_txt_product">
                    Nous nous rendons compte que l'industrie textile <br>est l'une des plus polluantes au monde, c'est pourquoi<br>
                    les matières textiles d' HEOL sont issus de l'upcycling de <br>matières innovantes et respirantes ainsi que
                    des fins de rouleaux<br> du centre de recherche appliqué et d'innovation pour<br> une industrie durable: CETI
                    situé à Lille.
                </span>
                <div class="bottom_line_product_show"></div> 
                <div class="discovery_class">
                    <a href="{{ route('generics.about_us')}}" class="discovery"><h4>Découvrir</h4></a>
                </div>
        </div>
    </div>
    <div class="show_2_product">
        <div class="shoe_show">
            <span class="title_2_product">Paire de chaussure</span><br>
            <span class="txt_2_product">Nouvelle paire de chaussure unisexe,<br class="add_br"> pour le sport</span><br>
            <div class="shoe_discovery_display">
                <div>
                    <a href="" class="discovery_shoe_sock">Découvrez</a><br>
                    <div class="bottom_line_2_product_show"></div> 
                </div>
                <div>
                    <img class="img_2_product" src="images/paire_de_chaussure-removebg-preview.png">
                </div>
            </div>
        </div>
        <div>
            <span class="title_2_product">Paire de chaussette</span><br>
            <span class="txt_2_product">Nouvelle paire de chaussette unisexe, <br class="add_br">pratique pour le sport</span><br>
            <div class="sock_discovery_display">
                <div>
                    <a href="" class="discovery_shoe_sock">Découvrez</a><br>
                    <div class="bottom_line_2_product_show"></div> 
                </div>
                <div>
                    <img class="img_2_product" src="images/chaussette-removebg-preview.png">
                </div>
            </div>
        </div>
    </div>
    <div class="recent_news">
        <div class="txt_recent_news">
            <div class="txt_recent_news_and_bottom_line">
                <span class="just_txt_recent_news">Ajout récent</span>
                <div class="bottom_line_recent_news"></div>
            </div>
            <div class="recent_news_txt_btn_discover">
                <div>
                    <span class="recent_news_txt">Comment transporter facilement ses affaires de voyages ?</span><br>
                </div>
                <div>
                    <span class="recent_news_title">Sac de voyage éco-responsable</span>
                </div>
                <div class="discover_btn_recent_news">
                    <a href="">
                        <span type ="button "class="btn">Découvrir</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection