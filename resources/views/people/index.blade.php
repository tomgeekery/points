@extends('layout')

@section('content')
    <div class="full-height">
        @include('layout.header');
        <section class="grid">
            @foreach ($people as $person)
                <div class="person position-rel grid-box-wrap">
                    <div class="grid-box">
                        <img src="storage/{{ $person->image_location }}" alt="person image" />
                        <div class="points">{{ $person->points }}</div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
