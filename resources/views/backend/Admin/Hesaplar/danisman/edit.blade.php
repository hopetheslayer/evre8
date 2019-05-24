@extends('backend.Admin.admin-panel')

@section('content')
    @include('backend.Psikolog.layout.partials.error')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="bordered-layout-colored-controls">Danışman Düzenle</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    <form class="form form-horizontal form-bordered" method="post" action="{{route('hesaplar.danisman.guncelle',$danisman->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-info"></i>Danışman Bilgileri</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput1">Adınız : </label>
                                        <div class="col-md-9">

                                            {!! Form::text('name', $danisman->name, array('placeholder' => 'Adınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput2">Soyadınız :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('sname', $danisman->sname, array('placeholder' => 'Soyadınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput3">Kullanıcı Adınız :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('kulad', $danisman->kulad, array('placeholder' => 'Kullanıcı Adınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput4">T.C Kimlik No :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('tcno', $danisman->tcno, array('placeholder' => '11 haneli T.C Kimlik No','class' => 'form-control border-primary')) !!}
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
                                            {!! Form::text('email', $danisman->email, array('placeholder' => 'Email','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput6">Dogum Tarihi :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('dt', $danisman->dt, array('placeholder' => 'Dogum Tarihi','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control">Telefon Numarası :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('telno', $danisman->telno, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Gizli Soru :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('gsor', $danisman->gsor, array('placeholder' => 'Gizli Soru ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Adres :</label>
                                        <div class="col-md-9">

                                            {!! Form::textarea('adres', $danisman->adres, array('placeholder' => 'Adres','class' => 'form-control','style'=>'height:100px')) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="form-section"><i class="ft-user-plus"></i> Hesap Bilgileri</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userinput5">Aktif mi ? :</label>
                                    <div class="col-md-9">
                                        <label>
                                            <input type="checkbox" name="verified" value="1" {{$danisman->verified ? 'checked' : ''}}> Aktif mi
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userinput5">yasaklı mı ?  :</label>
                                    <div class="col-md-9">
                                        <label>
                                            @if($danisman->ban == 1)
                                                <input type="checkbox" name="ban-durum" value="1" {{$danisman->ban ? 'checked' : ''}}> evet
                                            @else
                                                <input type="checkbox" name="ban-durum" value="0" {{$danisman->ban ? 'checked' : ''}}> hayır
                                            @endif
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-actions right">
                            <a href="{{route('hesaplar.danisman.users')}}" class="btn btn-raised btn-warning mr-1">
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