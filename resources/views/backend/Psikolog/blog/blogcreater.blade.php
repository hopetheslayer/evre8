@extends('backend.Psikolog.layout.anapanel')


@section('css')

    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')

    @include('backend.Psikolog.layout.partials.error')
    <div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Blog Yazısı Oluştur</h3>
            </div>
            <form class="form form-horizontal form-bordered" method="post" action="{{route('Psikolog-blog.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="card-block">

                    <div class="row">
                        <div style="margin-bottom: 25px;" class="col-2">

                            {!! Form::text('yazibaslik',null, ['class' => 'form-control date', 'style'=> 'width:250px;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '']) !!}
                        </div>

                        <div class="col-12">
                            {!! Form::textarea('yazi', null, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                        </div>

                        <div style="margin-top: 25px;" class="col-6">
                            <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                            {!! Form::file('kimage', array('class' => 'form-control')) !!}
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
            <h3 class="text-center">Öne Çıkan Görsel Belirle</h3>
                <hr>
                {!! Form::file('gimage', array('class' => 'form-control')) !!}

            <hr>

        </div>
        </div>



        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Yazı Özellikleri</h3>
                <hr>
                <div class="row text-center">
                    <div class="col-md-12">

                        {!! Form::text('blog-aciklama',null, ['class' => 'form-control date',  'placeholder' => 'Blog Açıklama', 'required' => '']) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-md-12">

                        {!! Form::text('blog-keyword',null, ['class' => 'form-control date',  'placeholder' => 'Anahtar Kelimeleri giriniz', 'required' => '']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Yazı Kategori</h3>
                <hr>
                <div class="row text-center">
                    <div class="col-md-12">
                        <select id="blogkategori" type="blogkategori" class="form-control" name="blogkategori">
                            <option value="">--Kategori Seçiniz--</option>
                            @foreach ($blogkategori as $bk)

                                <option value="{{ $bk->id }}">{{ $bk->kategori_adi }}</option>


                            @endforeach



                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Yayımlanma Ayarları</h3>
                <hr>

                <div class="row ">
                    <div class="col-md-12">

                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput5">Yayınlansın mı ? :</label>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="yayın" value="1"> evet
                                </label>
                            </div>
                        </div>

                    </div>
                    <div style="margin-left: 10px;" class="col-md-12 text-center">
                        <a href="{{route('Psikolog-blog.index')}}" class="btn btn-raised gradient-ibiza-sunset white">Geri Dön</a>
                        {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}

                    </div>

                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
    </div>




@endsection



@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <script src="/toast/toast.js"></script>
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
@stop

