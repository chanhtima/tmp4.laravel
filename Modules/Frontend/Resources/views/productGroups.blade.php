@extends('frontend::layouts.master')
@section('title')

@section('style')
    <style>
        @media only screen and (max-width: 1400px) and (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1180px;
            }
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="banner-img">
            <img src="{{ Module::asset('frontend:img/products/hero_inner_page.jpg') }}"class="img-fluid banner-product" alt="">
        </div>
        
        <div class="menu-products-mobile ">
            <a type="button" class="toggle-cat flex items-center" id="sidebarCollapse">
                <span>All Category </span>
                <h4 class="mb-0 mt-2 ms-2">
                  <i class="bi bi-filter"></i>
                </h4>
            </a>
        </div>

        <!-- ======= Recent News & Activity Section ======= -->
        <section class="recent-posts  section-bg-posts">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4">

                        <div class="menu-products">
                          <div class="flex items-center justify-between w-full">
                              <h2 class="title-product-all">หมวดหมู่สินค้า</h2>
                              <svg width="28" class="cclloossee toggle-cat" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 0C6.2 0 0 6.2 0 14C0 21.8 6.2 28 14 28C21.8 28 28 21.8 28 14C28 6.2 21.8 0 14 0ZM19.4 21L14 15.6L8.6 21L7 19.4L12.4 14L7 8.6L8.6 7L14 12.4L19.4 7L21 8.6L15.6 14L21 19.4L19.4 21Z" fill="black"/>
                              </svg>
                          </div>
                          @php
                              $categories = ['Category 1','Category 2','Category 3']
                          @endphp

                          <div class="category-container w-full">
                              <div class="accordion service-accordion" id="ServiceAccordionNx">
                                @foreach ($categories as $index => $category)
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="serviceHeadNx-{{$index}}">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serviceDetailNx-{{$index}}" aria-expanded="false" aria-controls="serviceDetailNx-{{$index}}">{{$category}}
                                          </button>
                                      </h2>
                                      <div class="accordion-collapse collapse" id="serviceDetailNx-{{$index}}" aria-labelledby="serviceHeadNx-{{$index}}" data-bs-parent="#ServiceAccordionNx">
                                          <div class="accordion-body">
                                              <div class="accordion-wrapper">
                                                  <div class="accordion service-accordion sub-accordion" id="lv1AccordionNxL{{$index}}">
                                                      @for ($subIndexLv1 = 0; $subIndexLv1 < 3; $subIndexLv1++)
                                                        <div class="accordion-item sub-acc">
                                                          <h2 class="accordion-header" id="lv1Head-{{$index}}-nod-{{$subIndexLv1}}">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lv1Detail-{{$index}}-nod-{{$subIndexLv1}}" aria-expanded="false" aria-controls="lv1Detail-{{$index}}-nod-{{$subIndexLv1}}">{{$category}} Sub Lv1
                                                              </button>
                                                          </h2>
                                                          <div class="accordion-collapse collapse" id="lv1Detail-{{$index}}-nod-{{$subIndexLv1}}" aria-labelledby="lv1Head-{{$index}}-nod-{{$subIndexLv1}}" data-bs-parent="#lv1AccordionNxL{{$index}}">
                                                              <div class="accordion-body">

                                                                <div class="accordion-wrapper">
                                                                  <div class="accordion service-accordion sub-accordion" id="lv2AccordionNxL{{$index}}-in-{{$subIndexLv1}}">
                                                                      @for ($subIndexLv2 = 0; $subIndexLv2 < 3; $subIndexLv2++)
                                                                        <div class="accordion-item sub-acc">
                                                                          <h2 class="accordion-header" id="lv2Head-{{$index}}-nod-{{$subIndexLv2}}">
                                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lv2Detail-{{$index}}-nod-{{$subIndexLv2}}" aria-expanded="false" aria-controls="lv2Detail-{{$index}}-nod-{{$subIndexLv2}}">{{$category}} Sub Lv2
                                                                              </button>
                                                                          </h2>
                                                                          <div class="accordion-collapse collapse" id="lv2Detail-{{$index}}-nod-{{$subIndexLv2}}" aria-labelledby="lv2Head-{{$index}}-nod-{{$subIndexLv2}}" data-bs-parent="#lv2AccordionNxL{{$index}}-in-{{$subIndexLv1}}">
                                                                              <div class="accordion-body">
                                                                                  
                                                                                <div class="accordion-wrapper">
                                                                                  <div class="accordion service-accordion sub-accordion" id="lv3AccordionNxL{{$index}}-in-{{$subIndexLv1}}">
                                                                                      @for ($subIndexLv3 = 0; $subIndexLv3 < 3; $subIndexLv3++)
                                                                                        <div class="accordion-item sub-acc">
                                                                                          <h2 class="accordion-header" id="lv3Head-{{$index}}-nod-{{$subIndexLv3}}">
                                                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lv3Detail-{{$index}}-nod-{{$subIndexLv3}}" aria-expanded="false" aria-controls="lv3Detail-{{$index}}-nod-{{$subIndexLv3}}">{{$category}} Sub Lv3
                                                                                              </button>
                                                                                          </h2>
                                                                                          <div class="accordion-collapse collapse" id="lv3Detail-{{$index}}-nod-{{$subIndexLv3}}" aria-labelledby="lv3Head-{{$index}}-nod-{{$subIndexLv3}}" data-bs-parent="#lv3AccordionNxL{{$index}}-in-{{$subIndexLv2}}">
                                                                                              <div class="accordion-body">

                                                                                                  @for ($last = 0; $last < 6; $last++)
                                                                                                    <div class="text-base full-url mb-1 hover:text-1st ps-3">Item {{$last}} (Lv4)
                                                                                                        <a href="{{ url('#') }}"></a>
                                                                                                    </div>
                                                                                                  @endfor
     
                                                                                              </div>
                                                                                          </div>
                                                                                        </div>
                                                                                      @endfor
                                                                                  </div>
                                                                                </div>
                                                                              
                                                                              </div>
                                                                          </div>
                                                                        </div>
                                                                      @endfor
                                                                  </div>
                                                                </div>

                                                              </div>
                                                          </div>
                                                        </div>
                                                      @endfor
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                @endforeach
                              </div>
                          </div>

                        </div>

                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row gy-5 posts-list " id="sub-title-product">
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 blog-col">
                                <div class="posts-box">
                                    <div class="post-img">
                                        <a href="{{ url('/productDetails') }}">
                                            <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits">

                                        </a>
                                    </div>
                                    <div class="text-post">

                                        <a href="{{ url('/productDetails') }}" class="text-head">
                                            <h3 class="text-head">Product Title</h3>
                                        </a>
                                        <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center" data-aos="fade-up">
                            <a href="{{ url('/') }}" class="btn btn-light py-2 px-3 mt-2 btn-load" href="">Load More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <div class="backdrop"></div>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.toggle-cat , .backdrop').on('click', function() {
                $('.menu-products').toggleClass('active');
                $('.backdrop').toggleClass('active');
            });
        });
        $(document).ready(function() {
            $('#sidebarCollapsex').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
        
    </script>


@endsection
