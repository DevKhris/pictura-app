@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-2"></div>
        <div class="col-sm-12 col-md-8">
            @include('pages.posts.components.post',$post)
        </div>
        <div class="col-sm-12 col-md-2"></div>
    </div>
</div>
@endsection