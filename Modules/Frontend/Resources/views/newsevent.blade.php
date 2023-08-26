@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
            <!-- ======= Blog Section ======= -->
             <!-- ======= Recent News & Activity Section ======= -->
       <section class="recent-posts  section-bg-posts">
            <div class="container">
                <div class="row title-blog">
                  <div class="col-12" >
                    <div class="section-title post ">
        
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
            <div class="container container-blog">

                <div class="row gy-5 posts-list">
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 posts-list">
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 blog-col">
                        <div class="posts-box">
                            <div class="post-img">
                                <a href="{{ url('/blogDetails') }}"  >
                                <img src="{{ Module::asset('frontend:img/About/about-1.jpg') }}" class="img-fluid img-post-lits"  >
                                
                                </a>
                            </div>
                            <div class="text-post">
                                <p class="date-text">
                                 4 May 2023
                                </p>
                                <a href="{{ url('/blogDetails') }}" class="text-head" >
                                <h3 class="text-head">Get into the Factories</h3>
                                </a>
                                <p class="text-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <a href="{{ url('/blogDetails') }}" class="btn-viwbox" >
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <div class="container" data-aos="fade-up">
         
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

        </div>

       
    </main>
@endsection

@section('script')


@endsection
