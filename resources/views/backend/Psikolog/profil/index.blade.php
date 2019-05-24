@extends('backend.Psikolog.layout.anapanel')


@section('css')

    <link rel="stylesheet" href="/toast/toast.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center" id="bordered-layout-colored-controls">Profil Ayarları</h3>
                    <a href="{{route('psikolog.profil.oniz',Auth::user()->id)}}" class="btn btn-outline-warning float-right">Profilimi Görüntüle</a>

                </div>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form form-horizontal form-bordered" method="post" action="{{route('psikolog.profil.kaydet')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left">
                                        <label>Profil Fotoğrafı</label>

                                        {!! Form::file('image', array('class' => 'form-control')) !!}
                                    </div>
                                    <div  class="float-right">
                                        @if($psikolog->psdetay->image !=null)
                                            <div class="form-group row">
                                                <div class="col-md-3">


                                                    <img  src="/uploads/psikolog/{{$psikolog->psdetay->image}}" style="height: 125px; width: 200px; " >

                                                </div>

                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-info"></i>Psikolog Bilgileri</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput1">İsim</label>
                                            <div class="col-md-9">
                                                {!! Form::text('name',$psikolog->name, array('placeholder' => 'İsim ','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput2">Soyisim</label>
                                            <div class="col-md-9">
                                                {!! Form::text('sname', $psikolog->sname, array('placeholder' => 'Soyisim','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="userinput3">Ünvan</label>
                                            <div class="col-md-9">
                                                {!! Form::text('unvan', $psikolog->psdetay->unvan, array('Ünvan' => 'Section Baslik ','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="userinput4">Cinsiyet</label>
                                            <div class="col-md-9">
                                                {!! Form::text('cinsiyet', $psikolog->psdetay->cinsiyet, array('placeholder' => 'Cinsiyet ','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="userinput3">Dogum Tarihi</label>
                                            <div class="col-md-9">
                                                {!! Form::text('dt', $psikolog->psdetay->dt, array('placeholder' => 'Dogum Tarihi ','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control">Kimlik No</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" readonly="readonly" value="{{$psikolog->psdetay->tcno}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="userinput3">Kullanıcı Adı</label>
                                            <div class="col-md-9">
                                                {!! Form::text('kulad', $psikolog->psdetay->kulad, array('placeholder' => 'Kullanıcı Adı','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>


                                    </div>



                                </div>

                                <h4 class="form-section"><i class="ft-mail"></i>Adres ve iletişim Bilgileri</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput5">Email</label>
                                            <div class="col-md-9">
                                                {!! Form::text('email', $psikolog->email, array('placeholder' => 'email','class' => 'form-control border-primary','readonly'=>'readonly')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput4">Telefon</label>
                                            <div class="col-md-9">
                                                {!! Form::text('telno', $psikolog->telno, array('placeholder' => 'telefon','class' => 'form-control border-primary')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="userinput8">Adres</label>
                                            <div class="col-md-9">
                                                {!! Form::text('adres', $psikolog->psdetay->adres, array('placeholder' => 'adres','class' => 'form-control border-primary','style' => 'height:100px;')) !!}
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <h4 class="form-section"><i class="ft-mail"></i>Hakkımda</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                {!! Form::textarea('hakkimda', $psikolog->psdetay->hakkimda, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <h4 class="form-section"><i class="ft-mail"></i>Uzmanlık Alanları</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select class="form-control js-example-basic-multiple" id="uzmankat" name="uzmankat[]" multiple="multiple">
                                                    @foreach($psikologuzman as $pas)
                                                        <option value="{{$pas->id}}"  {{collect(old('uzmankat',$uzmankat))
                                  ->contains($pas->id)? 'selected':''}}>{{$pas->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="form-section"><i class="ft-mail"></i>Diploma ve Sertifikalar</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="panel-body">
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            Please correct following errors:
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                        <div class="form-group">
                                                            <input type="file" name="imagex[]" class="form-control-file" multiple="true">
                                                        </div>
                                                    <hr>



                                                        <h4 class="form-section"><i class="ft-mail"></i>Yüklenilen Dosyalar</h4>

                                                        @forelse($photos as $photo)


                                                                            <a href="/uploads/psikolog/sert/{{ $photo->imagex }}" data-lightbox="photos">

                                                                                <img  style="height: 150px; width: 255px;"  src="/uploads/psikolog/sert/{{ $photo->imagex }}" class="img-responsive">

                                                                            </a>
                                                            {!! Form::open(['method' => 'DELETE','route' => ['psikolog.dosya.sil', $photo->id],'style'=>'display:inline']) !!}

                                                            <button class="buttonx ft-x-circle font-medium-3 mr-2 "></button>
                                                            {!! Form::close() !!}

                                                        @empty


                                                        @endforelse

                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            <div class="form-actions right">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div></div>


        </div>



<style>
    .photo-gallery {
        color:#313437;
        background-color:#fff;
    }

    .photo-gallery p {
        color:#7d8285;
    }

    .photo-gallery h2 {
        font-weight:bold;
        margin-bottom:40px;
        padding-top:40px;
        color:inherit;
    }

    @media (max-width:767px) {
        .photo-gallery h2 {
            margin-bottom:25px;
            padding-top:25px;
            font-size:24px;
        }
    }

    .photo-gallery .intro {
        font-size:16px;
        max-width:500px;
        margin:0 auto 40px;
    }

    .photo-gallery .intro p {
        margin-bottom:0;
    }

    .photo-gallery .photos {
        padding-bottom:20px;
    }

    .photo-gallery .item {
        padding-bottom:30px;
    }
</style>



@endsection



@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/toast/toast.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    {!! Toastr::message() !!}
    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace('aciklama',options);

    </script>

    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select an option'
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
@stop


