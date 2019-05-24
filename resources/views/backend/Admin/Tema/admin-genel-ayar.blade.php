@extends('backend.Admin.admin-panel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@endsection

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="striped-row-layout-basic">Tema Genel Ayarlar</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    <form method="post" action="{{route('tema.ayar.kaydet')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i>Header Alanı</h4>
                            @foreach($ayarlar as $a)
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">Adres ayarları</label>
                                <div class="col-md-9">
                                    {!! Form::text('adres', $a->adres, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Telefon ayarları</label>
                                <div class="col-md-9">
                                    {!! Form::text('telefon', $a->telefon, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                <div class="col-md-9">
                                    {!! Form::text('mail', $a->mail, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Telefon 2 ayarları</label>
                                <div class="col-md-9">
                                    {!! Form::text('telefon_2', $a->telefon_2, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control">Header Logo</label>
                                <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('logo', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>

                            </div>
                                @if($a->logo !=null)
                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Yüklenilen Görsel</label>
                                    <div class="col-md-9">


                                        <img  src="/uploads/theme/{{$a->logo}}" style="height: 100px; width: 150px; " >

                                    </div>

                                </div>
                                @endif
                            <h4 class="form-section"><i class="ft-file-text"></i> Footer Alanı</h4>

                            <div class="form-group row">
                                <label class="col-md-3 label-control">Footer Logo</label>
                                <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('flogo', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                            </div>
                                @if($a->logo !=null)
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Yüklenilen Görsel</label>
                                        <div class="col-md-9">


                                            <img  src="/uploads/theme/{{$a->flogo}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Footer Yazı</label>
                                <div class="col-md-9">
                                    {!! Form::text('fyazi', $a->fyazi, array('placeholder' => 'Footer Yazı ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">İletişim Bilgi Adres</label>
                                <div class="col-md-9">
                                    {!! Form::text('filetisim', $a->filetisim, array('placeholder' => 'İletişim Bilgi Adres','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>



                        </div>
                        @endforeach
                        <div class="form-actions text-center">
                            {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}

@endsection
