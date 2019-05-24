@extends('backend.Psikolog.layout.anapanel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/vendors/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/vendors/css/fullcalendar.min.css">
@stop


@section('content')


    <div class="card">
        <div class="card-body">
            <div class="card-block">
                <a  class="btn btn-raised gradient-mint white float-left" href="{{route('Takvim.create')}}">Randevu Ekle </a>
                <div class="" id='calendar'></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center"><u>Liste Görünümü</u></h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <table class="table table-responsive-md-md text-center">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Danışan</th>
                                <th>D.Soyadı</th>
                                <th>Telefon</th>
                                <th>Psikolog</th>
                                <th>P.Soyadı</th>
                                <th>Başlangıc Zamanı</th>
                                <th>Bitiş Zamanı</th>
                                <th>Notlar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($randevular as $randevu)
                            <tr>

                                <td>{{$randevu->id}}</td>
                                <td>{{$randevu->users->name}}</td>
                                <td>{{$randevu->users->sname}}</td>
                                <td>{{$randevu->users->telno}}</td>
                                <td>{{$randevu->psikolog->name}}</td>
                                <td>{{$randevu->psikolog->sname}}</td>
                                <td>{{$randevu->start_time}}</td>
                                <td>{{$randevu->finish_time}}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>



    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                themeSystem:'bootstrap',
                height: 800,
                header: {
                    left: '',
                    center: 'title',
                    right: 'prev,next today'
                },

                events : [

                        @foreach($randevular as $randevu)
                    {
                        title : '{{ $randevu->users->name . ' ' . $randevu->users->sname }}',
                        start : '{{ $randevu->date . ' ' . $randevu->start_time }}',
                        end : '{{ $randevu->date . ' ' . $randevu->finish_time }}',
                        url : '{{ route('Takvim.edit', $randevu->id) }}'
                    },
                    @endforeach

                ]

            })
        });
    </script>
@stop
