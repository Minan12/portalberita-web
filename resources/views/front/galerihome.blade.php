@extends('front.layouts.galeri')

{{-- row-col-1 row-col-md-3 g-4 --}}
@section('content-galerii')
    <h2 class="text-center">GALERI</h2>
    <div class="row pt-4">
        @forelse ($galeri as $row)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-4 rounded-2">
                    <img src="{{asset('uploads/' . $row->gambar)}}" class="card-img-top">
                </div>
        @empty
            <p>Data masih kosong</p>
        @endforelse
        {{$galeri->links()}}
    </div>
@endsection