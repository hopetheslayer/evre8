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
                <a  class="btn btn-raised gradient-mint white float-left" href="{{route('Calisma-Saatleri.create')}}">Çalışma Zamanı Ekle </a>
                <div class="" id='calendar'></div>
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

                header: {
                    left: '',
                    center: 'title',
                    right: 'prev,next today myCustomButton'
                },

                events : [

                        @foreach($calisma_saatleri as $hour)
                    {
                        title : '{{ $hour->psikolog->name . ' ' . $hour->psikolog->sname }}',
                        start : '{{ $hour->date . ' ' . $hour->start_time }}',
                        end : '{{ $hour->date . ' ' . $hour->finish_time }}',
                        url : '{{ route('Calisma-Saatleri.edit', $hour->id) }}'
                    },
                    @endforeach

                ]

            })
        });
    </script>
@stop


