@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection


@section('content')

<!-- account setting page start -->
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                <li class="nav-item">
                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                        href="#bylaws" aria-expanded="true">
                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                        {{ trans('backend.bylaws') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                        href="#organizational_structure" aria-expanded="false">
                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                        {{ trans('backend.organizational_structure') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                        href="#terims_of_use" aria-expanded="false">
                        <i class="feather icon-info mr-50 font-medium-3"></i>
                        {{ trans('backend.terms_of_use') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                        href="#privacy_policy" aria-expanded="false">
                        <i class="feather icon-camera mr-50 font-medium-3"></i>
                        {{ trans('backend.privacy_policy') }}
                    </a>
                </li>


            </ul>
        </div>
        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="bylaws"
                                aria-labelledby="account-pill-general" aria-expanded="true">


                                <form role="form" action="{{route('admin.static.updategeneral')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="media">

                                        <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/static', $static->g_pdf) }}"
                                            data-allowed-file-extensions="pdf doc docx" name="g_pdf">

                                        <div class="media-body mt-75">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">

                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>PDF, DOC or DOCX.
                                                </small></p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            
                                                            <!-- Tab panes -->
                                                            <div class="tab-content pt-1">
                                                                <div class="tab-pane active" id="home-static" role="tabpanel"
                                                                    aria-labelledby="home-tab-justified">
                                                                    
                                                                    <h4 class="card-title">
                                                                        {{ trans('backend.title') }}</h4>

                                                                    <input type="text" class="form-control" name="g_title_tr"
                                                                        value="{{   $static->g_title_tr }}" aria-required="true">
                                                                    <h4 class="card-title">
                                                                        {{ trans('backend.text') }}</h4>
                                                                    <textarea type="text" class="ckeditor"
                                                                        name="g_text_tr">{!! $static->g_text_tr !!}</textarea>
                                                                        <script type="text/javascript">
      CKEDITOR.replace( 'g_text_tr' );
      CKEDITOR.add            
   </script>
               
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">{{trans('backend.save')}}</button>
                                            <button type="reset" class="btn btn-outline-warning">{{trans('backend.cancel')}}</button>

                                    </div>
                                </form>

                            </div>




                            <div class="tab-pane fade " id="organizational_structure" role="tabpanel"
                                aria-labelledby="account-pill-password" aria-expanded="false">

                                <form role="form" action="{{route('admin.static.updateorg')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="media">

                                            <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/static', $static->o_image) }}"
                                                data-allowed-file-extensions="png  jpeg jpg" name="o_image">

                                            <div class="media-body mt-75">
                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">

                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>PNG, JPEsaG, JPG.
                                                    </small></p>
                                            </div>
                                        </div>
                                        <hr>



<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                    
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-o_static" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                           
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="o_title_tr"
                                value="{{   $static->o_title_tr }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="ckeditor"
                                name="o_text_tr">{!! $static->o_text_tr !!}</textarea>
                                <script type="text/javascript">
      CKEDITOR.replace( 'o_text_tr' );
      CKEDITOR.add            
   </script>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">{{trans('backend.save')}}</button>
                                                <button type="reset" class="btn btn-outline-warning">{{trans('backend.cancel')}}</button>
                                            </div>

                                    </form>


                            </div>
                            <div class="tab-pane fade" id="privacy_policy" role="tabpanel"
                                aria-labelledby="account-pill-info" aria-expanded="false">

<form role="form" action="{{route('admin.static.updateprivacy')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                  
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-p_static" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                           
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="p_title_tr"
                                value="{{   $static->p_title_tr }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="ckeditor"
                                name="p_text_tr">{!! $static->p_text_tr !!}</textarea>
                                <script type="text/javascript">
      CKEDITOR.replace( 'p_text_tr' );
      CKEDITOR.add            
   </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"> {{trans('backend.save')}} </button>
            <button type="reset" class="btn btn-outline-warning">{{trans('backend.cancel')}}</button>
        </div>

</form>
                            </div>
                            <div class="tab-pane fade " id="terims_of_use" role="tabpanel"
                                aria-labelledby="account-pill-social" aria-expanded="false">

                                <form role="form" action="{{route('admin.static.updateterims')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}




<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                   
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-t_static" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                          
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="t_title_tr"
                                value="{{   $static->t_title_tr }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="ckeditor" 
                                name="t_text_tr">{!! $static->t_text_tr !!}</textarea>
                                <script type="text/javascript">
      CKEDITOR.replace( 't_text_tr' );
      CKEDITOR.add            
   </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">{{trans('backend.save')}}</button>
                                            <button type="reset" class="btn btn-outline-warning">{{trans('backend.cancel')}}</button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

