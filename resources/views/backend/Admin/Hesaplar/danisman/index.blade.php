@extends('backend.Admin.admin-panel')

@section('content')



    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title text-center">Danışman Yönetim <span class="badge badge-secondary">{{$danismans->count()}}</span></h4>
                    </div>

                    <div class="card-body collapse show">

                        <div class="card-block card-dashboard">
                            <div class="pull-right">
                                <a href="{{route('hesaplar.danisman.yeni')}}" class="btn btn-outline-dark"><span>Danisman Ekle</span> </a>
                            </div>
                            <table class="table table-striped table-bordered file-export">
                                <thead>
                                <tr>
                                    <th class="text-center">User_Id</th>
                                    <th class="text-center">Adı</th>
                                    <th class="text-center">Soy İsim</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Kullanıcı Adı</th>
                                    <th class="text-center">Adres</th>
                                    <th class="text-center">Telefon Numarası</th>
                                    <th class="text-center">Aktif mi ? </th>
                                    <th class="text-center">En Son Giriş Tarihi</th>
                                    <th class="text-center">Ip Adresi</th>
                                    <th  class="text-center" style="width:300px;">Ayarlar</th>
                                </tr>
                                </thead>

                                @foreach($danismans as $danisman)
                                    <tbody>
                                    <tr>
                                        <td>{{$danisman->id }}</td>
                                        <td class="table-primary">{{ $danisman->name}}</td>
                                        <td class="table-warning">{{ $danisman->sname}}</td>
                                        <td class="table-info">{{ $danisman->email}}</td>
                                        <td class="table-light">{{ $danisman->kulad}}</td>
                                        <td class="table-primary">{{ $danisman->adres}}</td>
                                        <td class="table-info">{{ $danisman->telno}}</td>
                                        <td class="table-light">
                                            @if($danisman->verified ==1)
                                                <span class="btn btn-success"> aktif</span>
                                            @else
                                                <span class="btn btn-warning">pasif</span>
                                            @endif
                                        </td>
                                        <td>{{$danisman->last_login_at}}</td>
                                        <td>{{$danisman->last_login_ip}}</td>
                                        <td>
                                            <div class="col text-center">
                                                <a class="btn-xs btn-info" href="{{ route('hesaplar.danisman.goster',$danisman->id) }}">Göster</a><br>
                                            </div>
                                            <div style="margin-top: 5px;" class="col text-center">
                                                <a class="btn-xs btn-primary" href="{{ route('hesaplar.danisman.duzenle',$danisman->id) }}">Düzenle</a><br><br>
                                            </div>
                                            <div class="col text-center">
                                                {!! Form::open(['method' => 'DELETE','route' => ['hesaplar.danisman.sil', $danisman->id],'style'=>'display:inline']) !!}
                                                <button class="btn-xs btn-danger">Sil</button>
                                                {!! Form::close() !!}
                                            </div>
                                    </tr>

                                    @endforeach
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop