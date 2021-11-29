@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">brand</th>
                        <th scope="col">model</th>
                        <th scope="col">year</th>
                        <th scope="col">jogging</th>
                        <th scope="col">color</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <th>{{ $car->id}} </th>
                            <th>{{ $car->brand}} </th>
                            <th>{{ $car->model}} </th>
                            <th>{{ $car->year}} </th>
                            <th>{{ $car->jogging}} </th>
                            <th>{{ $car->color}} </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
