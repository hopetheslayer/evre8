@extends('backend.Admin.admin-panel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@endsection

@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="text-center">Destek Biletleri</h2>

                        </div>

                        <div class="panel-body">
                            @if ($tickets->isEmpty())
                                <p class="text-center">Sistemde Hiç oluşmuş Destek Bileti Yok.</p>
                            @else
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Last Updated</th>
                                        <th style="text-align:center" colspan="2">Actions</th>
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
                                                <a href="{{ route('admin.ticket.show', $ticket->ticket_id) }}">
                                                    #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                                </a>
                                            </td>
                                            <td>
                                                @if ($ticket->status === 'Open')
                                                    <span class="btn btn-success">{{ $ticket->status }}</span>
                                                @else
                                                    <span class="btn btn-danger">{{ $ticket->status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $ticket->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.ticket.show', $ticket->ticket_id) }}" class="btn btn-primary">Yorum Yap</a>
                                            </td>
                                            <td>
                                                <form action="{{ url('close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                                    {!! csrf_field() !!}
                                                    <button type="submit" class="btn btn-danger">Postu Kapat</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{ $tickets->render() }}
                            @endif
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

@endsection
