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
  <br><br><br>
    <div class="container">
        <div class="row row-lg-eq-height">
                <div class="col-lg-8 intro_col">

          <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="intro_content2">
                          <div class="section_subtitle">PEMBAYARAN INVOICE</div>
                            <div class="section_title"><h3>Pembayaran</h3></div>
                            <p>data Diri</p>
                            <br>
                                        <table class="data">
                                            <tr>
                                                <td width="40%">Nama</td>
                                                <td width="10%">:</td>
                                                @if ($dt[0]->d_room_guest == null)
                                                <td>{{ $dt[0]->d_mem[0]->m_first_name }} {{ $dt[0]->d_mem[0]->m_last_name }}</td>
                                                @else
                                                <td>{{ $dt[0]->d_room_guest[0]->drbg_first_name }} {{ $dt[0]->d_room_guest[0]->drbg_last_name }}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                @if ($dt[0]->d_room_guest == null)
                                                <td>{{ $dt[0]->d_mem[0]->m_email }}</td>
                                                @else
                                                <td>{{ $dt[0]->d_room_guest[0]->drbg_email }}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>Kode Booking</td>
                                                <td>:</td>
                                                <td>{{ $dt[0]->drb_code }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kamar</td>
                                                <td>:</td>
                                                <td>{{ $dt[0]->c_room->cr_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pesan</td>
                                                <td>:</td>
                                                <td>{{ date('d F Y',strtotime($dt[0]->drb_start_date)) }} s/d {{ date('d F Y',strtotime($dt[0]->drb_end_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Type bed</td>
                                                <td>:</td>
                                                <td>{{ $dt[0]->drb_type_bed }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Harga</td>
                                                <td>:</td>
                                                <td>{{ number_format($dt[0]->drb_total_price,0,'.',',') }}</td>
                                            </tr>
                                        </table>
                                      <br>
                          </div>
                          <form class="form_save">
                          <p>Upload data Pembayaran</p>
                          <input type="hidden" name="id" value="{{ $dt[0]->drb_id }}">
                          <input type="file" name="bukti_transfer" class="form-control">
                          <br>
                          <button class="btn btn-sm btn-warning"> Kirim </button>
                          </form>
                        </div>
                        </div>

        </div>
    </div>
  </div>

@endsection

@section('extra_scripts')
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script>

</script>

@endsection
