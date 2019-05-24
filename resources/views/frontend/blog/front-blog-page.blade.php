@extends('frontend.layout.frontend-blog-main')

@section('alt-title','Sekiz Evre Blog')
@section('alt-des','En Son Makalelerimizi Gördünüz mü ?')
@section('css')

@stop

@section('content')


    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                <aside class="sidebar">
                    <form action="page-search-results.html" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-append">
											<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
										</span>
                        </div>
                    </form>
                    <h5 class="font-weight-bold pt-4">Kategoriler</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        @foreach($kategori as $kg)
                        <li class="nav-item"><a class="nav-link" href="{{route('bkategori',$kg->slug)}}">{{$kg->kategori_adi}}</a></li>
                        @endforeach
                    </ul>


                </aside>
            </div>

            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts">
                    @foreach($blog as $bg)
                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="post-image">
                                        <a href="{{route('sblog',$bg->slug)}}">
                                            <img style="max-height: 275px;" src="uploads/blog/{{$bg->gimage}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold text-7 line-height-4 mb-2"><a href="{{route('sblog',$bg->slug)}}">{{$bg->post_baslik}}</a></h2>
                                        <p class="mb-0 text-4">{{$bg->blog_aciklama}}[...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span class="text-4"><i class="far fa-calendar-alt"></i> {{$bg->created_at->toDateString() }} </span>
                                        <span class="text-4"><i class="far fa-user"></i><a href="#">{{$bg->psikolog->name}} {{$bg->psikolog->sname}}</a> </span>
                                        <span class="text-4"><i class="far fa-folder"></i><a href="#">{{$bg->blogkategori->kategori_adi}}</a> </span>

                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{route('sblog',$bg->slug)}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach


                    <ul class="pagination float-right">
                        {{ $blog->links() }}
                    </ul>

                </div>
            </div>
        </div>

    </div>


@stop


@section('js')

@stop