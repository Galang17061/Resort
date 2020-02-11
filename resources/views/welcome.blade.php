@extends('layouts_frontend._main_frontend')
@section('extra_style')
<style type="text/css">
  .room_col {
    margin-top: 100px;
  }
</style>
@endsection


@section('content')
@include('layouts_frontend._slider_frontend')
{{-- @include('layouts_frontend._search_frontend') --}}



    <div class="intro">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-5 intro_col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">luxury resort</div>
                                <div class="section_title"><h2>Relax in our Hotel</h2></div>
                            </div>
                            <div class="intro_text">
                                <p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="intro_link"><a href="rooms.html">View Rooms</a></div>
                            <a href="#" class="button_container intro_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-7 intro_col">
                    <div class="intro_images magic_up">
                        <!-- Image credit: https://unsplash.com/@yuni_ladyday2 -->
                        <div class="intro_1 intro_img"><img src="{{asset('assets_frontend/images/intro_1.jpg')}}" alt=""></div>
                        <!-- Image credit: https://unsplash.com/@liliane -->
                        <div class="intro_2 intro_img"><img src="{{asset('assets_frontend/images/intro_2.jpg')}}" alt=""></div>
                        <!-- Image credit: https://unsplash.com/@brucemars -->
                        <div class="intro_3 intro_img"><img src="{{asset('assets_frontend/images/intro_3.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Big Room -->

    <div class="big_room">
        <div class="container-fluid">
            <div class="row row-xl-eq-height">
                <div class="col-xl-6 order-xl-1 order-1">
                    <div class="big_room_slider_container">

                        <!-- Big Room SLider -->
                        <div class="owl-carousel owl-theme big_room_slider">

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="background_image" style="background-image:url({{ url('assets_frontend/images/home_slider_1.jpg') }})"></div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="background_image" style="background-image:url({{ url('assets_frontend/images/home_slider_1.jpg') }})"></div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <!-- Image credit: https://unsplash.com/@jbriscoe -->
                                <div class="background_image" style="background-image:url({{ url('assets_frontend/images/home_slider_1.jpg') }})"></div>
                            </div>

                        </div>

                        <div class="big_room_slider_nav_container d-flex flex-row align-items-start justify-content-start">
                            <div class="big_room_slider_prev big_room_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="big_room_slider_next big_room_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-2 order-2">
                    <div class="big_room_content">
                        <div class="big_room_content_inner magic_up">
                            <div class="section_title_container">
                                <div class="section_subtitle">luxury resort</div>
                                <div class="section_title"><h2>Rooms with private swimming pool</h2></div>
                            </div>
                            <div class="big_room_text">
                                <p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor  per inceptos himenaeos laoreet quis. Class aptent taciti soci osqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial_stars">
                                    <ul class="d-flex flex-row align-items-start justfy-content-start">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial_text">“ Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis.</div>
                                <div class="testimonial_author d-flex flex-row align-items-center justify-content-start">
                                    <div class="testimonial_author_image"><img src="{{asset('assets_frontend/images/testimonial.png')}}" alt=""></div>
                                    <div class="testimonial_author_name"><a href="#">Michael Smith</a><span>, Client</span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Room -->

    <div class="rooms">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center magic_up">
                        <div class="section_subtitle">luxury resort</div>
                        <div class="section_title"><h2>Choose a Room</h2></div>
                    </div>
                </div>
            </div>
            <div class="row room_row magic_up">
                @foreach ($data as $index => $element)
                    <div class="col-lg-4 room_col">
                        <div class="room">
                            <div class="room_image"><img src="{{asset('storage/app/'.$element->c_room_image[0]->cri_image)}}" alt="https://unsplash.com/@jonathan_percy"></div>
                            <div class="room_content text-center">
                                <div class="room_price">Rp. {{ number_format($element->cr_total,0,',','.') }} / <span>Malam</span></div>
                                <div class="room_type">{{ $element->m_type_room->tr_name }}</div>
                                <div class="room_title"><a href="rooms.html">{{ $element->cr_name }}</a></div>
                                <div class="room_text">
                                    <p>{{ $element->cr_desc_short }}</p>
                                </div>
                                <a href="{{ route('room_detail',['id'=>'1']) }}" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Gallery -->

    <div class="gallery">
      <div class="col taitel">
          <div class="section_title_container text-center magic_up">
              <div class="section_subtitle">luxury resort</div>
              <div class="section_title"><h4>Food & Beverage</h4></div>
          </div>
      </div>

        <div class="gallery_slider_container">

            <!-- Gallery Slider -->
            <div class="owl-carousel owl-theme gallery_slider magic_up">
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="{{url('assets_frontend/images/gallery_1.jpg')}}"><img src="{{asset('assets_frontend/images/gallery_1.jpg')}}" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="{{url('assets_frontend/images/gallery_2.jpg')}}"><img src="{{asset('assets_frontend/images/gallery_2.jpg')}}" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="{{url('assets_frontend/images/gallery_3.jpg')}}"><img src="{{asset('assets_frontend/images/gallery_3.jpg')}}" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="{{url('assets_frontend/images/gallery_4.jpg')}}"><img src="{{asset('assets_frontend/images/gallery_4.jpg')}}" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="{{url('assets_frontend/images/gallery_5.jpg')}}"><img src="{{asset('assets_frontend/images/gallery_5.jpg')}}" alt=""></a>
                </div>
            </div>

        </div>

        <!-- Nav -->
        <div class="gallery_slider_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col clearfix">
                        <div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
                            <div class="col-sm-4 sle">
                              <div class="gallery_slider_prev gallery_slider_nav" style="float:right"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-sm-4 text-center">
                              <a href="#" class="button_container intro_button" style="margin:0"><div class="button text-center"><span>See All</span></div></a>
                            </div>
                            <div class="col-sm-4 sle">
                              <div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@include('layouts_frontend._footer_frontend')

@endsection



@section('extra_scripts')
<script type="text/javascript">

</script>
@endsection
