@extends('layouts_frontend._main_frontend')
@section('extra_style')
<style type="text/css">
.nulls
{
	margin-top: 50px;
}
.romps
{
	padding: 15px;
	background-color: #fff;
	box-shadow: 0 2px 6px 0 rgba(0,0,0,.2);
	border-radius: 4px;
	margin-bottom: 20px;
	display: flow-root;
}
.cek
{
	margin-right: 10px;
}
.rinf
{
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px solid #eaeaea;
}

.roi
{
	padding: 10px 0 15px 0;
	display: flex;
}
.gab img
{
	width: 100%;
}
.sampah
{
	padding: 10px 0 20px 0;
	text-align: center;
}
.feature
{
	margin: 10px 0 15px 0;
}
.icco
{
	margin:10px 10px 0 0;
	padding: 7px;
	background-color: #eaeaea;
	border-radius: 15px;
	font-size: 15px;
	font-weight: 550;
}
.infor
{
	margin: 0 0 15px 0;
	padding: 5px 0;
	background-color: #eaeaea;
}
.prai
{
	padding-bottom: 5px;

}
.tal2
{
	padding: 5px;
	background-color: #eaeaea;
	border-radius: 5px;
	display: inline-block;
}
.balik
{
	margin-top: 15px;
	float: left;
	display: inline-table;
}
.proceds
{
	margin-top: 15px;
	float: right;
	display: inline-table;
}
.haa
{
	padding: 10px 35px;
}
.det
{
	margin: 30px 0;
	text-align: center;
}
.prosbut
{
	background: #5a2360;
	cursor: pointer;
	border: none;
	outline: none;
	padding: 7px 20px;
	border-radius: 15px;
}
.prosbut span
{
	display: inline-block;
	position: relative;
	font-size: 16px;
	font-weight: 500;
	color: #FFFFFF;
	line-height: 50px;
}
.prosbut:hover {
	background-color: #081124;
	color: #d6baa0;
}
.ndeks{
	display: flex;
	padding: 5px;
	font-size: smaller;
}
h5.ntitel{
	width: 100px;
	font-size: small;
	font-weight: 600;
}
h5.vals{
	font-family: inherit;
	font-weight: 400;
	font-size: small;
	padding-left: 10px;
}
.modal
{
	padding: 0;
}
.modal.show .modal-dialog
{
	-webkit-transform: translateY(35%);
	transform: translateY(35%);
}
.error {
	color: red;
}
</style>
@endsection
@section('content')
<div class="nulls"></div>
<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="romps">
					<form action="" id="wizard">
						<!-- SECTION 1 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Room & Price Summary</h4>
								</div>
								<div class="rinf">
									<span class="roi">Room Information</span>
									<div class="row">
										<div class="col-xs-12 col-sm-3">
											<div class="gab">
												<img src="{{asset('storage/app/'.$data[0]->c_room_image[0]->cri_image)}}">
											</div>
											<div class="sampah">
												<span class="fa fa-trash"> Remove</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="hott">
												<h5>{{ $data[0]->cr_name }}</h5>
												<input type="hidden" value="{{ $data[0]->cr_id }}" name="id_room">
											</div>
											{{-- <div class="lok">
												<span class="fa fa-map-marker"> Jl. Gatot Oioi, Kota Surabaya , 60118</span>
											</div> --}}
											<div class="feature">
												@foreach ($data[0]->c_room_features as $index2 => $element2)
												<span class="icco {{ $data[0]->c_room_features[$index2]->m_features->mf_icon }}"> {{ $data[0]->c_room_features[$index2]->m_features->mf_name }}</span>
												@endforeach
											</div>
											<div class="row infor">
												<div class="col-xs-12 col-sm-3">
													<h5 class="ntitel">Check In</h5>
													<span>{{ $request['start_date'] }}</span>
													<input type="hidden" name="start_date" value="{{ $request['start_date'] }}">
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5 class="ntitel">Check Out</h5>
													<span>{{ $request['end_date'] }}</span>
													<input type="hidden" name="end_date" value="{{ $request['end_date'] }}">
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5 class="ntitel">Type Room</h5>
													<span>{{ $request['typename'] }}</span>
													<input type="hidden" name="typename" value="{{ $request['typename'] }}">
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5 class="ntitel">No. of Guests</h5>
													<span>{{ $request['qty'] }}</span>
													<input type="hidden" name="qty" value="{{ $request['qty'] }}">
												</div>
											</div>
											<div class="prai">
												<div class="tal2">
													<h5>Total room price</h5>
	                    							<span class="st total_price_txt" id="">Rp. {{ number_format(($data[0]->cr_price*$request['qty']*$request['total_menginap'])+$data[0]->cr_tax+$data[0]->cr_serve+$data[0]->cr_additional,0,',','.') }}</span>
	                    							<input type="hidden" name="total_price" value="{{$data[0]->cr_price*$request['qty']*$request['total_menginap']+$data[0]->cr_tax+$data[0]->cr_serve+$data[0]->cr_additional}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- SECTION 2 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>FOOD</h4>
								</div>
								<div class="rinf">
									<span class="roi">Your Information</span>

									<div class="row sumer">
										<div class="col-sm-12">
											<div class="ndeks">
												<input class="cek" type="checkbox" name="" value="">
												<h5 class="ntitel">Breakfast</h5>
											</div>
											<div class="ndeks">
												<input class="cek" type="checkbox" name="" value="">
												<h5 class="ntitel">Lunch</h5>
											</div>
											<div class="ndeks">
												<input class="cek" type="checkbox" name="" value="">
												<h5 class="ntitel">Dinner</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- SECTION 3 -->
						<div style="display: none;">
							<input type="text" value="{{ $data[0]->cr_price*$request['qty']*$request['total_menginap'] }}" name="room_price">

							<input type="text" value="{{ $data[0]->cr_tax }}" name="tax_price">

							<input type="text" value="{{ $data[0]->cr_serve }}" name="serve_price">

							<input type="text" value="{{ $data[0]->cr_additional }}" name="additional_price">

							<input type="text" value="{{ number_format(($data[0]->cr_price*$request['qty']*$request['total_menginap'])+$data[0]->cr_tax+$data[0]->cr_serve+$data[0]->cr_additional,0,',','.') }}" name="total_prices">
						</div>
						@if (Auth::user() != null)
						<input class="form-control" id="first_name" type="hidden" value="{{ Auth::user()->m_first_name }}" name="first_name">
						<input class="form-control" id="last_name" type="hidden" value="{{ Auth::user()->m_last_name }}" name="last_name">
						<input class="form-control" id="address" type="hidden" value="{{ Auth::user()->m_address }}" name="address">
						<input class="form-control" id="email" type="hidden" value="{{ Auth::user()->m_email }}" name="email">
						<input class="form-control" id="phone" type="hidden" value="{{ Auth::user()->m_phone }}" name="phone">
						<input class="form-control" id="phone1" type="hidden" value="{{ Auth::user()->m_phone }}" name="phone1">
						@else
						

							

						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Guest Information</h4>
								</div>
								<div class="rinf">
									<span class="roi">Already have an account?&nbsp;<a href="#anu" data-toggle="modal">Login</a>&nbsp;here</span>
									<div class="row">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-6">
													<label for="first_name" class="form-label">First Name</label>
													<input class="required form-control" id="first_name" type="text" name="first_name">
													<br>
													<label for="last_name" class="form-label">Last Name</label>
													<input class="required form-control" id="last_name" type="text" name="last_name">
													<br>
													<label for="address" class="form-label">Address</label>
													<input class="required form-control" id="address" type="text" name="address">
												</div>
												<div class="col-sm-6">
													<label for="email" class="form-label">Email</label>
													<input class="required form-control" id="email" type="text" name="email">
													<br>
													<label for="phone" class="form-label">Phone Number</label>
													<input class="required form-control" id="phone" type="text" name="phone">
													<br>
													<label for="phone1" class="form-label">Phone Number 2</label>
													<input class="required form-control" id="phone1" type="text" name="phone1">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						@endif

						<!-- SECTION 4 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Summary</h4>
								</div>
								<div class="rinf">
									<span class="roi">Your Information</span>
									<div class="row sumer">
										<div class="col-sm-12">
											<div class="ndeks">
												<h5 class="ntitel">First Name</h5>
												:<p class="first_name"></p>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Last Name</h5>
												:<p class="last_name"></p>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Address</h5>
												:<p class="address"></p>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Email</h5>
												:<p class="email"></p>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Phone Number 1</h5>
												:<p class="phone"></p>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Phone Number 2</h5>
												:<p class="phone1"></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</form>

				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="romps">
					<table class="table" style="font-size: 14px">
						<tr>
							<th>Total Room Cost</th>
						</tr>
						<tr>
							<td align="right"><span class="st room_price_txt" id="">Rp. {{ number_format($data[0]->cr_price*$request['qty']*$request['total_menginap'],0,',','.') }}</span></td>
						</tr>
						<tr>
							<th>Total Tax</th>
						</tr>
						<tr>
							<td align="right"><span class="st tax_price_txt" id="">Rp. {{ number_format($data[0]->cr_tax,0,',','.') }}</span></td>
						</tr>
						<tr>
							<th>Total Serve</th>
						</tr>
						<tr>
							<td align="right"><span class="st serve_price_txt" id="">Rp. {{ number_format($data[0]->cr_serve,0,',','.') }}</span></td>
						</tr>
						<tr>
							<th>Total Additional</th>
						</tr>
						<tr>
							<td align="right"><span class="st additional_price_txt" id="">Rp. {{ number_format($data[0]->cr_additional,0,',','.') }}</span></td>
						</tr>
						<tr style="background-color: #f5f5f5">
							<th>Total Cost</th>
						</tr>
						<tr>
							<td align="right"><span class="st total_price_txt" id="">Rp. {{ number_format(($data[0]->cr_price*$request['qty']*$request['total_menginap'])+$data[0]->cr_tax+$data[0]->cr_serve+$data[0]->cr_additional,0,',','.') }}</span></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="anu" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="auth-box">
				<div class="row" style="margin:0;">
					<div class="col-sm-12">
						<div id="loginform">
							<div class="logo text-center">
								<span class="db"><img src="{{ asset('assets_backend/images/logo-icon.png') }}" alt="logo" /></span>
								<h5 class="font-medium m-b-20">Sign In</h5>
							</div>
							<!-- Form -->
							<div class="row">
								<div class="col-12">
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
											</div>

											<input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} form-control-lg" name="username" placeholder="Username" value="{{ old('username') }}" autofocus aria-label="Username" aria-describedby="basic-addon1">

											@if ($errors->has('username'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('username') }}</strong>
											</span>
											@endif
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
											</div>
											<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">

											@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
											@endif
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<div class="custom-control custom-checkbox">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
													{{-- <input type="checkbox" class="custom-control-input" id="customCheck1"> --}}
													<label class="custom-control-label" for="remember">Remember me</label>
													<a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
												</div>
											</div>
										</div>
										<div class="form-group text-center">
											<div class="col-xs-12 p-b-20">
												<button class="btn btn-block btn-lg btn-info" onclick="login()" type="button" >Log In</button>
											</div>
										</div>
										{{--  <div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
												<div class="social">
													<a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
													<a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
												</div>
											</div>
										</div> --}}
										<div class="form-group m-b-0 m-t-10">
											<div class="col-sm-12 text-center">
												Don't have an account? <a href="{{ url('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extra_scripts')

<script type="text/javascript">
$(function(){
$("#wizard").steps({
			headerTag: "h2",
			bodyTag: "section",
			transitionEffect: "fade",
			enableAllSteps: false,
			transitionEffectSpeed: 500,
			labels: {
					finish: "Submit&nbsp;",
					next: "Forward&nbsp;",
					previous: " Backward"
			},
			onStepChanging: function (event, currentIndex, newIndex)
		    {
		        $("#wizard").validate().settings.ignore = ":disabled,:hidden";
		        $('.first_name').text($('#first_name').val());
		        $('.last_name').text($('#last_name').val());
		        $('.address').text($('#address').val());
		        $('.email').text($('#email').val());
		        $('.phone').text($('#phone').val());
		        $('.phone1').text($('#phone1').val());
		        return $("#wizard").valid();
		    },
		    onFinished: function (event, currentIndex)
		    {
		    	   iziToast.show({
		            overlay: true,
		            close: false,
		            timeout: 20000,
		            color: 'dark',
		            icon: 'fas fa-question-circle',
		            title: 'Save Data!',
		            message: 'Apakah Anda Yakin ?!',
		            position: 'center',
		            progressBarColor: 'rgb(0, 255, 184)',
		            buttons: [
		            [
		                '<button style="background-color:#17a991;color:white;">Save</button>',
			                function (instance, toast) {
			                    var form  = $('#wizard');
			                    formdata = new FormData(form[0]);
			                    // formdata.append('k_status_id',$id);

			                  $.ajaxSetup({
			                      headers: {
			                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			                        }
			                    });

			                    $.ajax({
			                        type: "post",
			                        url:'{{ route('room_detail_save') }}',
			                        data: formdata ? formdata : form.serialize(),
			                        processData: false,
			                        contentType: false,
			                      success:function(data){
			                        if (data.status == 'sukses') {
			                            iziToast.success({
			                                icon: 'fa fa-save',
			                                position:'topRight',
			                                title: 'Success!',
			                                message: 'Data Berhasil Disimpan!',
			                            });

			                            location.href = '{{ route('welcome') }}'
			                        }
			                      },error:function(){
			                        iziToast.error({
			                            icon: 'fa fa-info',
			                            position:'topRight',
			                            title: 'Error!',
			                            message: data.message,
			                        });
			                      }
			                    });
			                    instance.hide({
			                        transitionOut: 'fadeOutUp'
			                    }, toast);
			                }
			            ],
			            [
			                '<button style="background-color:#d83939;color:white;">Cancel</button>',
			                function (instance, toast) {
			                  instance.hide({
			                    transitionOut: 'fadeOutUp'
			                  }, toast);
			                }
			              ]
			            ]
			        });

		    }
	});
	$('.wizard > .steps li a').click(function(){
		$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
	});
	// Custome Jquery Step Button
	$('.forward').click(function(){
		$("#wizard").steps('next');
	})
	$('.backward').click(function(){
		$("#wizard").steps('previous');
	})
	// Select Dropdown
	$('html').click(function() {
		$('.select .dropdown').hide();
	});
	$('.select').click(function(event){
		event.stopPropagation();
	});
	$('.select .select-control').click(function(){
		$(this).parent().next().toggle();
	})
	$('.select .dropdown li').click(function(){
		$(this).parent().toggle();
		var text = $(this).attr('rel');
		$(this).parent().prev().find('div').text(text);
	})

})
function login(argument) {
	$("#wizard").steps({
		headerTag: "h2",
		bodyTag: "section",
		transitionEffect: "fade",
		current:1,
		enableAllSteps: false,
		transitionEffectSpeed: 500,
		labels: {
			finish: "Submit&nbsp;",
			next: "Forward&nbsp;",
			previous: " Backward"
		},
		onStepChanging: function (event, currentIndex, newIndex)
		{
			$("#wizard").validate().settings.ignore = ":disabled,:hidden";
			$('.first_name').text($('#first_name').val());
			$('.last_name').text($('#last_name').val());
			$('.address').text($('#address').val());
			$('.email').text($('#email').val());
			$('.phone').text($('#phone').val());
			$('.phone1').text($('#phone1').val());
			return $("#wizard").valid();
		},
	});
}


</script>

@endsection
