@extends('backend.Psikolog.layout.anapanel')


@section('css')



@stop

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="striped-row-layout-icons">Çalışma Saati Düzenle</h4>
                <hr>
            </div>
            <div class="card-body">

                <div class="px-3">
                    {!! Form::model($working_hour, ['method' => 'POST', 'route' => ['Calisma-Saatleri.update', $working_hour->id]]) !!}
                    @csrf
                    {{ method_field('PUT')}}
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput1">Psikolog Ad</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        {!! Form::text('', $working_hour->psikolog->name, ['class' => 'form-control date', 'readonly'=> 'readonly', 'placeholder' => '', 'required' => '']) !!}
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput2">Psikolog Soyad</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        {!! Form::text('', $working_hour->psikolog->sname, ['class' => 'form-control date', 'readonly'=> 'readonly', 'placeholder' => '', 'required' => '']) !!}
                                        <div class="form-control-position">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        {!! Form::text('date', old('date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                                        <div class="form-control-position">
                                            <i class="ft-message-square"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        {!! Form::text('start_time', old('start_time'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                                        <div class="form-control-position">
                                            <i class="ft-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        {!! Form::text('finish_time', old('finish_time'), ['class' => 'form-control timepicker', 'placeholder' => '']) !!}
                                        <div class="form-control-position">
                                            <i class="ft-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {!! Form::submit(trans('Çalışmasaatini Güncelle'), ['class' => 'btn btn-success float-right']) !!}

                    <a style="margin-right: 10px;" href="{{route('Calisma-Saatleri.index')}}" class="btn  btn-dark float-right ">
                        <i class="ft-x"></i> Geri
                    </a>

                    {!! Form::open(['method' => 'DELETE','route' => ['Calisma-Saatleri.destroy', $working_hour->id],'style'=>'display:inline']) !!}

                    <button style="margin-right: 10px;" class="btn btn-danger float-right ">Sil</button>
                    {!! Form::close() !!}



                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection



@section('js')


@stop

