@extends('layouts.app')

@section('page-title', $title_doc)

@section('main-contetn')
    <section>
        <div class="container">
            <h1>{{ $title }}</h1>
            <div class="row row-cols-6">

                @forelse ($series as $serie)
                    <div class="col mb-4 max-h">
                        <div class="card h-100">
                            <div class="card-body p-0">
                                <div class="card-img">
                                    <img src="{{ $serie['thumb'] }}" alt="">
                                </div>
                            </div>
                            <div class="card-header">{{ $serie['title'] }}</div>
                        </div>
                    </div>
                @empty
                    asdas
                @endforelse

            </div>
        </div>
    </section>
@endsection
