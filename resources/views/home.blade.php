@extends('layouts.app')

@section('main_content')
    <h1>Lista viaggi</h1>

    <div class="row">
        @foreach ($travels as $travel)
            <div class="col">
                <div class="card">
                    <div>Holiday type: {{ $travel->holiday_type }} </div>
                    <div>Hotel: {{ $travel->hotel }}</div>
                    <div>Price: {{ $travel->price }}</div>
                    <div>Duration: {{ $travel->duration }} hours</div>
                    <br>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('page_title')
    Homepage
@endsection