
@extends('frontend.layout.frontend-psikolog-main')

@section('css')

@stop

@section('content')



            @foreach($psikolog as $pa)
                <div class="row">
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                <img style="height: 300px; width: 300px;" src="/8evre/img/team/team-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{$pa->name}} {{$pa->sname}}</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p style="color:#0fc1a7;" class="font-weight-bold  text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Marketing</p>
                </div>
                <p class="lead appear-animation text-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                <p class="pb-3 appear-animation text-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                <hr class="solid my-4 appear-animation text-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <a href="#" class="btn terapibutton btn-dark" >Profili İncele</a>
                        <a href="#" class="btn terapibutton  ">Randevu Al</a>
                    </div>

                </div>
            </div>
                </div>

                <hr>
            @endforeach







@stop


@section('js')

@stop


