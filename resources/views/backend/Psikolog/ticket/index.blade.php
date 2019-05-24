@extends('backend.Psikolog.layout.anapanel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2> Sistemde bulunan Destek Biletleriniz</h2></i>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="panel panel-default">


                                <div class="panel-body">
                                    @if ($tickets->isEmpty())
                                        <p style="text-align:center; font-size: 23px;"><u>Sistemde bulunan herhangi bir destek bileti bulunmamaktadır.<br> Bir Probleminiz mi var Destek bileti oluştur</u></p>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <a class="btn btn-primary" href="{{route('Destek-Biletlerim.create')}}">Destek Bileti Oluştur</a>

                                        </div>
                                        <br><br>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <a class="btn btn-info" href="{{ route('psikolog.dashboard') }}"> Geri</a>

                                        </div>
                                    @else
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Konu</th>
                                                <th>Durum</th>
                                                <th>Oluşturulma Tarihi</th>
                                                <th>En Son Güncellenme Tarihi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($tickets as $ticket)
                                                <tr>
                                                    <td>
                                                        @foreach ($categories as $category)
                                                            @if ($category->id === $ticket->category_id)
                                                                {{ $category->name }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('Destek-Biletlerim/'. $ticket->ticket_id) }}">
                                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if ($ticket->status === 'Open')
                                                            <button class="btn btn-success">{{ $ticket->status }}</button>
                                                        @else
                                                            <span class="btn btn-danger">{{ $ticket->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>{{$ticket->created_at}}</td>
                                                    <td>{{ $ticket->updated_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            @if ($ticket->status === 'Closed')

                                                <a class="btn btn-primary" href="{{route('Destek-Biletlerim.create')}}">Destek Bileti Oluştur</a>
                                            @endif



                                        </div>
                                        {{ $tickets->render() }}
                                    @endif
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('js')

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}
@stop


