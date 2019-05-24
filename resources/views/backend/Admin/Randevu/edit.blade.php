@extends('backend.Admin.admin-panel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@endsection

@section('content')


    {!! Form::model($randevu, ['method' => 'PATCH','route' => ['Admin-randevular.update', $randevu->id]]) !!}
    @csrf
    @include('backend.Psikolog.layout.partials.error')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center" id="bordered-layout-card-center">Randevu Düzenle</h4>
                </div>
                <div class="card-body">
                    <div class="px-3">

                        <form class="form form-horizontal form-bordered">
                            <h4 class="form-section"><i class="ft-mail"></i> İletişim Bilgileri</h4>

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Danışan Ad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" readonly="readonly"  value="{{$randevu->users->name}}"  class="form-control"  >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput2">Danışan Soyad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput2" readonly="readonly"  value="{{$randevu->users->sname}}"  class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput3">Danışan Telefon</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput3"  value="{{$randevu->users->telno}}"  class="form-control"  name="telno">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Danışan Adres</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput4"  value="{{$randevu->users->adres}}"  class="form-control"  name="adres">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Danışan En son Baglandıgı Cihaz</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" readonly="readonly"  value="{{$randevu->users->last_login_at}}"  class="form-control"  >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Danışan En Son bAglandıgı İp</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" readonly="readonly"  value="{{$randevu->users->last_login_ip}}"  class="form-control"  >
                                    </div>
                                </div>


                            </div>
                            <h4 class="form-section"><i class="ft-mail"></i> Randevu Bilgileri</h4>

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Psikolog Ad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1"  value="{{$randevu->psikolog->name}}" class="form-control" name="pname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput2">Psikolog Soyad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput2"  value="{{$randevu->psikolog->sname}}"  class="form-control"  name="psname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput3">Randevu Başlangıç Zamanı</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput3"   value="{{$randevu->start_time}}"  class="form-control"  name="pstart_time">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Randevu Bitiş Zamanı</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput4"   value="{{$randevu->finish_time}}"  class="form-control"  name="pfinish_time">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Randevu Not</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput4"  value="{{$randevu->comments}}"  class="form-control"  name="comments">
                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <a style="margin-top: 15px;" class="btn btn-dark " href="{{route('Admin-randevular.index')}}">Geri Dön</a>
                                {!! Form::submit(trans('Güncelle'), ['class' => 'btn btn-success ', 'style'=>'margin-left:15px; margin-top:15px;']) !!}

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}

@endsection
