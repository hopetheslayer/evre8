@extends('backend.Psikolog.layout.anapanel')


@section('css')

    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Blog Yazısını Düzenle</h3>
                </div>

                <form method="post" action="{{route('blog.psikolog.guncelle',$blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="card-block">

                            <div class="row">
                                <div style="margin-bottom: 25px;" class="col-2">

                                    {!! Form::text('post_baslik',$blog->post_baslik, ['class' => 'form-control date', 'style'=> 'width:250px;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '']) !!}
                                </div>

                                <div class="col-12">
                                    {!! Form::textarea('yazi', $blog->yazi, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                                </div>

                                <div style="margin-top: 25px;" class="col-6">
                                    <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                                    {!! Form::file('kimage', array('class' => 'form-control')) !!}
                                </div>

                                <div style="margin-top: 25px;" class="col-12">
                                    @if($blog->kimage !=null)
                                        <img class="tumbnail pull-left" src="/uploads/blog/{{$blog->kimage}}" style="height:150px; width: 300px;" >
                                    @endif
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

                    @if($blog->gimage !=null)
                        <img class="tumbnail" src="/uploads/blog/{{$blog->gimage}}" style="height: 100px; width: 275px; margin-bottom: 25px;" >
                    @endif

                    {!! Form::file('gimage', array('class' => 'form-control')) !!}



                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Yazı Özellikleri</h3>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-12">

                            {!! Form::text('blog_aciklama',$blog->blog_aciklama, ['class' => 'form-control date',  'placeholder' => 'Blog Açıklama', 'required' => '']) !!}
                        </div>

                        <div style="margin-top: 25px;" class="col-md-12">

                            {!! Form::text('blog_keyword',$blog->blog_keyword, ['class' => 'form-control date',  'placeholder' => 'Keyword, Keyword, Keyword', 'required' => '']) !!}
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




                                    <option value="{{$bk->id}}" {{collect(old('blogkategori',$blog_kategoriler))
                                  ->contains($bk->id)? 'selected':''}}>{{$bk->kategori_adi}}</option>

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
                                <label class="col-md-6 label-control" for="userinput5">Yayında mı ? :</label>
                                <div class="col-md-6">
                                    <label>
                                        @if($blog->yayın == 1)
                                            <input type="checkbox" name="yayın" value="1" {{$blog->yayın ? 'checked' : ''}}> evet
                                        @else
                                            <input type="checkbox" name="yayın" value="0" {{$blog->yayın ? 'checked' : ''}}> hayır
                                        @endif

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

