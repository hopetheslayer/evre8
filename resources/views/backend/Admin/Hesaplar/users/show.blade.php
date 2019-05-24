@extends('backend.Admin.admin-panel')

@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="bordered-layout-colored-controls">Seçtiğin Kullanıcı =  {{ $user->name }}  {{$user->sname}}</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    <form class="form form-horizontal form-bordered" method="post" action="{{route('hesaplar.users.kaydet')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-info"></i>Danışan Bilgileri</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput1">Adınız : </label>
                                        <div class="col-md-9">

                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput2">Soyadınız :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="  {{ $user->sname}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput3">Kullanıcı Adınız :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->kulad}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput4">T.C Kimlik No :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->tcno}}">
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
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->email}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput6">Dogum Tarihi :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->dt}}">
                                        </div>
                                    </div>

                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control">Telefon Numarası :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->telno}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Gizli Soru :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->gsor}}">
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Adres :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  readonly="readonly" value="{{ $user->adres}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <a href="{{route('hesaplar.users')}}" class="btn btn-raised btn-warning mr-1">
                                Geri
                            </a>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>



@stop