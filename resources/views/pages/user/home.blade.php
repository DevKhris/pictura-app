@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name . __(' - Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="d-flex flex-row justify-content-around">
                        <ul>
                            <p>Info</p>
                            <li> Name: {{ $user->name }}</li>
                            <li> Email: {{ $user->email }}</li>
                            <li> Registered at: {{ $user->created_at->diffForHumans() }}</li>


                        </ul>
                        <br>
                        <ul>
                            <p>Stats</p>
                            <li> Posts count: {{ count($user->posts) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="card d-flex align-items-center ">
                <div class="card-body">
                    @foreach($user->posts->chunk(4) as $chunk)
                    <div class="flex-row">
                        @foreach ($chunk as $post)
                        <a href="{{ route('user.post.show',$post->id) }}">
                            <img src="{{ asset("storage/$post->image") }}" class="img-fluid rounded card-img-top " alt=""
                                srcset="" style="width: 20%; height: 20%;">
                        </a>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection