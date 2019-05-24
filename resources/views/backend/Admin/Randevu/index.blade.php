@extends('backend.Admin.admin-panel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@endsection

@section('content')
    <section id="fabs-examples">


        <div class="row match-height">
            @foreach($randevu as $r)
            <div  class="col-lg-3 col-md-12 col-sm-12">
                <div class="card card-custom bg-white border-white border-0">
                    <div  class="card-body" style="overflow-y: auto; margin: 15px;">
                        <p class="card-title">Psikolog Ad: {{$r->psikolog->name}}</p>

                        <p class="card-title">Danısan Ad: {{$r->users->name}} {{$r->users->sname}}</p>



                        <p class="card-title">Başlangıç Zamanı : {{date('d-m-Y H:i', strtotime($r->start_time))}}</p>

                        <p class="card-title">Bitiş Zamanı : {{date('d-m-Y H:i', strtotime($r->finish_time))}}</p>

                        <p class="text-center"><b>Randevu Notu</b></p>

                        <div style="border-style: dashed;" class="card-text">
                            <div style="margin: 10px;">
                                {{$r->comments}}
                            </div>
                        </div>

                        <div class="card-footer">

                            <div style="margin-top: 5px;" class="col text-center">
                                <a class="btn btn-primary" href="{{ route('Admin-randevular.edit',$r->id) }}">Düzenle</a><br><br>
                            </div>
                            <div class="col text-center">
                                {!! Form::open(['method' => 'DELETE','route' => ['Admin-randevular.destroy', $r->id],'style'=>'display:inline']) !!}
                                <button class="btn-sm btn-danger">Sil</button>
                                {!! Form::close() !!}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    <style>
        .card-custom {
            overflow: hidden;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
        }

    </style>


@endsection



@section('js')

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}

@endsection
