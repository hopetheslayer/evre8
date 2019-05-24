@extends('backend.Psikolog.layout.anapanel')


@push('css')

@endpush


@section('content')

    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Danışan Bilgileri</h3>
                    </div>


                    <div class="card-body collapse show">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-bordered table-striped">
                                                <tbody><tr>
                                                    <th>Danışan Ad</th>
                                                    <td>{{$musteri->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Danışan Soyad</th>
                                                    <td>{{$musteri->sname}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telefon</th>
                                                    <td>{{$musteri->telno}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{$musteri->email}}</td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </div><!-- Nav tabs -->
                                    <hr>
                                    <div class="card-header">
                                        <h3 class="card-title text-center">Randevular</h3>
                                    </div>

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane active" id="appointments">
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                                <div class="dt-buttons btn-group">          <a class="btn btn-secondary buttons-copy buttons-html5 btn-outline-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" href="#"><span>Copy</span></a> <a class="btn btn-secondary buttons-csv buttons-html5 btn-outline-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" href="#"><span>CSV</span></a> <a class="btn btn-secondary buttons-excel buttons-html5 btn-outline-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" href="#"><span>Excel</span></a> <a class="btn btn-secondary buttons-pdf buttons-html5 btn-outline-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" href="#"><span>PDF</span></a> <a class="btn btn-secondary buttons-print btn-outline-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" href="#"><span>Print</span></a> </div>

                                                <table class="table table-bordered table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                    <tr class="text-center" role="row ">
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" >Randevu Konusu</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45px;">Danısan Ad</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 71px;">Danısan Soyad</th>

                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 129px;">Telefon</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 129px;">Email</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;">Psikolog Ad</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 70px;">Psikolog Soyad</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 104px;">Randevu Başlangıc Tarihi</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 104px;">Randevu Bitiş Tarihi</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 150px;">Ayarlar</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($randevus as $randevu)
                                                            <tr data-entry-id="{{ $randevu->id }}">

                                                        <td>{{ $randevu->comments or ''}}</td>
                                                        <td>{{ $randevu->users->name or '' }}</td>
                                                        <td>{{ $randevu->users->sname or '' }}</td>
                                                        <td>{{ $randevu->users->telno or '' }}</td>
                                                        <td>{{ $randevu->users->email or '' }}</td>
                                                        <td>{{ isset($randevu->psikolog) ? $randevu->psikolog->name : '' }}</td>
                                                        <td>{{ isset($randevu->psikolog) ? $randevu->psikolog->sname : '' }}</td>
                                                        <td>{{ $randevu->start_time or '' }}</td>
                                                        <td>{{ $randevu->finish_time or ''}}</td>

                                                                <td>
                                                                    <a href="{{route('Takvim.show',$randevu->id)}}" class="info p-0" data-original-title="" title="">
                                                                        <i class="ft-user font-medium-3 mr-2"></i>
                                                                    </a>
                                                                    <a href="{{route('Takvim.edit',$randevu->id)}}" class="success p-0" data-original-title="" title="">
                                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                                    </a>

                                                                    {!! Form::open(['method' => 'DELETE','route' => ['Takvim.destroy', $randevu->id],'style'=>'display:inline']) !!}

                                                                    <button class="buttonx ft-x-circle font-medium-3 mr-2 "></button>
                                                                    {!! Form::close() !!}
                                                                    <style>
                                                                        .buttonx{
                                                                            background-color: Transparent;
                                                                            background-repeat:no-repeat;
                                                                            border: none;
                                                                            cursor:pointer;
                                                                            overflow: hidden;
                                                                            outline:none;
                                                                        }
                                                                    </style>
                                                                </td>
                                                            </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                                <div class="dataTables_info float-right" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                                <div class="form-actions float-left">
                                                    <a href="{{route('Danisan.index')}}" class="btn btn-raised btn-warning mr-1">
                                                        Geri
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@push('js')
    <script type="text/javascript" src="{{ asset('8ev') }}"></script>

@endpush

