@extends('backend.Admin.Layout.table')

@section('content')

    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Danışanlar Yönetim <span class="badge badge-secondary">{{$users->count()}}</span></h4>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-block card-dashboard">
                            <div id="DataTables_Table_10_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="pull-right">
                                    <a href="{{route('hesaplar.users.yeni')}}" class="btn btn-outline-dark"><span>Danışan Ekle</span> </a>
                                </div>

                                <table class="table table-striped table-bordered file-export dataTable" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                                    <thead>
                                    <tr role="row">
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
                                        @foreach($users as $user)
                                    <tbody>
                                    <tr>
                                        <td>{{$user->id }}</td>
                                        <td class="table-primary">{{ $user->name}}</td>
                                        <td class="table-warning">{{ $user->sname}}</td>
                                        <td class="table-info">{{ $user->email}}</td>
                                        <td class="table-light">{{ $user->kulad}}</td>
                                        <td class="table-primary">{{ $user->adres}}</td>
                                        <td class="table-info">{{ $user->telno}}</td>
                                        <td class="table-light">
                                            @if($user->verified ==1)
                                                <span class="btn btn-success"> aktif</span>
                                            @else
                                                <span class="btn btn-warning">pasif</span>
                                            @endif
                                        </td>
                                        <td>{{$user->last_login_at}}</td>
                                        <td>{{$user->last_login_ip}}</td>
                                        <td>
                                            <div class="col text-center">
                                                <a class="btn-xs btn-info" href="{{ route('hesaplar.users.goster',$user->id) }}">Göster</a><br>
                                            </div>
                                            <div style="margin-top: 5px;" class="col text-center">
                                                <a class="btn-xs btn-primary" href="{{ route('hesaplar.users.duzenle',$user->id) }}">Düzenle</a><br><br>
                                            </div>
                                            <div class="col text-center">
                                                {!! Form::open(['method' => 'DELETE','route' => ['hesaplar.users.sil', $user->id],'style'=>'display:inline']) !!}
                                                <a class="btn-xs btn-danger">Sil</a>
                                                {!! Form::close() !!}
                                            </div>
                                    </tr>
                                    </tbody>
                                            @endforeach
                                </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


@stop