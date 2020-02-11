@extends('layouts_backend._main_backend')

@section('extra_styles')
@endsection

@section('content')
   <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <div class="card border-success">
                <div class="card-header bg-success">
                    <h4 class="m-b-0 text-white">Card Title</h4></div>
                <div class="card-body">
                     <div class="text-right mb-3">
                    <a  class="btn waves-effect add_data waves-light btn-md btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fas fa-plus"></i> Add Data</a>
                </div>
                   <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $element)
                                    <tr>
                                        <td>{{ $element->ct_id }}</td>
                                        <td>{{ $element->m_ticket->mt_name }}</td>
                                        <td>
                                            <a class="btn waves-effect waves-light btn-sm btn-warning" href="{{ route('catalog_ticket_edit', ['id' => $element->ct_id]) }}"><i class="fas fa-pencil-alt"></i></a>
                                            <button type="button" class="btn waves-effect waves-light btn-sm btn-danger delete" value="{{ $element->ct_id }}" ><i class="fas fa-times"></i></button>
                                            <button type="button" class="btn waves-effect waves-light btn-sm btn-info view" data-toggle="modal" data-target=".bs-example-modal-lg" 
                                            value="{{ $element->ct_id }}" 
                                            data-qty="{{ $element->ct_qty }}" 
                                            data-qty_sold="{{ $element->ct_qty_sold }}" 
                                            data-qty_left="{{ $element->ct_qty_left }}" 
                                            ><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
              
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<form class="form_data">
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <input type="hidden" class="id" name="id">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ticket Name</label>
                                    <select class="form-control ticket" name="ticket">
                                        @foreach ($ticket as $element)
                                            <option value="{{ $element->mt_id }}">{{ $element->mt_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="text" class="form-control qty" name="qty">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Qty Sold</label>
                                    <input type="text" class="form-control qty_sold" name="qty_sold">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Qty Left</label>
                                    <input type="text" class="form-control qty_left" name="qty_left">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
 </div>
</form>
@endsection

@section('extra_scripts')
    <script src="jquery.maskMoney.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('.qty_sold').maskMoney({precision:0,decimal:false});

    $('.add_data').click(function (argument) {
        $('.ticket').attr('disabled',false);
        $('.modal-footer').empty();
        $('.modal-footer').append('<button type="button" class="btn btn-info submit waves-effect text-left" onclick="simpan()">Submit</button>');
        $('.id').val('');
        $('.qty').attr('readonly',false);
        $('.qty_sold').attr('readonly',true);
        $('.qty_left').attr('readonly',true);
        $('.qty').val(0);
        $('.qty_sold').val(0);
        $('.qty_left').val(0);
    })
    $('#zero_config').DataTable();

    $('.delete').on('click', function () {
       var this_val = $(this).val();
       iziToast.question({
                theme: 'dark',
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                backgroundColor: '#1f1f22',
                icon: 'fa fa-info-circle',
                title: 'Are you Sure!',
                message: '',
                position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: 'rgb(0, 255, 184)',
                buttons: [
                    ['<button style="background-color:red;"> Delete </button>', function (instance, toast) {
                        $.ajax({
                            url  : baseUrl+'/master'+'/catalog_room/delete/'+this_val,
                            type :'get',
                            success:function(data){
                                if (data.status == 'sukses') {
                                    iziToast.success({position: 'topRight',message: 'Successfully Deleted!'});
                                    window.location=('{{ route('catalog_room') }}')
                                }else{
                                    iziToast.error({position: 'topRight',message: 'Error Check your data! '});
                                }
                            }
                        })
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }, true], // true to focus
                    ['<button> Cancel </button>', function (instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOutUp',
                            onClosing: function(instance, toast, closedBy){
                                console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                            }
                        }, toast, 'buttonName');
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }]
                ],
                onOpening: function(instance, toast){
                    console.info('callback abriu!');
                },
                onClosing: function(instance, toast, closedBy){
                    console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                }
            });
        
    });
    function simpan(argument) {
       iziToast.question({
                theme: 'dark',
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999999,
                backgroundColor: '#1f1f22',
                icon: 'fa fa-info-circle',
                title: 'Are you Sure!',
                message: '',
                position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: 'rgb(0, 255, 184)',
                buttons: [
                    ['<button style="background-color:green;"> Simpan </button>', function (instance, toast) {
                        $.ajax({
                            url  : '{{ route('catalog_ticket_save') }}',
                            type :'get',
                            data : $('.form_data').serialize(),
                            success:function(data){
                                if (data.status == 'sukses') {
                                    iziToast.success({position: 'topRight',message: 'Successfully Saved!'});
                                    location.reload();
                                }else{
                                    iziToast.error({position: 'topRight',message: 'Error Check your data! '});
                                }
                            }
                        })
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }, true], // true to focus
                    ['<button> Cancel </button>', function (instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOutUp',
                            onClosing: function(instance, toast, closedBy){
                                console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                            }
                        }, toast, 'buttonName');
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }]
                ],
                onOpening: function(instance, toast){
                    console.info('callback abriu!');
                },
                onClosing: function(instance, toast, closedBy){
                    console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                }
            });
    }
       
    $('.view').click(function (argument) {
        $('.ticket').attr('disabled',true);
        $('.modal-footer').empty();
        $('.modal-footer').append('<button type="button" class="btn btn-info update waves-effect text-left" onclick="update()">Update</button>');
        $('.id').val($(this).val());
        $('.qty').val($(this).data('qty'));
        $('.qty_sold').val($(this).data('qty_sold'));
        $('.qty_left').val($(this).data('qty_left'));
        $('.qty').attr('readonly',true);
        $('.qty_sold').attr('readonly',false);
        $('.qty_left').attr('readonly',true);
    });
    $('.qty_sold').keyup(function (argument) {
        hitung();
    })
    function hitung() {
        if (parseFloat($('.qty_sold').val()) > parseFloat($('.qty').val())) {
            $('.qty_left').val(0);    
        }else{
            $('.qty_left').val(parseFloat($('.qty').val())-parseFloat($('.qty_sold').val()));
        }
    }

    function update(argument) {
        iziToast.question({
                theme: 'dark',
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999999,
                backgroundColor: '#1f1f22',
                icon: 'fa fa-info-circle',
                title: 'Are you Sure!',
                message: '',
                position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: 'rgb(0, 255, 184)',
                buttons: [
                    ['<button style="background-color:green;"> Update </button>', function (instance, toast) {
                        $.ajax({
                            url  : '{{ route('catalog_ticket_update') }}',
                            type :'get',
                            data : $('.form_data').serialize(),
                            success:function(data){
                                if (data.status == 'sukses') {
                                    iziToast.success({position: 'topRight',message: 'Successfully Saved!'});
                                    location.reload();
                                }else{
                                    iziToast.error({position: 'topRight',message: 'Error Check your data! '});
                                }
                            }
                        })
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }, true], // true to focus
                    ['<button> Cancel </button>', function (instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOutUp',
                            onClosing: function(instance, toast, closedBy){
                                console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                            }
                        }, toast, 'buttonName');
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }]
                ],
                onOpening: function(instance, toast){
                    console.info('callback abriu!');
                },
                onClosing: function(instance, toast, closedBy){
                    console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                }
            });
    }

    </script>

@endsection



    

       