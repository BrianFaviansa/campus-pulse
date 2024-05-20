<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteForum{{ $forum->id }}">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deleteForum{{ $forum->id }}" tabindex="-1" aria-labelledby="deleteForumLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteForumLabel">Delete Forum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.forums.delete', $forum) }}" method="POST">
                    @csrf
                    @method('delete')
                    Are you sure want to delete this forum?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
