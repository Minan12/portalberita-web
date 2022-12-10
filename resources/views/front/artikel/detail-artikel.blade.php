@extends('front.artikel.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="div">
                    <img src="{{asset('uploads/' . $artikel->gambar_artikel)}}" alt="" class="img-fluid">
                </div>
                <div class="detail-content">
                    <h2>{{$artikel->judul}}</h2>
                    <div class="detail-body">
                        <p>
                            {!!$artikel->body!!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
@endsection