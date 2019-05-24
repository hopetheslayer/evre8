@extends('backend.Psikolog.layout.anapanel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">
@stop


@section('content')


    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center" id="bordered-layout-card-center">Randevu Bilgileri</h4>
                </div>
                <div class="card-body">
                    <div class="px-3">

                        <form class="form form-horizontal form-bordered">
                            <h4 class="form-section"><i class="ft-mail"></i> İletişim Bilgileri</h4>

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Danışan Ad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" readonly="readonly" value="{{$randevular->users->name}}"  class="form-control"  name="fullname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput2">Danışan Soyad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput2" readonly="readonly" value="{{$randevular->users->sname}}"  class="form-control" name="title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput3">Danışan Telefon</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput3" readonly="readonly" value="{{$randevular->users->telno}}"  class="form-control"  name="company">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Danışan Adres</label>
                                    <div class="col-md-9">
                                        <input type="email" id="eventRegInput4" readonly="readonly" value="{{$randevular->users->adres}}"  class="form-control"  name="email">
                                    </div>
                                </div>

                            </div>
                            <h4 class="form-section"><i class="ft-mail"></i> Randevu Bilgileri</h4>

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Psikolog Ad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" readonly="readonly" value="{{$randevular->psikolog->name}}" class="form-control" name="fullname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput2">Psikolog Soyad</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput2" readonly="readonly" value="{{$randevular->psikolog->sname}}"  class="form-control"  name="title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput3">Randevu Başlangıç Zamanı</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput3" readonly="readonly"  value="{{$randevular->start_time}}"  class="form-control"  name="company">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Randevu Bitiş Zamanı</label>
                                    <div class="col-md-9">
                                        <input type="email" id="eventRegInput4" readonly="readonly"  value="{{$randevular->finish_time}}"  class="form-control"  name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Randevu Not</label>
                                    <div class="col-md-9">
                                        <input type="email" id="eventRegInput4" readonly="readonly"  value="{{$randevular->comments}}"  class="form-control"  name="email">
                                    </div>
                                </div>

                            </div>

                                <div class="text-center">
                              <a style="margin-top: 15px;" class="btn btn-dark " href="{{route('Takvim.index')}}">Geri Dön</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


