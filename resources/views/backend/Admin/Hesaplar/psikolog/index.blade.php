@extends('backend.Admin.Layout.table')

@section('content')

    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Psikolog Yönetim <span class="badge badge-secondary">{{$psikologs->count()}}</span></h4>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-block card-dashboard">
                            <div id="DataTables_Table_10_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                <div class="pull-right">
                                    <a href="{{route('hesaplar.psikolog.yeni')}}" class="btn btn-outline-dark"><span>Psikolog Ekle</span> </a>
                                </div>
                                <table class="table table-striped table-bordered file-export dataTable" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="text-center">User_Id</th>
                                        <th class="text-center">Adı</th>
                                        <th class="text-center">Soy İsim</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Telefon No:</th>

                                        <th class="text-center">Aktif mi ? </th>
                                        <th class="text-center">En Son Giriş Tarihi</th>
                                        <th class="text-center">Ip Adresi</th>
                                        <th  class="text-center" style="width:300px;">Ayarlar</th>
                                    </tr>
                                    </thead>
                                    @foreach($psikologs as $psikolog)
                                        <tbody>
                                        <tr class="text-center">
                                            <td>{{$psikolog->id }}</td>
                                            <td class="table-primary">{{ $psikolog->name}}</td>
                                            <td class="table-warning">{{ $psikolog->sname}}</td>
                                            <td class="table-info">{{ $psikolog->email}}</td>
                                            <td class="table-info">{{ $psikolog->telno}}</td>
                                            <td class="table-light">
                                                @if($psikolog->verified ==1)
                                                    <span class="btn btn-success"> aktif</span>
                                                @else
                                                    <span class="btn btn-warning">pasif</span>
                                                @endif
                                            </td>
                                            <td>{{$psikolog->last_login_at}}</td>
                                            <td>{{$psikolog->last_login_ip}}</td>
                                            <td>
                                                <div class="col text-center">
                                                    <a class="btn-xs btn-info" href="{{ route('hesaplar.psikolog.goster',$psikolog->id) }}">Göster</a><br>
                                                </div>
                                                <div style="margin-top: 5px;" class="col text-center">
                                                    <a class="btn-xs btn-primary" href="{{ route('hesaplar.psikolog.duzenle',$psikolog->id) }}">Düzenle</a><br><br>
                                                </div>
                                                <div class="col text-center">
                                                    {!! Form::open(['method' => 'DELETE','route' => ['hesaplar.psikolog.sil', $psikolog->id],'style'=>'display:inline']) !!}
                                                    <button class="btn-xs btn-danger">Sil</button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
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