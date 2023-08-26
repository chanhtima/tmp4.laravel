@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
      <!-- ======= About Section ======= -->
      <section class="abou">
       <div class="container" data-aos="fade-up">
       
          <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <div class="row g-4">
                <div class="col-12 ">
                    <img class="img-fluid " data-wow-delay="0.1s" src="{{ Module::asset("frontend:img/About/20230421083733_[fpdl 2.png") }}" >
                </div>
                
                <div class="col-6 text-end">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="{{ Module::asset("frontend:img/About/20230421083715_[fpdl 2.png") }}">
                </div>
                <div class="col-6 text-start">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ Module::asset("frontend:img/About/20230421083545_[fpdl 1.png") }}">
                </div>
            </div>
              
            </div>
            <div class="col-lg-6 col-md-12 content d-flex flex-column justify-content-center  " data-aos="fade-up" data-aos-delay="100">
              <p>   <div class="section-title">
                <h2>About</h2>
                <h3> Wynn Seger Corporation Co.,Ltd.</h3>
              </div>
                At Wynn Seger Corporation Co.,Ltd, a Contract Manufacturing Services. In the contract manufacturing part, With years of experience in providing OEMs – large and small – with contract manufacturing solutions for consumer electronics, injection-molded plastic parts, medical product, China provides custom manufacturing solutions to clients. We can manufacture built-to-order parts, custom products and offer a wide variety of options to solve your problem. We can support high volumes and short-lead times. Our in-house capabilities include electronic contract manufacturing, contract metalworking and custom injection molding, with a wide application on automotive industry, consumer electronics, industrial and consumer products, medical industry and more.
              </p>
            </div>
          </div>   
       </div>
      </section>
      <!-- About Start -->
      <section class="section-bg-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6">

                    <p class="mb-4 text-about">At Wynn Seger Corporation Co.,Ltd, a Contract Manufacturing Services. In the contract manufacturing part, With years of experience in providing OEMs – large and small – with contract manufacturing solutions for consumer electronics, injection-molded plastic parts, medical product, China provides custom manufacturing solutions to clients. We can manufacture built-to-order parts, custom products and offer a wide variety of options to solve your problem.</p>
    
                </div>
                <div class="col-md-6 ">
                  <img src="{{ Module::asset('frontend:img/About/aboutus_1.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    
      </section>
        <!-- About End -->
        <section class="abou">
          <div class="container" data-aos="fade-up">
            <div class="row g-5 align-items-center">
              <div class="col-lg-6 col-md-12 " data-aos="fade-right" data-aos-delay="100">
                <img src="{{ Module::asset('frontend:img/About/aboutus_2-1536x820.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 col-md-12  content d-flex flex-column justify-content-center " data-aos="fade-up" data-aos-delay="100">
                <p>
                  At Wynn Seger Corporation Co.,Ltd, a Contract Manufacturing Services. In the contract manufacturing part, With years of experience in providing OEMs – large and small – with contract manufacturing solutions for consumer electronics, injection-molded plastic parts, medical product, China provides custom manufacturing solutions to clients. We can manufacture built-to-order parts, custom products and offer a wide variety of options to solve your problem. We can support high volumes and short-lead times. Our in-house capabilities include electronic contract manufacturing, contract metalworking and custom injection molding, with a wide application on automotive industry, consumer electronics, industrial and consumer products, medical industry and more.
                </p>
              </div>
            </div>
          </div>
         </section>
      </main><!-- End #main -->
@endsection

 
@endsection

@section('script')


@endsection
