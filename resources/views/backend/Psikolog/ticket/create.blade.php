@extends('backend.Psikolog.layout.anapanel')


@section('css')

    <link rel="stylesheet" href="/toast/toast.css">

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Destek Bileti Oluştur</h3>
                </div>
                <div class="card-body">
                    <div class="px-3">
                        @include('backend.Psikolog.layout.partials.error')
                        <form class="form" method="post" action="{{route('Destek-Biletlerim.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="eventInput1">Bilet Başlığı</label>
                                            {!! Form::text('title',null, array('class' => 'form-control')) !!}
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput2">Kategori Seçiniz</label>
                                            <select id="category" type="category" class="form-control" name="category">
                                                <option value=""></option>
                                                @foreach ($categories as $category)

                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>


                                                @endforeach



                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput2">Kategori Seçiniz</label>

                                                <select id="priority" type="" class="form-control" name="priority">
                                                    <option value="">Önceliği Seçiniz</option>
                                                    <option value="Önem durumu düşük">Önem durumu düşük</option>
                                                    <option value="Orta">Orta</option>
                                                    <option value="Yüksek">Yüksek</option>
                                                    <option value="ACİL">Acil</option>
                                                </select>


                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput4">Destek Biletinin İçerigini Giriniz</label>

                                            {!! Form::textarea('message', null, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <a href="{{route('Destek-Biletlerim.index')}}" style="color: white;" class="btn btn-info">Geri</a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button class="btn btn-primary"> Destek Bileti Oluştur</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
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

