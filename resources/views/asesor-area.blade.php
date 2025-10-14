<section id="contact" class="relative">
   <div class="container relative z-2">
     <div class="row g-4 justify-content-center">                    
       <div class="col-lg-6 text-center">
           <h2 class="wow fadeInUp" data-wow-delay=".2s">Tu Asesor</h2>
       </div>
     </div>
     <div class="row g-4 gx-5">
           <div class="col-md-4">
               <div class="text-center">
                   
               </div>
           </div>
           <div class="col-md-4">
               <div class="text-center">
                   <img src="
                   @if(!empty($asesor_area->pfp))
                   {{ asset('storage/uploads/' . $asesor_area->pfp) }}
                   @else
                   https://propstudios.mx/img/default_user.jpeg
                   @endif
                   " class="w-60 circle" alt="">
                   <div class="mt-3">
                       <h4 class="mb-0">{{ $asesor_area->name }}</h4>
                       <div class="fw-500 id-color">{{ $asesor_area->phone }}</div>
                       <div class="fw-500 id-color"><a href="mailto:{{ $asesor_area->mail }}">{{ $asesor_area->mail }}</a></div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="text-center">
                   
               </div>
           </div>
     </div>
   </div>
</section>