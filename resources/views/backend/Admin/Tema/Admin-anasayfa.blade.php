@extends('backend.Admin.admin-panel')


@section('css')
    <link rel="stylesheet" href="/toast/toast.css">

@endsection

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center" id="striped-row-layout-basic">Anasayfa Genel Ayarlar</h4>

            </div>
            <div class="card-body">
                <div class="px-3">
                    <form method="post" action="{{route('admin.tema.anasayfa.kaydet')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i>Slider Alanı</h4>
                            @foreach($anasayfa as $a)
                            <div class="form-group row">
                                <label class="col-md-3 label-control">Slider 1</label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('slider_foto', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->slider_foto !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Slider1</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->slider_foto}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 label-control">Slider 2</label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('slider_foto1', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->slider_foto1 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Slider2</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->slider_foto1}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 label-control">Slider 3</label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('slider_foto2', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->slider_foto2 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Slider3</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->slider_foto2}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>


                            <h4 class="form-section"><i class="ft-external-link"></i>Section 1 Alanı</h4>


                            <div class="form-group row">
                                <label class="col-md-3 label-control">Section foto 1</label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section_foto1', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section_foto1 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Section foto 1<</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section_foto1}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 label-control">Section foto 2</label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section_foto2', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section_foto2 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Section foto 2</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section_foto2}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">section Baslik</label>
                                <div class="col-md-9">
                                    {!! Form::text('section_baslik', $a->section_baslik, array('placeholder' => 'Section Baslik ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">section Yazi</label>
                                <div class="col-md-9">
                                    {!! Form::text('section_baslik_yazi', $a->section_baslik_yazi, array('placeholder' => 'Section Yazi ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>


                            <h4 class="form-section"><i class="ft-external-link"></i>Section 2 Alanı</h4>

                            <div class="form-group row">
                                <label class="col-md-3 label-control">Fotoğraf 1 </label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section2_foto1', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section2_foto1 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Slider3</label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section2_foto1}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section Yazi 1</label>
                                <div class="col-md-9">
                                    {!! Form::text('section2_yazi1', $a->section2_yazi1, array('placeholder' => 'Section Yazi 1','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-md-3 label-control">Fotoğraf 2 </label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section2_foto2', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section2_foto2 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Fotoğraf 2 </label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section2_foto2}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section Yazi 2</label>
                                <div class="col-md-9">
                                    {!! Form::text('section2_yazi2', $a->section2_yazi2, array('placeholder' => 'Section Yazi 2 ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 label-control">Fotoğraf 3 </label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section2_foto3', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section2_foto3 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Fotoğraf 3 </label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section2_foto3}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section Yazi 3</label>
                                <div class="col-md-9">
                                    {!! Form::text('section2_yazi3', $a->section2_yazi3, array('placeholder' => 'Section Yazi 3','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <h4 class="form-section"><i class="ft-external-link"></i>Section 3 Alanı</h4>

                            <div class="form-group row">
                                <label class="col-md-3 label-control">Section 3 Fotoğraf </label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section3_foto1', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section3_foto1 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Section 3 Fotoğraf </label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section3_foto1}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3 Baslik 1</label>
                                <div class="col-md-9">
                                    {!! Form::text('section3_baslik1', $a->section3_baslik1, array('placeholder' => 'Section3 Baslik 1','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3 Yazi 1</label>
                                <div class="col-md-9">
                                    {!! Form::text('section3_yazi1', $a->section3_yazi1, array('placeholder' => 'Section3 Yazi 1','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3 Alt Yazi 1</label>
                                <div class="col-md-9">
                                    {!! Form::text('section3_yazi1_alt', $a->section3_yazi1_alt, array('placeholder' => 'Section3 Alt Yazi 1','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control">Section 3 Fotoğraf 2 </label>
                                <div class="col-md-6">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('section3_foto2', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                                @if($a->section3_foto2 !=null)
                                    <div class="form-group row">
                                        <label class="col-md-6 label-control">Section 3 Fotoğraf 2 </label>
                                        <div class="col-md-3">


                                            <img  src="/uploads/theme/slider{{$a->section3_foto2}}" style="height: 100px; width: 150px; " >

                                        </div>

                                    </div>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3 Baslik Yazi 2</label>
                                <div class="col-md-9">

                                    {!! Form::text('section3_baslik2', $a->section3_baslik2, array('placeholder' => 'Section3 Baslik Yazi 2','class' => 'form-control border-primary')) !!}

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3  Yazi 2</label>
                                <div class="col-md-9">
                                    {!! Form::text('section3_yazi2', $a->section3_yazi2, array('placeholder' => 'Section3  Yazi 2','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Section3 Alt Yazi 2</label>
                                <div class="col-md-9">
                                    {!! Form::text('section3_yazi2_alt', $a->section3_yazi2_alt, array('placeholder' => 'Section3 Alt Yazi 2','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>



                        </div>
                        @endforeach
                        <div class="form-actions text-center">
                            {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}

@endsection
