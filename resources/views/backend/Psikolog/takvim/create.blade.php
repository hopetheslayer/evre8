@extends('backend.Psikolog.layout.anapanel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">
@stop


@section('content')

    @yield('backend.Psikolog.layout.partials.error')

    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center" id="bordered-layout-card-center">Randevu Bilgileri</h4>
                </div>
                <div class="card-body">
                    <div class="px-3">

                        <form class="form form-horizontal form-bordered" method="post" action="{{route('Takvim.store')}}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="form-section"><i class="ft-mail"></i> Danışan Belirle</h4>
                            @include('backend.Psikolog.layout.partials.error')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Danışan Belirle</label>
                                    <div class="col-md-9">
                                        <select id="user_id" name="user_id" class="form-control select2 col-md-9" required>
                                            <option value="">Lütfen Danışan Seçiniz</option>
                                            @foreach($randevu as $client)
                                                <option value="{{ $client->id }}" {{ (old("client_id") == $client->id ? "selected":"") }}>{{ $client->users->name }} {{ $client->users->sname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <h4 class="form-section"><i class="ft-mail"></i> Psikolog Belirle</h4>

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Psikolog</label>
                                    <div class="col-md-9">
                                        <select id="psikolog_id" name="psikolog_id" class="form-control select2 col-md-9" required>
                                            <option value="">Lütfen Psikolog Seçiniz</option>
                                            @foreach($psikolog as $p)
                                                <option value="{{ $p->id }}" {{ (old("client_id") == $p->id ? "selected":"") }}>{{ $p->name }} {{ $p->sname }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Psikolog</label>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            {{ Form::text('date', '', array('id' => 'datepicker')) }}

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Başlangıç Zamanı</label>
                                    <div class="col-md-9">


                                            <div class="form-inline">
                                                <select name="starting_hour" id="starting_hour" class="form-control" required style="max-width: 124px; margin-right: 5px;">
                                                    <option value="-1" selected></option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00<">17:00</option>
                                                    <option value="18:00<">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="23:00">23:00</option>

                                                </select>

                                            </div>


                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">Randevu Not</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput4" style="height: 125px;"    class="form-control"  name="comments">
                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <a style="margin-top: 15px;" class="btn btn-dark " href="{{route('Takvim.index')}}">Geri Dön</a>
                                {!! Form::submit(trans('Randevu Ekle'), ['class' => 'btn btn-success ', 'style'=>'margin-left:15px; margin-top:15px;']) !!}

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="/picker/timepicker.js"></script>

    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                // dateFormat: 'dd/mm/yyyy',
                dateFormat: "{{ config('app.date_format_js')}}",
                changeMonth: true,
                changeYear: true});
        });
    </script>




@endsection




