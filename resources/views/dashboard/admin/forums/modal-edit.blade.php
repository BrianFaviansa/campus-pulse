<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editDiscussion{{ $forum->id }}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editDiscussion{{ $forum->id }}" tabindex="-1" aria-labelledby="editDiscussionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDiscussionLabel">Edit Discussion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.forums.update', $forum) }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="judul">Discussion Topic</label>
                        <input type="text" name="judul" value="{{ $forum->judul }}" class="form-control" id="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Ask here</label>
                        <textarea class="form-control" name="pesan" id="pesan" rows="3" required>{{ $forum->pesan }}</textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Disussion</button>
            </div>
            </form>
        </div>
    </div>
</div>
