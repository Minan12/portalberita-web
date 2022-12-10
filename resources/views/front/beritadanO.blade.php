@extends('front.layouts.berita')

{{-- row-col-1 row-col-md-3 g-4 --}}
@section('content-berita')
<style>
    .cutoff-text{
        --max-lines: 7;

        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: var(--max-lines);
    }
</style>
    <h2 class="text-center">BERITA</h2>
    <div class="row row-col-1 row-col-md-3 g-4">
        @forelse ($artikel as $row)
                <div class="col">
                    <div class="card" style="width: 18rem; height:30rem;">
                    <img src="{{asset('uploads/' . $row->gambar_artikel)}}" class="card-img-top" height="200px">
                        <div class="card-body">
                        <h4 class="card-title text-center">
                            <a href="{{route('detail-artikel', $row->judul)}}" style="text-decoration: none" class="link-dark">    
                                <strong>{{$row->judul}}</strong>
                            </a>
                        </h4>
                        <p class="cutoff-text card-text text-black text-center" style="font-size: 15px">{!!$row->body!!}</p>
                        </div>
                    </div>
                </div>
        @empty
            <p>Data masih kosong</p>
        @endforelse
        {{$artikel->links()}}
    </div>
@endsection