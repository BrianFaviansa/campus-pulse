<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createDiscussion">
    Add new discussion
</button>

<!-- Modal -->
<div class="modal fade" id="createDiscussion" tabindex="-1" aria-labelledby="createDiscussionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDiscussionLabel">Create New Discussion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.forums.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Discussion Topic</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Ask here</label>
                        <textarea class="form-control" name="pesan" id="pesan" rows="3" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post Disussion</button>
            </div>
            </form>
        </div>
    </div>
</div>
