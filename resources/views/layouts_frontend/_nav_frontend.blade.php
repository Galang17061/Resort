 <header class="header">
        <div class="header_content">

            <!-- Logo -->
            <div class="logo_container d-flex flex-column align-items-center justify-content-center">
                <div class="logo">
                    <a href="#" class="text-center">
                        <div class="logo_subtitle">hotel</div>
                        <div class="logo_title">Samira</div>
                        <div class="logo_stars">
                            <ul class="d-flex flex-row align-items-start justfy-content-start">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav" @if(Request::is('room_detail/*')) style="display:none"@endif>
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li class="active"><a href="{{ url('/') }}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
                                    <li><a href="about.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
                                    <li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>rooms</span></div></a></li>
                                    <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>news</span></div></a></li>
                                    <li><a href="contact.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>contact</span></div></a></li>
                                </ul>
                            </nav>
                            @if (Auth::user() != null)
                              <a href="{{ route('home') }}" class="button_container header_button ml-auto"><div class="button text-center lgn"><span>Dashboard</span></div></a>
                            @else
                              <a href="{{ route('login') }}" class="button_container header_button ml-auto"><div class="button text-center lgn"><span>Login</span></div></a>
                            @endif
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <div class="crt">
                              <a href="#" class="pancing">
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-chevron-down chvr"></i>
                              </a>
                              <div class="cartcont">
                                <div class="row secone">
                                  <div class="img-fluid kiwo citr">
                                    <img class="minni" src="{{asset('assets_frontend/images/intro_1.jpg')}}">
                                  </div>
                                  <div class="kiwo">
                                    <span class="judul">Hotel California</span>
                                    <div class="detel">
                                      <h5 class="detel1">Capacity</h5>
                                      <span class="detel2">2 Adults & 2 children</span>
                                    </div>
                                    <div class="detel">
                                      <h5 class="detel1">Price</h5>
                                      <span class="detel2">Rp. 5.000.000,00</span>
                                    </div>
                                    <div class="detel">
                                      <h5 class="detel1">Total Qty</h5>
                                      <span class="detel2">Rp. 5.000.000,00</span>
                                    </div>
                                  </div>
                                  <table class="table table-borderless males">
                                    <thead>
                                      <tr>
                                        <th>Duration</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>02-12-2019 - 04-12-2019</td>
                                        <td>2</td>
                                        <td>Rp. 5.000.000,00</td>
                                      </tr>
                                  </tbody>
                                  </table>
                                </div>
                                <div class="row secone">
                                  <div class="img-fluid kiwo citr">
                                    <img class="minni" src="{{asset('assets_frontend/images/intro_1.jpg')}}">
                                  </div>
                                  <div class="kiwo">
                                    <span class="judul">Hotel California</span>
                                    <div class="detel">
                                      <h5 class="detel1">Capacity</h5>
                                      <span class="detel2">2 Adults & 2 children</span>
                                    </div>
                                    <div class="detel">
                                      <h5 class="detel1">Price</h5>
                                      <span class="detel2">Rp. 5.000.000,00</span>
                                    </div>
                                    <div class="detel">
                                      <h5 class="detel1">Total Qty</h5>
                                      <span class="detel2">Rp. 5.000.000,00</span>
                                    </div>
                                  </div>
                                  <table class="table table-borderless males">
                                    <thead>
                                      <tr>
                                        <th>Duration</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>02-12-2019 - 04-12-2019</td>
                                        <td>2</td>
                                        <td>Rp. 5.000.000,00</td>
                                      </tr>
                                  </tbody>
                                  </table>
                                </div>
                                <div class="row sectwo">
                                  <div class="totalan">
                                    <h5 class="kr">Total</h5>
                                    <h5 class="kn">Rp.5.000.000,00</h5>
                                  </div>
                                </div>
                                <div class="row secone text-center">
                                  <div class="">
                                    <button class="btn btn-primary" type="button" name="button">Cuss</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="background_image" style="background-image:url('{{url('assets_frontend/images/menu.jpg')}}')"></div>
        <div class="menu_content d-flex flex-column align-items-center justify-content-center">
            <ul class="menu_nav_list text-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="rooms.html">Rooms</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="menu_review"><a href="{{ route('login') }}">LOGIN</a></div>
        </div>
    </div>
