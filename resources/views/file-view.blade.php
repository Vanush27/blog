@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <nav>
                <ol>
                    @foreach($data as $image)
                        <li class="mini-avatar">
                            <a href='{{asset("/$image->file_path")}}'>image{{$image->id}} <img
                                    src='{{asset("/$image->file_path") }}'></a>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>

@endsection


