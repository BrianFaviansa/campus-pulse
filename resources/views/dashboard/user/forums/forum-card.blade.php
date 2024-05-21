<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <h2 class="card-title mb-0"><a href="">
                            <a href="{{ route('user.forum.show', $forum) }}">{{ $forum->judul }}</a>
                        </a></h2>
                    <div>
                        <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                            {{ $forum->created_at->diffForHumans() }} </span>
                    </div>
                </div>
            </div>
            <div class="d-grid">
                <a href="{{ route('user.forum.show', $forum) }}"
                    class="{{ Route::is('user.forum.show') ? 'd-none' : '' }} btn btn-success">Detail</a>
                @if (Auth::check() && $forum->user->id == Auth::id())
                    @include('dashboard.user.forums.modal-edit')
                    @include('dashboard.user.forums.modal-delete')
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="fs-4 text-dark">
            Created by : {{ $forum->user->nama }}
        </p>
    </div>
</div>
