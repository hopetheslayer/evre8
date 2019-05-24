@extends('backend.Psikolog.layout.anapanel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2> Ticket Numarası: # {{ $ticket->ticket_id }} - <b>{{ $ticket->title }}</b></h2></i>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="panel panel-default">


                                <div class="panel-body">


                                    <div class="ticket-info">
                                        <p style="font-size: 25px;">Konu Mesajı:

                                            {!! $ticket->message !!}</p>
                                        <hr>
                                        <p style="font-size: 25px;">Kategori: {{ $category->name }}</p>
                                        <hr>
                                        <p style="font-size: 25px;">
                                            @if ($ticket->status === 'Open')
                                                Durum: <span class="btn-xs btn-success">{{ $ticket->status }}</span>
                                        </p>
                                        <hr>
                                        <p style="font-size: 25px;">Oluşturulma Zamanı: {{ $ticket->created_at->diffForHumans() }}</p>
                                        <hr>
                                        <p style="font-size: 25px;">Konuya Ek Mesajlarınız</p>
                                        <div class="comments">
                                            @foreach ($comments as $comment)
                                                <div class="panel panel-@if($ticket->psikolog->id === $comment->psikolog_id) {{"default"}}@else{{"success"}}@endif">
                                                    <div class="panel panel-heading">
                                                        <div style="border-style: dashed; border-width: 1px;" class="card-text">
                                                            <div style="margin: 10px;">
                                                                <h5>{{ $comment->psikolog->name}} {{ $comment->psikolog->sname }}

                                                                    <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                                                                </h5>
                                                                <hr>
                                                                Mesaj İçeriği : <b>{{ $comment->comment }}</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>



                                    <div style="margin-top: 50px;" class="comment-form">
                                        <form action="{{ url('comment') }}" method="POST" class="form">
                                            {!! csrf_field() !!}

                                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                            <div class="form-line{{ $errors->has('comment') ? ' has-error' : '' }}">
                                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>


                                            </div>

                                            <div style="margin-top: 15px;" class="form-group">
                                                <button type="submit" class="btn btn-primary">Gönder</button>
                                            </div>
                                        </form>
                                    </div>



                                    @else
                                        Durum: <span class="btn-xs btn-danger">
                        Destek Biletiniz Onal Patent destek tarafından cevaplandırıldığı için kapatılmıştır. Gerekli olan Açıklama Aşağıdadır.
                        </span>
                                        <hr>
                                        <p style="font-size: 25px;">Tarafımızdan Gelen Mesajlar</p>
                                        <hr>
                                        @foreach($comm as $com)
                                            <div class="panel panel-heading">
                                                <h5>{{ $com->admin->name }} {{ $com->admin->sname }}
                                                    <span class="pull-right">{{ $com->created_at->diffForHumans() }}</span>
                                                </h5>
                                            </div>

                                            {{$com->comment}}
                                        @endforeach

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
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}
@stop


