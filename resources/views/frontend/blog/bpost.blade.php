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
                    <h5 class="font-weight-bold pt-4">Categories</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        @foreach($kategoris as $kg)
                            <li class="nav-item"><a class="nav-link" href="{{route('bkategori',$kg->slug)}}">{{$kg->kategori_adi}}</a></li>
                        @endforeach
                    </ul>


                </aside>
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a >
                                <img style="max-height: 475px;" src="/uploads/blog/{{$blog->kimage}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="post-date ml-0">
                            <span style="color: #3d2d37;" class="day">{{$blog->created_at->format('d')}}</span>
                            <span style="background-color: #0fc1a7" class="month">{{$blog->created_at->format('m')}}</span>
                        </div>

                        <div class="post-content ml-0">

                            <h2 class="font-weight-bold"><a href="">{{$blog->post_baslik}}</a></h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i>  <a href="#"> {{$blog->psikolog->name }} {{$blog->psikolog->sname }}</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">{{$blog->blogkategori->kategori_adi }}</a> </span>

                            </div>
                            <div  style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ " >
                                {!! $blog->yazi !!}</div>




                            <div class="post-block mt-5 post-share">
                                <h4 class="mb-3">Yazıyı Sosyal Medyada Paylaş</h4>

                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->

                            </div>

                            <div class="post-block mt-4 pt-2 post-author">
                                <h4 class="mb-3">Yazar</h4>
                                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                    <a >
                                        <img src="/uploads/psikolog/{{$blog->psikolog->psdetay->image }}" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">{{$blog->psikolog->name }} {{$blog->psikolog->sname }}</a></strong></p>

                            </div>





                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>



@stop


@section('js')

@stop