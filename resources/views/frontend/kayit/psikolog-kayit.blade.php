@extends('frontend.layout.frontend-blog-main')
@section('alt-title','Sekiz Evre Psikolog Başvuru Formu')
@section('alt-des','')
@section('css')

@stop

@section('content')
    @include('backend.Psikolog.layout.partials.error')
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="card card-admin">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>

                    </header>
                    <div class="card-body">
                        <form class="form-horizontal form-bordered" method="post" action="{{route('psikolog.kayit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">İsim :</label>
                                <div class="col-lg-6">
                                    {!! Form::text('name',null, ['class' => 'form-control ' ,'placeholder' => 'İsiminizi Giriniz', 'required' => '']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Soy İsim :</label>
                                <div class="col-lg-6">
                                    {!! Form::text('sname',null, ['class' => 'form-control ' ,'placeholder' => 'Soyadınızı Giriniz', 'required' => '']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Şifre</label>
                                <div class="col-lg-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Email</label>
                                <div class="col-lg-6">
                                    {!! Form::text('email',null, ['class' => 'form-control ' ,'placeholder' => 'Emailinizi Giriniz', 'required' => '']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Telefon Numarası:</label>
                                <div class="col-lg-6">
                                    {!! Form::text('telno',null, ['class' => 'form-control ' ,'placeholder' => 'Telefon Numaranızı Giriniz', 'required' => '']) !!}

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Buluduğunuz İli Seçiniz</label>
                                <div class="col-lg-6">
                                    <select name="country" class="form-control" style="width:250px">
                                        <option value="">--- Bir İl Seçiniz ---</option>
                                        @foreach ($countries as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                </div>


                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Buluduğunuz ilçeyi Seçiniz</label>
                                <div class="col-lg-6">
                                    <select name="state" class="form-control"style="width:250px">
                                        <option>--Buluduğunuz ilçeyi Seçiniz--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions center">

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button class="btn btn-primary"> Kayıt Ol</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>


    </div>


@stop


@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="country"]').on('change',function(){
                var countryID = jQuery(this).val();
                if(countryID)
                {
                    jQuery.ajax({
                        url : 'dropdownlist/getstates/' +countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="state"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="state"]').empty();
                }
            });
        });
    </script>


@stop