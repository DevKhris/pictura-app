@extends('layouts.app')

@section('title', '- Posts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card my-3">
                <div class="card-body">
                    <form action="{{ route('user.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Aa" name="body" id="" cols="20"
                                rows="4"></textarea>
                            <input class="form-control py-2" type="file" name="image" id="">
                            <br>
                            <input class="btn btn-primary btn-block" type="submit" value="Publish">
                        </div>
                    </form>
                </div>
            </div>

            @foreach($posts as $post)
                @include('pages.posts.components.post',$post)
                <br>
            @endforeach
        </div>
        <div class="col-sm-12 col-md-4">

        </div>
    </div>
</div>
@endsection