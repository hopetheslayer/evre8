@extends('backend.Psikolog.layout.anapanel')


@section('css')

    <link rel="stylesheet" href="/toast/toast.css">


@stop

@section('content')

    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card" >
            <div class="card-header">
                <h3 class="card-title text-center">Oluşturulan Blog Yazıları</h3>
                <a href="{{route('Psikolog-blog.create')}}" class="btn btn-raised gradient-purple-bliss white float-left">Yazı Oluştur</a>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm text-center">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Blog Başlık</th>
                        <th>kapak fotoğrafı</th>
                        <th>Öne cıkan görsel fotoğrafı</th>
                        <th>Yayın Durumu</th>
                        <th>Ayarlar</th>
                    </tr>
                    </thead>
                    @foreach($blogs as $blog)
                    <tbody>
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->post_baslik}}</td>

                        <td>
                            <img class="tumbnail" style="height: 50px; width: 50px;" src="/uploads/blog/{{$blog->kimage}}"></td>
                        <td>
                            <img class="tumbnail" style="height: 50px; width: 50px;" src="/uploads/blog/{{$blog->gimage}}">
                        </td>
                        <td>
                            @if($blog->yayın == 1)
                                <span class="btn btn-success">yayında</span>
                            @else
                                <span class="btn btn-warning">taslak</span>
                            @endif

                        </td>

                        <td>
                            <a href="{{route('Psikolog-blog.edit',$blog->id)}}" class="success p-0" data-original-title="" title="">
                                <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE','route' => ['Psikolog-blog.destroy', $blog->id],'style'=>'display:inline']) !!}

                            <button class="buttonx ft-x-circle font-medium-3 mr-2 "></button>
                            {!! Form::close() !!}
                        </td>

                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection



@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <script src="/toast/toast.js"></script>
    {!! Toastr::message() !!}
@stop

