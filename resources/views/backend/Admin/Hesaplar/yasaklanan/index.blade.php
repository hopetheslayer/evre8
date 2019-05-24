@extends('backend.Admin.Layout.table')

@section('content')

    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Yasaklılar Yönetim <span class="badge badge-secondary">{{$users->count()}}</span></h4>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-block card-dashboard">
                            <div id="DataTables_Table_10_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                <table class="table table-striped table-bordered file-export dataTable" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="text-center">User_Id</th>
                                        <th class="text-center">Adı</th>
                                        <th class="text-center">Soy İsim</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Telefon Numarası</th>
                                        <th class="text-center">Aktif mi ? </th>
                                        <th class="text-center">Oluşturulma Tarihi</th>

                                        <th class="text-center">Yasaklı mı ? </th>
                                        <th class="text-center">En Son Giriş Tarihi</th>
                                        <th class="text-center">Ip Adresi</th>
                                        <th  class="text-center" style="width:300px;">Ayarlar</th>
                                    </tr>
                                    </thead>
                                    @foreach($users as $user)
                                        <tbody class="text-center">
                                        <tr>
                                            <td>{{$user->id }}</td>
                                            <td class="table-primary">{{ $user->name}}</td>
                                            <td class="table-warning">{{ $user->sname}}</td>
                                            <td class="table-info">{{ $user->email}}</td>
                                            <td class="table-info">{{ $user->telno}}</td>
                                            <td class="table-light">
                                                @if($user->verified ==1)
                                                    <span class="btn btn-success"> aktif</span>
                                                @else
                                                    <span class="btn btn-warning">pasif</span>
                                                @endif
                                            </td>
                                            <td class="table-warning ">{{ $user->created_at}}</td>
                                            <td>
                                                @if($user->ban ==0)
                                                    <span class="btn btn-success">Yasaklı değil</span>
                                                    @else
                                                    <span class="btn btn-danger">Yasaklı Listesinde</span>
                                                    @endif
                                            </td>
                                            <td class="table-light">{{$user->last_login_at}}</td>
                                            <td>{{$user->last_login_ip}}</td>
                                            <td class="table-light">
                                                <div class="col text-center ">
                                                    <a class="btn-xs btn-info" href="{{ route('yasak.users.goster',$user->id) }}">Göster</a><br>
                                                </div>
                                                <div style="margin-top: 5px;" class="col text-center">
                                                    <a class="btn-xs btn-primary" href="{{ route('yasak.users.duzenle',$user->id) }}">Düzenle</a><br><br>
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