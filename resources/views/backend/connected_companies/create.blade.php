@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.company') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="post" action="{{route('admin.company.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="inputEmail4">Firma Adı </label>
                                <input name="name" type="text" class="form-control" id="inputEmail4"
                                    placeholder="Firma Adı">
                            </div>
                         

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adres</label>
                                    <input name="adress" type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Tuna Caddesi">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Konum</label>
                                    <input name="konum" type="text" class="form-control" id="inputAddress2"
                                        placeholder="Kayseri , İstanbul">
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">


                                    <label for="exampleFormControlTextarea1"> Detaylar :</label>
                                    <textarea name="detail" class="ckeditor" id="exampleFormControlTextarea1"
                                        rows="2"></textarea>
                                        <script type="text/javascript">
      CKEDITOR.replace( 'detail' );
      CKEDITOR.add            
   </script>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="card main-sectionx">
                                        <label for="exampleFormControlTextarea1"> Logo</label>
                                        <div class="body">
                                            <input type="file" class="dropify"
                                                data-allowed-file-extensions="png jpg jpeg" name="src">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-8">

<div class="card">
    <div class="header">
        <h2>{{ trans('backend.images') }}</h2>
    </div>
    <div class="body">
        <div class="file-loading">
   <input id="file-1" type="file" name="src[]" multiple class="file" data-overwrite-initial="false"
        data-min-file-count="0">
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#file-1").fileinput({
            rtl: true,
            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'jpeg'],
            overwriteInitial: false,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
</script>



    </div>
                                <button type="submit" class="btn btn-primary">Ekle</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection