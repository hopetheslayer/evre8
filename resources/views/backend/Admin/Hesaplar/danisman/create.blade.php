@extends('backend.Admin.admin-panel')
@section('content')

    @include('backend.Psikolog.layout.partials.error')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="bordered-layout-colored-controls">Danışman Ekle</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    <form class="form form-horizontal form-bordered" method="post" action="{{route('hesaplar.danisman.kaydet')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-info"></i>Danışman Bilgileri</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput1">Adınız : </label>
                                        <div class="col-md-9">

                                            {!! Form::text('name', null, array('placeholder' => 'Adınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput2">Soyadınız :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('sname', null, array('placeholder' => 'Soyadınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput3">Kullanıcı Adınız :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('kulad', null, array('placeholder' => 'Kullanıcı Adınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput4">T.C Kimlik No :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('tcno', null, array('placeholder' => '11 haneli T.C Kimlik No','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="form-section"><i class="ft-mail"></i> İletişim Bilgileri</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput5">Email :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput6">Dogum Tarihi :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('dt', null, array('placeholder' => 'Dogum Tarihi','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control">Telefon Numarası :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('telno', null, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Password :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('password', null, array('placeholder' => 'Password ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Gizli Soru :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('gsor', null, array('placeholder' => 'Gizli Soru ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Adres :</label>
                                        <div class="col-md-9">
                                            {!! Form::textarea('adres', null, array('placeholder' => 'Adres','class' => 'form-control','style'=>'height:100px')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <a href="{{route('psikolog.users')}}" class="btn btn-raised btn-warning mr-1">
                                <i class="ft-x"></i> Geri
                            </a>
                            <button type="submit" class="btn btn-raised btn-primary">
                                <i class="fa fa-check-square-o"></i> Kaydet
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>



@endsection