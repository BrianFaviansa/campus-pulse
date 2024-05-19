<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="card-title mb-0"><a href="">
                            Jon
                        </a></h5>
                        <div>
                            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                2 minutes ago </span>
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
            <p class="fm-6 fw-medium text-dark">
                Judulnya
            <p class="fm-6 fw-medium text-muted">
                isinya
            </p>
        @endif
        <div class="d-flex justify-content-between">
            {{-- @include('ideas.shared.like-button') --}}

        </div>
        {{-- @include('ideas.shared.comments-box') --}}
    </div>
</div>
