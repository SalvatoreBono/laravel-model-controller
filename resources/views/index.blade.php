@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4"">
            @foreach ($Movies as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $item['title'] }}</li>
                            <li class="list-group-item">{{ $item['original_title'] }}</li>
                            <li class="list-group-item">{{ $item['nationality'] }}</li>
                            <li class="list-group-item">{{ $item['date'] }}</li>
                            <li class="list-group-item">{{ $item['vote'] }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
