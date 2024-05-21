<div>
    <form action="{{ route('user.forum.comment.store', $forum) }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="pesan" class="fs-6 form-control" rows="3"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
        </div>
    </form>
    <hr>
    @forelse ($comments as $comment)
        <div class="d-flex align-items-start">
            <div class="w-100">
                <div class="d-flex text-primary justify-content-between">
                    <h6 class=""> {{ $comment->user->nama }}
                    </h6>
                    <small class="fs-6 fw-light text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    {{ $comment->pesan }}
                </p>
            </div>
        </div>
        <hr>
    @empty
        <p class="text-center my-4">No Comments Found.</p>
    @endforelse
</div>
