<div class="card rounded my-2">
    <div class="card-header bg-white border-white">
        <div class="d-flex flex-row align-items-baseline justify-content-between">
            <div class="flex-shrink-0">
                <img src="{{ asset("storage/$post->image") }}" alt="" class="rounded-circle" width="48" height="48">

            </div>
            <div class="flex-grow-1 ms-3">

                <a class="text-decoration-none" href="{{ route('home',$post->user->id) }}">
                    <h5 class="ml-2 text-primary text-break ">
                        {{ $post->user->name ?? 'Unknown User' }}
                    </h5>
                </a>

            </div>
            <div class="flex-end">
                @if($post->user_id === auth()->user()->id)
                <div class="dropdown text-right">
                    <button class="btn btn-secondary border-white dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ...
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    
                        <button class="dropdown-item" data-toggle="modal" data-target="#editModal">
                            Edit Post
                        </button>
                        <form action="{{ route('user.post.destroy',$post->id) }}}" method="POST"">
                            @method('DELETE')
                            @csrf
                            <button type=" submit" class="dropdown-item">Delete Post</button>
                         </form>
                    </div>
                </div>
                @endif
                <sup class="text-muted text-break  ">
                    {{ $post->created_at->diffForHumans() }}
                </sup>
            </div>


        </div>
        <div class="flex-row mt-3">
            <p class="card-text">
                {{ $post->body }}
            </p>
        </div>
    </div>
    <a class="text-decoration-none" href="{{ route('user.post.show',$post->id) }}">
        <div class="card-body">
            <img class="card-img-top img-fluid rounded" src="{{ asset("storage/$post->image") }}" alt="" srcset="">
        </div>
    </a>
    <div class="card-footer bg-white border-white">
        <div class="btn-group text-center ">
            @if(!$post->id === auth()->user()->id)
            <a href="" class="btn btn-outline-primary">
                Like
            </a>
            @endif
            <a href="" class="btn btn-outline-primary">
                Comment
            </a>
        </div>
    </div>
</div>
@include('pages.posts.components.modal',$post)