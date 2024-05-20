<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="card-title mb-0"><a href="">
                            {{ $forum->user->nama }}
                        </a></h5>
                        <div>
                            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                {{ $forum->created_at->diffForHumans() }} </span>
                        </div>
                </div>
            </div>
            <div class="d-flex">
                <a href="">View</a>
                <a href="">edit</a>
                <a href="">Delete</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
            <form action="" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3"></textarea>

                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm"> Update </button>
                </div>
            </form>
        @else
            <h4 class="fm-6 fw-medium text-dark">
                {{ $forum->judul }}</h4>
            <p class="fm-6 fw-medium text-muted">
                {{ $forum->pesan }}
            </p>
        @endif
            
        {{-- @include('ideas.shared.comments-box') --}}
    </div>
</div>
