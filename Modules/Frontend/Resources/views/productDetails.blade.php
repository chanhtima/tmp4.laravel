@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
      <div class="breadcrumbs d-flex align-items-center" >
        <div class="container position-relative d-flex flex-column align-items-center">
          <ol>
            <li><a href="{{ url('/') }}" class="breadcrumbsl" >
              
               Home</a></li>
            <li><a href="{{ url('/') }}" class="breadcrumbsl" >Products</a></li>

          </ol>
          <h2>Data, Voice and Video Components</h2>
        </div>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
    

            <div class="container">
    
            <div class="row gy-4  justify-center align-items-center">
        
                    <div class="col-lg-6">
                      <div class="splide productDetails" aria-label="Basic Structure Example">
                        <div class="splide__track">
                          <ul class="splide__list">
                            <li class="splide__slide"> <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}"class="img-fluid  img-post-title" alt=""></li>
                            <li class="splide__slide"> <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}"class="img-fluid  img-post-title" alt=""></li>
                            <li class="splide__slide"> <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}"class="img-fluid  img-post-title" alt=""></li>
                          </ul>
                        </div>
                      </div>
   
                     
                    </div>
        
                    <div class="col-lg-6">
                        <div class="portfolio-info">
                            <h3>Data, Voice and Video Components</h3>
                            <ul>
                            <li><span class="product-dateils">Category </span> : ELECTRONICS AND BATTERIES</li>
                            <li><span class="product-dateils">Client </span>: ASU Company</li>
                            <li><span class="product-dateils">Product date </span>: 01 March, 2020</li>
                            
                            </ul>
                        </div>
                        <div class="portfolio-description">
                                <h2>Data, Voice and Video Components</h2>
                                <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                                </p>
                        </div>
                    </div>
    
            </div>
    
            </div>
        </section><!-- End Portfolio Details Section -->
    </main>
@endsection

@section('script')
 <script>
  splideFull(".productDetails", {
    arrows: true,
    pagination:false,
   
    breakpoints: {
      991: {
        
      },
    },
  }) 
 </script>
@endsection
