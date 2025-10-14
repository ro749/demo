<!-- page preloader begin -->
<!--<div id="de-loader"></div>-->
<!-- page preloader close -->


<header class="transparent header-light header-float">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-inner" style="background-color: #ffffff;">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo" style="padding:15px 0 15px 0;>
                                <a href="index.html">
                                    <img class="logo-main" src="images/soho-r.png" alt="" >
                                    <img class="logo-scroll" src="images/soho-r.png" alt="" >
                                    <img class="logo-mobile" src="images/soho-r.png" alt="" >
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    @if(isset($asesor))
                                    <li><a class="menu-item" href="#">Asesor</a>{{ $asesor }}</li>
                                    @endif
                                    @if(isset($client))
                                    <li><a class="menu-item" href="#">Cliente</a>{{ $client }}</li>
                                    @endif
                                    @if(!empty($menu))
                                    <li class="just-phone"><a class="menu-item" href="{{ route('disponibilidad') }}">Disponibilidad</a></li>
                                    <li class="just-phone"><a class="menu-item" href="{{ route('torre') }}">Listado</a></li>
                                    <li class="just-phone"><a class="menu-item" href="{{ route('client-login') }}">Cambiar Cliente</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="de-flex-col">
                            @if(!empty($menu))
                            <a class="btn-main fx-slide w-100" href="{{ route('client-login') }}"><span>Cambiar Cliente</span></a>
                            @endif
                            <div class="menu_side_area">
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="section-hero" class="text-light no-top no-bottom relative overflow-hidden z-1000">
    <div class="abs w-100 abs-centered z-2">
        <div class="container">
            <div class="spacer-double"></div>
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-md-5">
                    <h1 class="mb-0">Elegancia y confort en un espacio moderno</h1>
                </div>
                @if(!empty($menu))
                <div class="col-lg-4">
                    <a class="btn-main btn-line bg-blur fx-slide" href="{{ route('disponibilidad') }}"><span>Disponibilidad</span></a>&nbsp;
                    <a class="btn-main btn-line bg-blur fx-slide" href="{{ route('torre') }}"><span>Listado</span></a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="vertical-center">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(images/galeria/soho_17.jpg)">
                    <div class="sw-overlay op-4"></div>
                </div>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(images/galeria/soho_7.jpg)">
                    <div class="sw-overlay op-4"></div>
                </div>
            </div>
          </div>
          
        </div>
    </div>
</section>