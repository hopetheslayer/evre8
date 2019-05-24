@extends('backend.Psikolog.layout.table')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')

    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Danışanlar <span class="badge badge-secondary">{{$randevu->count()}}</span></h4>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-block card-dashboard">
                            <table class="table table-striped table-bordered file-export">
                                <thead>
                                <tr>
                                    <th></th>

                                    <th>Ad</th>
                                    <th>Soyad</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Ayarlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($randevu as $ran)
                                    <tr>

                                        <td>{{$ran->id }}</td>

                                        <td>{{$ran->users->name }}</td>
                                        <td>{{$ran->users->sname }}</td>
                                        <td>{{$ran->users->telno }}</td>
                                        <td>{{$ran->users->email }}</td>
                                        <td>
                                            <a href="{{route('Danisan.show',$ran->id)}}" class="info p-0" data-original-title="" title="">
                                                <i class="ft-user font-medium-3 mr-2"></i>
                                            </a>
                                            <a href="{{route('Danisan.edit',$ran->id)}}" class="success p-0" data-original-title="" title="">
                                                <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                            </a>



                                            {!! Form::open(['method' => 'DELETE','route' => ['Danisan.destroy', $ran->id],'style'=>'display:inline']) !!}

                                            <button class="buttonx ft-x-circle font-medium-3 mr-2 "></button>
                                            {!! Form::close() !!}
                                        </td>
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


@endsection


@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}
@stop


