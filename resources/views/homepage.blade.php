<x-layout>
    
    <!-- Section 1 -->
    
    <section class="container-fluid">
        <div class="row">
            <!-- Carousel -->
            <div class="col-12 col-md-4">                    
                <div class="main-slider mt-2">
                    <input checked="checked" id="box1" name="ani" type="radio">
                    <label for="box1"><img class="p-2" src="{{asset('images and logo/Makemake 1.png')}}" alt="Space city" width="100"></label>
                    <img class="img_carousel" src="{{asset('images and logo/Makemake 1.png')}}" alt="Space city">
                    
                    <input id="box2" name="ani" type="radio">
                    <label for="box2"><img class="p-2" src="{{asset('images and logo/Makemake 2.png')}}" alt="Space city" width="100"></label>
                    <img class="img_carousel" src="{{asset('images and logo/Makemake 2.png')}}" alt="Space city">
                    
                    <input id="box3" name="ani" type="radio">
                    <label for="box3"><img class="p-2" src="{{asset('images and logo/Makemake 3.png')}}" alt="Space city" width="100"></label>
                    <img class="img_carousel" src="{{asset('images and logo/Makemake 3.png')}}" alt="Space city">

                    <a class="link_btn_share" href="https://www.instagram.com/" target="_self" rel="noopener noreferrer"><button type="button" class="btn_share mt-3 text-danger">              
                        <span class="btn_share_text">Condividi</span>
                        <span><i class="fas fa-share-alt mx-2 fs-4 mt-1"></i></span></button>
                    </a> 
                </div>                    
            </div>
            <!-- Description(spaceship) -->
            <article class="col-12 col-md-4 mt-2">
                <div class="row ">
                    <div class="col-12 ms-1">
                        <h6 class="text-uh6percase accents_color2">Volo interplanetare per</h6>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 ms-1">
                        <h1>Makemake (FY9)</h1>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex makemake_characteristics">
                            <img class="mt-1 mx-2" src="{{asset('images and logo/planet icon.png')}}" alt="Planet icon" width="25px" height="16px">
                            <p class="medium_grey_color">9 click di distanza</p>
                        </div>
                        <div class="col-6 d-flex">
                            <img class="icons_decription mx-2" src="{{asset('images and logo/clock icon.png')}}" alt="Clock icon">
                            <p class="medium_grey_color">12 ore di viaggio</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 ms-1">
                        <p class="soft_black_color">Perla del divertimento del sistema solare A41 in cui passare una vacanza di più giorni con itinerari per turisti spaziali occasionali o amanti dell’esplorazione. <a class="text-danger" href="/more" target="_blank" rel="noopener noreferrer">Scopri di più</a></p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 ms-1">
                        <h6 class="text-uh6percase accents_color2">Devi sapere</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex border_bottom_lines container_details_icons">
                            <img class="icons_decription mx-2" src="{{asset('images and logo/Gravity.png')}}" alt="Earth icon">
                            <b>Gravità:</b>
                            <p class="mx-1 soft_black_color">1.2ATM</p>
                        </div>
                        <div class="col-6 d-flex border_bottom_lines">
                            <i class="fas fa-comment-dots fs-4 mx-2 light_grey_color"></i>
                            <b>Lingua:</b>
                            <p class="mx-1 soft_black_color">Morxiano</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex border_bottom_lines container_details_icons">
                            <img class="icons_decription mx-2" src="{{asset('images and logo/Oxigen.png')}}" alt="Oxigen icon">
                            <b>Ossigeno:</b>
                            <p class="mx-1 soft_black_color">24.5%</p>
                        </div>
                        <div class="col-6 d-flex border_bottom_lines">
                            <img class="icons_decription mx-2" src="{{asset('images and logo/Gear.png')}}" alt="Gear icon">
                            <b>Rotazione:</b>
                            <p class="mx-1 soft_black_color">19h</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex container_details_icons">
                            <img class="icons_decription mx-2" src="{{asset('images and logo/Crown.png')}}" alt="Crown icon">
                            <b>Delegato:</b>
                            <a class="mx-1 text-danger" href="/deputy" target="_blank" rel="noopener noreferrer">Portman Jr</a>
                        </div>
                        <div class="col-6 d-flex">
                            <i class="fas fa-child mx-2 fs-2 light_grey_color mb-auto"></i>
                            <b>Popolazione:</b>
                            <p class="mx-1 soft_black_color">14M</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 ms-1">
                        <h6 class="text-uh6percase accents_color2">Mezzo spaziale</h6>
                    </div>
                </div>
                <div class="row mt-2 container_spaceship">
                    <div class="col-6 ms-1">
                        <div class="row mt-4 mb-4">
                            <div class="col-12">
                                <h3 class="mx-2">iJet 10 (2044)</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex content_spaceship">
                                <img class="mt-1 mx-2" src="{{asset('images and logo/Places.png')}}" alt="Places icon" width="23px" height="15px">
                                <p class="deep_grey_color">190 posti</p>
                            </div>
                            <div class="col-12 col-md-6 d-flex content_spaceship">
                                <img class="mt-1 mx-2" src="{{asset('images and logo/Joystick.png')}}" alt="Joystick" width="23px" height="16px">
                                <p class="deep_grey_color">2 casinò</p>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-12 col-md-6 d-flex content_spaceship">
                                <i class="fas fa-pizza-slice fs-5 mx-2 light_grey_color icons_decription"></i>
                                <p class="deep_grey_color">4 ristoranti</p>
                            </div>
                            <div class="col-12 col-md-6 d-flex content_spaceship">
                                <i class="fas fa-rocket fs-5 mx-2 light_grey_color icons_decription"></i>
                                <p class="deep_grey_color">Gravità1ATM</p>
                            </div>                               
                        </div>                            
                    </div>
                    <div class="col-4 d-flex mx-1 mt-2">
                        <img class="img_spaceship" src="{{asset('images and logo/spaceship_10_by_phoenixrisingstock_de2d9yh-fullview 1.png')}}" alt="Spaceship" width="250px" height="140px">
                    </div>                        
                </div>
                
            </article>
            <!-- Accordion and Pros from buying -->
            <div class="col-12 col-md-4 mt-3">
                <div class="row ">
                    <div class="col-12">
                        <div class="accordion">
                            <div>
                                <h3 class="text-light text-center mt-4 mb-4">Acquista biglietto</h3>
                            </div>
                            <div class="dropdown mx-auto">
                                <p class="secondary_color3 mb-auto">Data di partenza</p>
                                <input type="checkbox" name="custom_accordion" id="data_partenza" class="accordion__input">
                                <label for="data_partenza" class="accordion__label">12° Luna Estiva</label>
                                <div class="accordion_content text-center">
                                    <p>14° Luna invernale</p>
                                </div>
                            </div>
                            <div class="dropdown mx-auto">
                                <p class="secondary_color3 mb-auto mt-4">Classe</p>
                                <input type="checkbox" name="custom_accordion" id="classe" class="accordion__input">
                                <label for="classe" class="accordion__label">Spaziale</label>
                                <div class="accordion_content text-center">
                                    <p>Ranger</p>
                                </div>
                            </div>
                            <div class="dropdown mx-auto">
                                <p class="secondary_color3 mb-auto mt-4">Numero di posti</p>
                                <input type="checkbox" name="custom_accordion" id="numero_posti" class="accordion__input">
                                <label for="numero_posti" class="accordion__label">2 posti</label>
                                <div class="accordion_content text-center">
                                    <p>4 posti</p>
                                </div>
                            </div>
                            <a class="link_btn_accordion" href="/cart" target="_self" rel="noopener noreferrer"><button type="button" class="btn_accordion mt-5 text-light">              
                                <span class="btn_accordion_text">920 crediti - Aquista</span>
                                <span><i class="fas fa-shopping-cart fs-4 mt-1 mx-3"></i></span></button>
                            </a>                               
                        </div>
                        <div class="row">
                            <div class="col-12 pros_container mt-4">
                                <div class="text-center mt-2">
                                    <p>Ottimo acquisto perchè</p>
                                </div>   
                                <div class="d-flex pros_content align-items-center border_bottom_lines">
                                    <i class="fas fa-check-circle text-success margin_icons_pros size_icons_pros"></i>
                                    <b class="margin_icons_pros">Rimborso:</b>
                                    <p class="mt-3 soft_black_color ">Fino a 2 lune prima</p>
                                </div>
                                <div class="d-flex pros_content align-items-center border_bottom_lines">
                                    <i class="fas fa-check-circle text-success margin_icons_pros size_icons_pros"></i>
                                    <b class="margin_icons_pros">50% Rimborso:</b>
                                    <p class="mt-3 soft_black_color">entro 24h</p>
                                </div>                                   
                                <div class="d-flex pros_content align-items-center">
                                    <i class="fas fa-check-circle text-success margin_icons_pros size_icons_pros"></i>
                                    <b class="margin_icons_pros">Posti:</b>
                                    <p class="mt-3 soft_black_color">non nominali</p>
                                </div>         
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>
    
    <!-- Section 2 -->
    
    <section class="container-fluid section_2_container pb-5">
        <!-- Reviews -->
        <article class="row">
            <div class="col-12 mt-5">
                <h3 class="reviews_h3">4 Recenzioni</h3>
            </div>
            <div class="row">               
                <div class="col-12 col-md-3 mt-4">
                    <div class="row text-warning stars_reviews">
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star-half-alt"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                    </div>
                    <h5 class="name_reviews">Andrew Bellixxo</h5>
                    <p class="details_reviews">Esperienza di viaggio divertente e Make make è un posto veramente “spaziale”.</p>
                    <p class="trans_reviews">Tradotto dal Kronos</p>
                </div>
                <div class="col-12 col-md-3 mt-4">
                    <div class="row text-warning stars_reviews ">
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                    </div>
                    <h5 class="name_reviews">Simona Muscojar</h5>
                    <p class="details_reviews">Viaggio comodo ma non piacevole quando vicino la costellazione Corgh il pilota ha pres...</p>
                    <p class="trans_reviews">Tradotto dal Frumestiano</p>
                </div>
                <div class="col-12 col-md-3 mt-4">
                    <div class="row text-warning stars_reviews ">
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                    </div>                    
                    <h5 class="name_reviews">Xenia Theperzis</h5>
                    <p class="details_reviews">Ottimo caffè a bordo e musica d’atmosfera, quasi di un altro pianeta. Consigliatissimo!1!!</p>
                    <p class="trans_reviews">Tradotto dal Frumestiano</p>                   
                </div>
                <div class="col-12 col-md-3 mt-4">
                    <div class="row text-warning stars_reviews ">
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="fas fa-star"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                        <div class="col-2"><i class="far fa-star"></i></div>
                    </div>
                    <h5 class="name_reviews">Alexander Gajjo</h5>
                    <p class="details_reviews">Non è stata un’esperienza piacevole anche se Makemake merita il viaggio!</p>
                    <p class="trans_reviews">Tradotto dal Romanaccio</p>
                </div>
            </div>
        </article>
        <!-- Other destinations -->
        <div class="row">
            <div class="col-12">
                <h3 class="other_dest_h3">Altre destinazioni</h3>
            </div>           
            <div class="col-12 col-md-4 mt-4 cards_destinations mx-auto text-light">
                
                <div class="row">
                    <div class="col-12 mt-3">
                        <h4>Pacillyum (A74-bis)</h4>
                    </div>
                </div>
                <div class="col-12 d-flex mt-2">
                    <img class="mt-1 mx-2" src="{{asset('images and logo/Planet white version.png')}}" alt="Planet icon" width="25px" height="16px">
                    <p>9 click di distanza</p>
                </div>
                <div class="col-12 d-flex">
                    <img class="icons_decription mx-2" src="{{asset('images and logo/Clock white version.png')}}" alt="Clock icon">
                    <p>12 ore di viaggio</p>
                </div>
                <div class="col-12 d-flex">
                    <i class="fas fa-money-bill fs-5 mx-2 mt-1"></i>
                    <p>A partire da 480 crediti</p>
                </div>
            </div>

            <div class="col-12 col-md-4 mt-4 cards_destinations mx-auto text-light">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h4>Momo Star (MMs)</h4>
                    </div>
                </div>
                <div class="col-12 d-flex mt-2">
                    <img class="mt-1 mx-2" src="{{asset('images and logo/Planet white version.png')}}" alt="Planet icon" width="25px" height="16px">
                    <p>9 click di distanza</p>
                </div>
                <div class="col-12 d-flex">
                    <img class="icons_decription mx-2" src="{{asset('images and logo/Clock white version.png')}}" alt="Clock icon">
                    <p>12 ore di viaggio</p>
                </div>
                <div class="col-12 d-flex">
                    <i class="fas fa-money-bill fs-5 mx-2 mt-1"></i>
                    <p>A partire da 480 crediti</p>
                </div>
            </div>

            <div class="col-12 col-md-4 mt-4 cards_destinations mx-auto text-light">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h4>Cretox  (CRX)</h4>
                    </div>
                </div>
                <div class="col-12 d-flex mt-2">
                    <img class="mt-1 mx-2" src="{{asset('images and logo/Planet white version.png')}}" alt="Planet icon" width="25px" height="16px">
                    <p>9 click di distanza</p>
                </div>
                <div class="col-12 d-flex">
                    <img class="icons_decription mx-2" src="{{asset('images and logo/Clock white version.png')}}" alt="Clock icon">
                    <p>12 ore di viaggio</p>
                </div>
                <div class="col-12 d-flex">
                    <i class="fas fa-money-bill fs-5 mx-2 mt-1"></i>
                    <p>A partire da 480 crediti</p>
                </div>
            </div>
        </div>
    </section>

   
</x-layout>