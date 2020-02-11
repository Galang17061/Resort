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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form_save" enctype="multipart/form-data">
                                <h4 class="card-title">Manage Room</h4>
                                <h6 class="card-subtitle">manage your room from here</h6>
                                <div style="border-bottom: 2px solid #e5e5e5;margin: 0px -20px 30px -20px;">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xl-2">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="information-tab" data-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">Information</a>
                                            <a class="nav-link" id="price-tab" data-toggle="pill" href="#price" role="tab" aria-controls="price" aria-selected="false">Price</a>
                                            <a class="nav-link" id="image-tab" data-toggle="pill" href="#image" role="tab" aria-controls="image" aria-selected="false">Images</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Features</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-xl-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Name</label>
                                                    <div class="col-10">
                                                        <input class="form-control" type="text" name="cr_name" id="cr_name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Short Desc</label>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="cr_desc_short"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Long Desc</label>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="cr_desc"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">type</label>
                                                    <div class="col-10">
                                                        <select class="form-control" name="cr_type">
                                                            <option value="">- Chose -</option>
                                                            @foreach ($type as $element)
                                                                <option value="{{ $element->tr_id }}">{{ $element->tr_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Price</label>
                                                    <div class="col-10">
                                                        <input class="form-control mask_money_dn text-right" type="text" name="cr_price" id="cr_price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Tax Price</label>
                                                    <div class="col-10">
                                                        <input class="form-control mask_money_dn text-right" type="text" name="cr_tax" id="cr_tax">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Serve Price</label>
                                                    <div class="col-10">
                                                        <input class="form-control mask_money_dn text-right" type="text" name="cr_serve" id="cr_serve">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Additional Price</label>
                                                    <div class="col-10">
                                                        <input class="form-control mask_money_dn text-right" type="text" name="cr_additional" id="cr_additional">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Payment Method</label>
                                                    <div class="custom-control custom-radio col-3">
                                                        <input type="radio" id="customRadio1" name="payment" value="Down Payment" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Down Payment</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="payment" value="Full Payment" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Full Payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Image Cover / Img 1</label>
                                                    <div class="col-10">
                                                    <img id="cr_img_0"  width="200" height="200" />
                                                        <input type="file" name="crd_img[]"
                                                    onchange="document.getElementById('cr_img_0').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Img 2</label>
                                                    <div class="col-10">
                                                    <img id="cr_img_1"  width="200" height="200" />
                                                        <input type="file" name="crd_img[]"
                                                    onchange="document.getElementById('cr_img_1').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Img 3</label>
                                                    <div class="col-10">
                                                    <img id="cr_img_2"  width="200" height="200" />
                                                        <input type="file" name="crd_img[]"
                                                    onchange="document.getElementById('cr_img_2').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Img 4</label>
                                                    <div class="col-10">
                                                    <img id="cr_img_3"  width="200" height="200" />
                                                        <input type="file" name="crd_img[]"
                                                    onchange="document.getElementById('cr_img_3').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="r_level" class="col-2 col-form-label">Img 5</label>
                                                    <div class="col-10">
                                                    <img id="cr_img_4"  width="200" height="200" />
                                                        <input type="file" name="crd_img[]"
                                                    onchange="document.getElementById('cr_img_4').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">.
                                                <table class="table">
                                                    <tr>
                                                        <th>Action</th>
                                                        <th>Feature</th>
                                                        <th>Feature Icon</th>
                                                    </tr>
                                                    @foreach ($features as $index => $element)
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" value="{{ $element->mf_id }}" name="features[]" id="customCheck{{ $index }}">
                                                                <label class="custom-control-label" for="customCheck{{ $index }}"></label>
                                                            </div>
                                                        </td>
                                                        <td>{{ $element->mf_name }}</td>
                                                        <td><i class="{{ $element->mf_icon }}"></i></td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-md-10 col-sm-12">
                                        <button type="button" onclick="save()" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger">Back</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

@endsection

@section('extra_scripts')


    <script type="text/javascript">
        
        function save() {
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
                    var form  = $('.form_save');
                    formdata = new FormData(form[0]);
                    // formdata.append('k_status_id',$id);

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "post",
                        url:'{{ route('catalog_room_save') }}',
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

                            location.href = '{{ route('catalog_room') }}'
                        }else if (data.status == 'ada') {
                            iziToast.warning({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:'Level Sudah Terpakai',
                            });

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

    </script>

@endsection



    

       