@extends('backend.Psikolog.layout.anapanel')


@section('css')



@stop

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="striped-row-layout-icons">Çalışma Saati Ekle</h4>
                <hr>
            </div>
            <div class="card-body">
                <div class="px-3">
                    <form class="form form-horizontal form-bordered" method="post" action="{{route('Calisma-Saatleri.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-body">
                        @include('backend.Psikolog.layout.partials.error')


                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                            <div class="col-md-9">
                                <div class="position-relative has-icon-left">
                                    <input type="date" name="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">

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
                                    <input type="time" name="start_time" id="timesheetinput5" class="form-control" >
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
                                    <input type="time" name="finish_time" id="timesheetinput5" class="form-control">
                                    <div class="form-control-position">
                                        <i class="ft-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a style="margin-left: 15px;" class="btn btn-dark float-right" href="{{route('Calisma-Saatleri.index')}}">İptal</a>
                    {!! Form::submit(trans('Çalışmasaati Ekle'), ['class' => 'btn btn-danger float-right']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}




@endsection



@section('js')


@stop

