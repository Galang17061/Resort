@extends('layouts_frontend._main_frontend')
@section('extra_style')
<style type="text/css">
  @@media screen and (max-width:980px) {
    .moc{
      display: inherit !important;
    }
  }
  .room_col {
    margin-top: 100px;
  }
  .search_bar {
  	padding-top: 135px;
  	padding-bottom: 25px;
  }
  .ner {
  	width: 100%;
  	margin: auto;
  	margin-top: 20px;
  }
  .comn {
  	width: 100%;
  }
  .text-center
  {
  	color: #d6baa0;
  	font-family: inherit;
  	font-weight: 400;
  }
  .comn img {
  	border: solid 5px #eaeaea;
  	border-radius: 5px 5px 0 0;
  	width: 100%;
  	height: 400px;
  }
  .tbl {
  	margin-top: 20px;
    margin-bottom: 20px;
    display: inline-block;
  }
  .tbl img {
  	border: solid 5px #eaeaea;
  	border-radius: 1px;
  	width: 90px;
  	height: 80px;
  }
  .ggb {
  	list-style: none;
  	float: left;
  	padding-right:15px;
  }
  .intro_content
  {
  	width: 100%;
  }
  .intro_content2
  {
    width: 85%;
  }
  .clickable
  {
  	cursor: pointer;
  }
  .desc p
  {
    color: #000;
    margin-bottom: 20px;
  }
  .control-label
  {
    display: flex;
  }
  .day
  {
    color: black;
  }
  .prc
  {
  font-family: 'Monstserrat', serif;
  font-weight: 550;
  color: #333333;
  line-height: 1.25;
  -webkit-font-smoothing: antialiased;
  -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
  text-shadow: rgba(0,0,0,.01) 0 0 1px;
  }
  .moc
  {
    display: flex;
    flex-wrap: wrap;
  }
  .mdl{
    padding:30px;
  }
  .mdl h2
  {
    margin :10px 0 30px 0;
  }
  .mdr
  {
    border-left: 1px solid;
    position: relative;
  }
  .mgb
  {
    max-width: 180px;
    border: 1px solid #d6d4d4;
    padding: 5px;
    float: left;
    margin-right: 30px;
  }
  .mpi
  {
    display: inline-block;
  }
  .prodname
  {
    font-weight: 700;
    margin-bottom: 20px;
    border-bottom: 1px solid;
  }
  .sub
  {
    margin-bottom: 5px;
  }
  .st
  {
    display: table;
    padding: 5px 0;
  }
  .paytit
  {
    padding: 10px 0;
    margin-bottom: 10px 0;
    border-bottom: 1px solid;
  }
  .klos , .lanjot
  {
    font-size: 15px;
  }
  .tutup
  {
    position: absolute;
    right: 20px;
    top: 10px;
    width: 25px;
    height: 25px;
    cursor: pointer;
    color: #333;
    z-index: 2;
  }
  .tutup:before
  {
    content: "\f057";
    display: block;
    font-family: fontawesome;
    font-size: 25px;
    line-height: 25px;
  }
  .lee
  {
    position: static;
  }
  .boti
  {
    padding: 10px 0;
  }
  .table td, .table th{
    border-top:0px solid white !important;
  }


</style>
@endsection


@section('content')
<div class="intro">
@include('layouts_frontend._search_frontend')
        <div class="container">
            <div class="row row-lg-eq-height">
              @foreach ($data as $index => $element)

                <!-- Intro Content -->
                <div class="col-lg-8 intro_col">

                   <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="intro_content2">
                          <div class="section_subtitle">room detail</div>
                            <div class="section_title"><h3>{{ $data[0]->cr_name }}</h3></div>

                            <div class="ner">

                            	<div class="comn">
                            		<img src="{{asset('storage/app/'.$data[0]->c_room_image[0]->cri_image)}}">
                            	</div>
                            	<ul class="tbl">
                                @foreach ($element->c_room_image as $index1 => $element1)
                              		<li class="ggb">
                              			<a href="{{url('storage/app/'.$data[0]->c_room_image[$index1]->cri_image)}}">
                              				<img src="{{asset('storage/app/'.$data[0]->c_room_image[$index1]->cri_image)}}">
                              			</a>
                              		</li>
                                @endforeach
                            	</ul>
                            </div>

                            <ul class="nav nav-tabs panels" role="tablist">
                              <li class="nav-item active">
                                <a class="nav-link nli" href="#rominfo" role="tab" data-toggle="tab">Room Information</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link nli" href="#reviews" role="tab" data-toggle="tab">reviews</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content mods">
                              <div role="tabpanel" class="tab-pane fade-in active" id="rominfo">

                                <div class="desc">
                                  <p>
                                    {!! $data[0]->cr_desc !!}
                                  </p>

                                  <strong>Room Features - </strong>
                                  @foreach ($data[0]->c_room_features as $index2 => $element2)
                                    <i class="{{ $data[0]->c_room_features[$index2]->m_features->mf_icon }}">{{-- {{ $data[0]->c_room_features[$index2]->m_features->mf_name }} --}}</i>
                                  @endforeach
                                </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="reviews">

                                <div class="desc">
                                  <p>
                                    No customer reviews for the moment.
                                  </p>
                                </div>

                              </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Intro Image -->
                <div class="col-lg-4 intro_col">

                   <div class="d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); padding-top: 80px;">

                        <div class="intro_content">

                            <div class="frm">

                            	<form action="" method="">

                                <input type="hidden" class="total_days_book" readonly>
                            		<div class="form-group">
                            			<label for="" class="control-label">Type Bed</label>
                                      <input type="hidden" class="form-control type_room_id" value="{{ $data[0]->m_type_room->tr_id }}" readonly="" name="type_room_id">
                                      <input type="text" class="form-control type_room_name" value="{{ $data[0]->m_type_room->tr_name }}" readonly="" name="type_room_name">
                            		</div>
                            		<div class="form-group">
                            			<label for="" class="control-label">Check In Date</label>
                            			<input type="text" class="form-control start_date datess" id="tgl1" name="today" placeholder="Check In Date" readonly>
                            		</div>
                            		<div class="form-group">
                            			<label for="" class="control-label">Check Out Date</label>
                                  <input type="text" class="form-control end_date datess" id="tgl2" name="gohome" placeholder="check Out Date" readonly>
                            		</div>
                            		<div class="form-group">
                              			<label for="" class="control-label">Number of Rooms</label>
                                    <input type="text" class="form-control qty" name="qty" value="1">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Price Room</label>
                                    <h4 class="prc room_price_txt">Rp. {{ number_format($data[0]->cr_price,0,',','.') }}</h4>
                                    <input type="hidden" value="{{ $data[0]->cr_price }}" class="hrg room_price" name="">
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" onclick="book_now()" class="btn btn-primary" data-toggle="modal">Book Now</button>

                            	</form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
          @endforeach
        </div>
    </div>





    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="moc">
            <div class="col-xs-12 col-sm-6 mdl lee">
              <span class="tutup" title="close window"></span>
              <h2 class="text-center" style="font-size: large;"><i class="fa fa-check"></i>Room Succesfully added to your cart</h2>
              <h5 class="text-center prodname">{{$data[0]->cr_name}}</h5>

              <div class="mgb">
                <img class="img-fluid" src="{{asset('assets_frontend/images/intro_1.jpg')}}">
              </div>
              <div class="mpi">
                <div class="sub">
                  <strong>Time Duration</strong>
                  <span class="st start_date_txt" id=""></span>
                  <span class="st">till</span>
                  <span class="st end_date_txt" id=""></span>
                </div>
                <div class="sub">
                  <strong>Rooms Quantity</strong>
                  <span class="st qty_txt" id=""></span>
                </div>
                <div class="sub">
                  <strong>Total Room Cost</strong>
                  <span class="st room_price_txt" id=""></span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 mdl mdr">
              <h4 class="text-center paytit">There are 1 room(s) in your cart.</h4>
              <div class="payinf">
                <table class="table" style="font-size: 14px">
                  <tr>
                    <th>Total Room Cost</th>
                    <td align="right"><span class="st room_price_txt" id=""></span></td>
                  </tr>
                  <tr>
                    <th>Total Tax</th>
                    <td align="right"><span class="st tax_price_txt" id=""></span></td>
                  </tr>
                  <tr>
                    <th>Total Serve</th>
                    <td align="right"><span class="st serve_price_txt" id=""></span></td>
                  </tr>
                  <tr>
                    <th>Total Additional</th>
                    <td align="right"><span class="st additional_price_txt" id=""></span></td>
                  </tr>
                  <tr style="background-color: #f5f5f5">
                    <th>Total Cost</th>
                    <td align="right"><span class="st total_price_txt" id=""></span></td>
                  </tr>
                </table>
              </div>
              <div class="moc">
                <div class="col-xs-12 col-sm-6 boti">
                  <button class="klos btn btn-secondary">
                    <i class="fa fa-chevron-left"></i> Continue Shopping
                  </button>
                </div>
                <div class="col-xs-12 col-sm-6 boti">
                  <button class="btn btn-primary" onclick="proceed({{ $data[0]->cr_id }})">
                    Proceed to Checkout <i class="fa fa-chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('extra_scripts')
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script>
    $(".tbl a").click(function(event) {
        event.preventDefault();
        $(".comn").empty().append(
            $("<img>", {src: this.href})
        );
    });

    $("#tgl1").datepicker({
      startDate: new Date(),
      format: 'dd-MM-yyyy',
      autoclose: true,
      onSelect: function () {
        hitung();
      }
    });


    $("#tgl2").datepicker({
      startDate: new Date(),
      format:'dd-MM-yyyy',
      autoclose: true,
      onSelect: function () {
        hitung();
      }
    });

    $('.qty').keyup(function(){
      hitung();
    });
    $('.datess').change(function(){
      hitung();
    });

    function hitung(argument) {
      var start= $(".start_date").datepicker("getDate");
      var end= $(".end_date").datepicker("getDate");
      days = (end- start) / (1000 * 60 * 60 * 24);
      $('.total_days_book').val(days+1);


      var qty = $('.qty').val();
      var room_price = $('.room_price').val();
      var tax_price = '{{ $data[0]->cr_tax }}';
      var serve_price = '{{ $data[0]->cr_serve }}';
      var additional_price = '{{ $data[0]->cr_additional }}';

      var total_room_price = parseFloat(qty)*parseFloat(room_price)*(days+1);
      $('.room_price_txt').text(accounting.formatMoney(total_room_price,"Rp. ",0,'.',','));

      var total_price = (total_room_price*(days+1))+parseFloat(tax_price)+parseFloat(serve_price)+parseFloat(additional_price);
      $('.total_price_txt').text(accounting.formatMoney(total_price,"Rp. ",0,'.',','));

    }

    $('.tutup,.klos').click(function(eve) {
      $('.modal').modal('hide');
    });
    $('.lanjot').click(function(eve){
      window.location.href = '{{route('invoice')}}';
    });
    function proceed(argument) {
      var start_date = $('.start_date').val();
      var end_date = $('.end_date').val();
      var qty = $('.qty').val();
      var typeid = $('.type_room_id').val();
      var typename = $('.type_room_name').val();
      var total_days_book = $('.total_days_book').val();

      window.location.href = baseUrl+'/book/book_room/book_detail/'+argument+'?&start_date='+start_date+'&end_date='+end_date+'&qty='+qty+'&typeid='+typeid+'&typename='+typename+'&total_menginap='+total_days_book;
    }

    function book_now(argument) {
      $('.bd-example-modal-lg').modal('show');
      $('.start_date_txt').text($('.start_date').val());
      $('.end_date_txt').text($('.end_date').val());
      $('.qty_txt').text($('.qty').val());
      $('.tax_price_txt').text('Rp. '+'{{ number_format($data[0]->cr_tax,0,',','.') }}');
      $('.serve_price_txt').text('Rp. '+'{{ number_format($data[0]->cr_serve,0,',','.') }}');
      $('.additional_price_txt').text('Rp. '+'{{ number_format($data[0]->cr_additional,0,',','.') }}');
      hitung();
    }

</script>

@endsection
