@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
    
         <!-- ======= Splide Section ======= -->
         <section  class="splide splide-banner-slide " aria-label="Splide Basic HTML Example">
          <div class="splide__track splideup">
            <ul class="splide__list">
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li>
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li>
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li>
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li> 
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li>
              <li class="splide__slide"> 
                <a href="{{ url('') }}" class="" >
                  <img src="{{ Module::asset('frontend:img/Group 48095534.png') }}"class="img-fluid banner-slide" alt="">
                </a> 
              </li>
            
            </ul>
          </div>
        </section><!-- Splide Hero -->
        <main>
           <!-- Products Section -->
          <section  class="products ">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title product-d">
                <h3>OUR CATEGORY</h3>

                <div class="splide splide-products " aria-label="Splide Basic HTML Example">
                  <div class="splide__track splideup">
                    <ul class="splide__list">


                      @php($products = ['service-2-2 1.png','20230421083733_[fpdl 1.png','20230421110911_[fpdl 1.png','service-2-3 1.png','background-lab 1 (1).png'])

                      @foreach ($products as $product)
                        <li class="splide__slide"> 
                          <div class="products-box">
                            <div class="products-img">
                              <a href="{{ url('/productGroups') }}" class="" >
                                
                                <img src="{{ Module::asset("frontend:img/products/$product") }}"class="img-fluid products img-post-lits" alt="" >
                              </a>
                            </div>
                             <a href="{{ url('/products') }}" class="title-products" >
                                <h3 class="post-title">Product Title have a long text</h3>
                             </a> 
                          </div>
                          
                        </li>
                      @endforeach
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </section>
          <!-- End Products Section -->

                  <!-- About Start -->
        <section class="section-bg-about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <h3 class="mb-4 text-about"> About us</h3>
                        <p class="mb-4 text-about">At Wynn Seger Corporation Co.,Ltd, a Contract Manufacturing Services. In the contract manufacturing part, With years of experience in providing OEMs – large and small – with contract manufacturing solutions for consumer electronics, injection-molded plastic parts, medical product, China provides custom manufacturing solutions to clients. We can manufacture built-to-order parts, custom products and offer a wide variety of options to solve your problem.</p>
                 
                        <a href="{{ url('about') }}"  class="btn btn-light py-2 px-3 mt-2 btn-about" href="" >Read more 
                          <svg width="15" height="15" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.5375 20.5391C10.2854 20.287 10.1534 19.9661 10.1415 19.5766C10.1296 19.187 10.2501 18.8661 10.5031 18.6141L17.2406 11.8766H1.875C1.48542 11.8766 1.15863 11.7446 0.89463 11.4806C0.63063 11.2166 0.499088 10.8902 0.500005 10.5016C0.500005 10.112 0.632005 9.78518 0.896005 9.52118C1.16 9.25718 1.48634 9.12564 1.875 9.12656H17.2406L10.5031 2.38906C10.251 2.13698 10.1305 1.81615 10.1415 1.42656C10.1525 1.03698 10.2845 0.716145 10.5375 0.464062C10.7896 0.211979 11.1104 0.0859375 11.5 0.0859375C11.8896 0.0859375 12.2104 0.211979 12.4625 0.464062L21.5375 9.53906C21.675 9.65364 21.7726 9.7971 21.8304 9.96943C21.8881 10.1418 21.9165 10.3191 21.9156 10.5016C21.9156 10.6849 21.8872 10.8568 21.8304 11.0172C21.7735 11.1776 21.6759 11.3266 21.5375 11.4641L12.4625 20.5391C12.2104 20.7911 11.8896 20.9172 11.5 20.9172C11.1104 20.9172 10.7896 20.7911 10.5375 20.5391Z" fill="black" fill-opacity="0.87"/>
                          </svg>
                          
                          </a>
                    </div>
                    <div class="col-md-6 ">
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
                </div>
            </div>
        
        </section>
            <!-- About End -->

          <!-- ======= Recent News & Activity Section ======= -->
          <section class="recent-posts  section-bg-posts">
              <div class="container">
                  <div class="row title-blog">
                    <div class="col-12" >
                      <div class="section-title post blog">
                        <h3>News & Event</h3>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. Capitalise on low hanging fruit to identify a ballpark.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row blog-news">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                      <div class="post-title">
                       <a href="{{ url('/blogDetails') }}" class="" >
                        <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-title"  >
                        
                       </a>

                        <div class="text-post-title">
                          <p class="date-text">
                           5 May 2023
                          </p>
                          <a href="{{ url('/blogDetails') }}" class="text-title-head" >
                            
                          <h3 class="text-title-head">Get into the Factories</h3>
                           </a>
                          <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                     <div class="row blog-posts">
                      <div class="col-md-4 img-post">
                        <a href="{{ url('/blogDetails') }}" class="" >
                          <img src="{{ Module::asset('frontend:img/post/project-v-1-500x452.jpg') }}" class="img-fluid img-post-sub"  >
                        
                        </a>
        
                      </div>
                      <div class="col-md-8 text-post">
                          <p class="date-text">
                            4 May 2023
                          </p>
                           <a href="{{ url('/blogDetails') }}" class="text-title-head" >
                            
                          <h4 class="text-title-head">Get into the Factories</h4>
                           </a>
                          <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                      </div>
                     </div>
                     <div class="row blog-posts row-canter">
                      <div class="col-md-4 img-post">
                        <a href="{{ url('/blogDetails') }}" class="" >
                          <img src="{{ Module::asset('frontend:img/post/project-v-3-500x452.jpg') }}" class="img-fluid img-post-sub"  >
                        
                        </a>
                      </div>
                      <div class="col-md-8 text-post">
                          <p class="date-text">
                            3 May 2023
                          </p>
                           <a href="{{ url('/blogDetails') }}" class="text-title-head" >
              
                          <h4 class="text-title-head">Get into the Factories</h4>
                           </a>
                          <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                      </div>
                     </div>
                     <div class="row blog-posts">
                      <div class="col-md-4 img-post">
                        <a href="{{ url('/blogDetails') }}" class="" >
                          <img src="{{ Module::asset('frontend:img/post/project-v-2-500x452.jpg') }}" class="img-fluid img-post-sub"  >
                        
                        </a>
                      </div>
                      <div class="col-md-8 text-post">
                          <p class="date-text">
                            2 May 2023
                          </p>
                           <a href="{{ url('/blogDetails') }}" class="text-title-head" >
                            
                          <h4 class="text-title-head">Get into the Factories</h4>
                           </a>
                          <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                      </div>
                     </div>
               
                    </div>
                  </div>
         
               </div>
          </section>
    
         
        </main>
@endsection

@section('script')




@endsection
