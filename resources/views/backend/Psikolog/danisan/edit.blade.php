@extends('backend.Psikolog.layout.anapanel')

@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="bordered-layout-colored-controls">Danışan Düzenle</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    {!! Form::model($musteri, ['method' => 'PATCH','route' => ['Danisan.update', $musteri->id]]) !!}
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-info"></i>Danışan Bilgileri</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput1">Adınız : </label>
                                        <div class="col-md-9">

                                            {!! Form::text('name', $musteri->name, array('placeholder' => 'Adınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput2">Soyadınız :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('sname', $musteri->sname, array('placeholder' => 'Soyadınız','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <h4 class="form-section"><i class="ft-mail"></i> İletişim Bilgileri</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput5">Email :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('email', $musteri->email, array('placeholder' => 'Email','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control">Telefon Numarası :</label>
                                        <div class="col-md-9">
                                            {!! Form::text('telno', $musteri->telno, array('placeholder' => 'Telefon Numarası ','class' => 'form-control border-primary')) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="userinput8">Adres :</label>
                                        <div class="col-md-9">
                                            {!! Form::textarea('adres', $musteri->adres, array('placeholder' => 'Adres','class' => 'form-control','style'=>'height:100px')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <a href="{{route('Danisan.index')}}" class="btn btn-raised btn-warning mr-1">
                                <i class="ft-x"></i> Geri
                            </a>
                            <button type="submit" class="btn btn-raised btn-primary">
                                <i class="fa fa-check-square-o"></i> Kaydet
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection

