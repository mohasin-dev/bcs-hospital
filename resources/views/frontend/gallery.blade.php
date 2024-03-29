@extends('frontend.layouts.app')

@section('title', 'Photo Gallery')

@section('content')
<section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Gallery</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Gallery</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== BEGIN GALLERY SECTION ================-->
      <section id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="gallery-area">
                <!-- Start First Image Album  -->
                <div class="my-simple-gallery">
                  <div class="section-heading">
                    <h2>Album Of 2019</h2>
                    <div class="line"></div>
                  </div>
                  <div class="row">
                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-1.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-1.jpg') }}" itemprop="thumbnail" alt="Image description" />
                         <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption  1</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-2.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-2.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 2</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-3.jpg') }}" itemprop="contentUrl" data-size="1024x683">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-3.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 3</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-4.jpg') }}" itemprop="contentUrl" data-size="1024x768">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-4.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                    </a>
                      <figcaption itemprop="caption description">Image caption 4</figcaption>
                    </figure>
                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-5.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-5.jpg') }}" itemprop="thumbnail" alt="Image description" />
                         <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption  5</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-4.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-4.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 6</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-2.jpg') }}" itemprop="contentUrl" data-size="1024x683">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-2.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 7</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-1.jpg') }}" itemprop="contentUrl" data-size="1024x768">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-1.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                    </a>
                      <figcaption itemprop="caption description">Image caption 8</figcaption>
                    </figure>
                  </div>
                </div>
                <!-- End First Image Album  -->

                <!-- Start Second Image Album  -->
                <div class="my-simple-gallery">
                  <div class="section-heading">
                    <h2>Album Of 2018</h2>
                    <div class="line"></div>
                  </div>
                  <div class="row">
                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-1.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-1.jpg') }}" itemprop="thumbnail" alt="Image description" />
                         <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption  1</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-2.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-2.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 2</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-3.jpg') }}" itemprop="contentUrl" data-size="1024x683">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-3.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 3</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-4.jpg') }}" itemprop="contentUrl" data-size="1024x768">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-4.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                    </a>
                      <figcaption itemprop="caption description">Image caption 4</figcaption>
                    </figure>
                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-5.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-5.jpg') }}" itemprop="thumbnail" alt="Image description" />
                         <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption  5</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-4.jpg') }}" itemprop="contentUrl" data-size="1024x1024">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-4.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 6</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-2.jpg') }}" itemprop="contentUrl" data-size="1024x683">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-2.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                      </a>
                      <figcaption itemprop="caption description">Image caption 7</figcaption>
                    </figure>

                    <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <a class="gallery-iteam" href="{{ asset('assets/frontend/images/gallery/gallery-large-1.jpg') }}" itemprop="contentUrl" data-size="1024x768">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-small-1.jpg') }}" itemprop="thumbnail" alt="Image description" />
                        <span class="image-effect"></span>
                    </a>
                      <figcaption itemprop="caption description">Image caption 8</figcaption>
                    </figure>
                  </div>
                </div>
                <!-- End Second Image Album  -->

                <!-- This Section only for Lightbox view -->
                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                  <!-- Background of PhotoSwipe.
                       It's a separate element, as animating opacity is faster than rgba(). -->
                  <div class="pswp__bg"></div>

                  <!-- Slides wrapper with overflow:hidden. -->
                  <div class="pswp__scroll-wrap">

                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>

                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">

                          <!--  Controls are self-explanatory. Order can be changed. -->

                          <div class="pswp__counter"></div>

                          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                          <button class="pswp__button pswp__button--share" title="Share"></button>

                          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                          <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                          <!-- element will get class pswp__preloader--active when preloader is running -->
                          <div class="pswp__preloader">
                              <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                  <div class="pswp__preloader__donut"></div>
                                </div>
                              </div>
                          </div>
                      </div>

                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                          <div class="pswp__share-tooltip"></div>
                      </div>

                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                      </button>

                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                      </button>

                      <div class="pswp__caption">
                          <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== END GALLERY SECTION ================-->
@endsection
