<div>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
        </div>
    </form>
    <hr>
    @forelse ($forum->comments as $comment)
        <div class="d-flex align-items-start">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class=""> namanyaaa
                    </h6>
                    <small class="fs-6 fw-light text-muted">waktunyaa</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    komennyaa
                </p>
            </div>
        </div>
    @empty
        <p class="text-center my-4">No Comments Found.</p>
    @endforelse
</div>
