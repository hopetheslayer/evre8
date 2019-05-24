@if (session()->has('mesaj'))
    <div class="container">
        <div class="alert alert-{{session('mesaj-tur')}}">{{session('mesaj')}}</div>
    </div>
@endif