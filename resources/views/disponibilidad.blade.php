<!DOCTYPE html>
<html lang="zxx">

@include('head')

<body>

    <div id="wrapper">

        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>
        
        @include('header')

                                    <section style="background-color:#fef5e6;" class="  relative no-top no-bottom overflow-hidden">
                                        <div class="container-fluid position-relative half-fluid">

                                          <div class="container">

                                            <div class="row gx-5">
                                              <!-- Image -->
                                              <div class="col-lg-6 position-lg-absolute left-half h-100 overflow-hidden">
                                                <div class="image" data-bgimage="url(images/poi.jpg) center"></div>
                                              </div>
                                              <!-- Text -->
                                              <div class="col-lg-6 offset-lg-6 relative z-3">
                                                
                                                <div class="col-lg-12"> 
                                                    <div class="ps-lg-3">
                                                        <br><br><br>
                                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                                            VIVE MÁS ALLA DE TU DEPARTAMENTO
                                                        </h2>
                                                        <p class="wow fadeInUp" data-wow-delay=".6s">
                                                            Descubre una nueva forma de vivir en SOHO, ubicado en Boreales, Zapopan, Jalisco, donde cada detalle ha sido pensado para ofrecerte comodidad, estilo y funcionalidad. Además de modernos departamentos, tendrás acceso a una exclusiva zona comercial y amenidades diseñadas para tu bienestar.
                                                        </p>
                                                        <br>
                                                        <p class="wow fadeInUp" data-wow-delay=".6s">
                                                            Aquí, tu hogar se conecta con todo lo que te hace sentir bien.
                                                        </p>
                                                       <br><br><br>
                                                    </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </section>  
                @if(isset($imp))
                    <div id="image-map-pro"></div>
                @else
                    <img src="https://propstudios.mx/img/Soho/Ubicaciones/Torre/{{ $unit->unit }}.jpg">
                @endif
                            
                            
        
                <section id="unit-info" class="bg-dark section-dark text-light" 
                @if(empty($unit))
                style="display: none;"
                @endif
                >
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-4">
                                <div class="pe-lg-3">
                                    <h1 class="wow fadeInUp" data-wow-delay=".4s"><x-f-text id="unit" :unit="$unit"></x-f-text></h1>
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Modelo</div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><x-f-text id="modelo" :unit="$unit"></x-f-text></h2>
                                    <div class="d-flex justify-content-left align-items-left">
                                         <img src="images/svg/size.svg" class="w-30px me-3" alt=""><div class=""><x-f-text id="m2" :unit="$unit"></x-f-text> m²</div>
                                    </div><br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s" style="margin-bottom: 1rem !important;">Un modelo de departamento que evoca armonía y serenidad, perfecto para aquellos que buscan un hogar tranquilo y equilibrado, inspirado en la belleza minimalista.</p>
                                    
                                    <div id="characteristics" class="relative overflow-hidden">
                                    @include('listing-utils::characteristics',[
                                        'icons_path'=>'https://propstudios.mx/img/Soho/Iconos/',
                                        'icons_ext'=>'.png'
                                    ])
                                    </div>
                                                                
                            <br>
                                                                
                                                                
                                </div>
                            </div>
                            
                                             
                            <div class="col-lg-8">
                                <div class="owl-carousel owl-theme owl-single-dots">
                                    <x-f-image :unit="$unit" id="iso" data="modelo" src="https://propstudios.mx/img/Soho/Modelos/ISO/" ext=".png" class="w-100 wow fadeInUp" data-wow-delay=".2s" alt=""></x-f-image>
                                    <x-f-image :unit="$unit" id="planta" data="modelo" src="https://propstudios.mx/img/Soho/Modelos/Planta/" ext=".png" class="w-100 wow fadeInUp" data-wow-delay=".2s" alt=""></x-f-image>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-double"></div>
                    </div>
                    @include('listing-utils::Plans.plans',['plans'=>$plans])
                    @if(isset($sender))
                    @include('listing-utils::Sender.sender-buttons',['sender'=>$sender])
                    @endif
                </section>
                

        <section id="section-gallery" class="bg-color-op-1">
            <div class="container">
              <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Galería</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Interior y Exterior</h2>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-12 text-center">
                      <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">Ver Todo</a></li>
                          <li><a href="#" data-filter=".exterior">Exterior</a></li>
                          <li><a href="#" data-filter=".interior">Amenidades</a></li>
                          <li><a href="#" data-filter=".facilities">Departamentos</a><li>
                      </ul>
                  </div>
              </div>

              <div id="gallery" class="row g-3 wow fadeInUp" data-wow-delay=".3s">

                <div class="col-md-4 col-sm-6 col-12 item exterior">
                    <a href="images/galeria/soho_6.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_6.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_14.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_14.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_15.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_15.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_17.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_17.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_12.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_12.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_8.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_8.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_10.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_10.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_7.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_7.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_16.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_16.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_21.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_21.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_20.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_20.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_4.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_4.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    
                    
                    
                    </a>
                </div>

              </div>


            </div>
            
           
        </section>
        
                    <section class="bg-dark section-dark text-light  relative no-top no-bottom overflow-hidden">
                        <div class="container-fluid position-relative half-fluid">

                          <div class="container">

                            <div class="row gx-5">
                              <!-- Image -->
                              <div class="col-lg-6 position-lg-absolute left-half h-100 overflow-hidden">
                                <div class="image" data-bgimage="url(images/poi.jpg) center"></div>
                              </div>
                              <!-- Text -->
                              <div class="col-lg-6 offset-lg-6 relative z-3">
                                    <div class="ms-lg-5 ps-lg-5 py-5 my-5">
                             
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Puntos de Interés</h2>
                                
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="fs-500 text-light">
            
                                                <p>OXXO <b style="font-size:30px;">1 Min.</b></p>
                                                <p>Bodega Aurrera <b style="font-size:30px;">3 Min.</b></p>
                                                <p>Walmart <b style="font-size:30px;">6 Min.</b></p>
                                                <p>Periférico G. M. <b style="font-size:30px;">6 Min.</b></p>
                                                <p>Cucea <b style="font-size:30px;">8 Min.</b></p>
                                                <p>Plaza San Isidro <b style="font-size:30px;">8 Min.</b></p>
                                                <p>Plaza Gran Terraza Belenes <b style="font-size:30px;">12 Min.</b></p>
                                                <p>Auditorio Telmex <b style="font-size:30px;">15 Min.</b></p>
                                                <p>Andares <b style="font-size:30px;">20 Min.</b></p>
                                            </ul>
                                        </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>   

        
        @if(isset($asesor_area))
        @include('asesor-area')
        @endif
    </div>

    <!-- footer begin -->
    <footer class="section-dark">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <img src="https://propstudios.mx/img/Propstudiosw.png" class="w-200px" alt="">
                        <div class="spacer-single"></div>
                    </div>
                </div>                
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_phone" style="height: auto; "></i>
                        <h4 class="mb-0">Llámanos</h4>      
                    </div>
                    <p style="text-align: center">33 1883 9992</p>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_clock" style="height: auto; "></i>
                        <h4 class="mb-0">Horario</h4>      
                    </div>
                    <p style="text-align: center">Lunes a Viernes 10:00 am - 6:00 pm</p>
                </div>
                    
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_mail" style="height: auto; "></i>
                        <h4 class="mb-0">Email</h4>      
                    </div>
                    <p style="text-align: center">ikhnaton@propstudios.com</p>
                </div>              
            </div>

        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align:center;">
                        <a href="https://propstudios.mx/">Sistema Desarrollado por PropStudios</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@push('scripts')
<script>
    window.addEventListener('resize', function() {
        $('body').css({
          width: '100%',
          height: '100%'
        });
    });
</script>
@endpush
@include('scripts')
</body>

</html>
