<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePartner{{ $partnership->id }}">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deletePartner{{ $partnership->id }}" tabindex="-1" aria-labelledby="deletePartnerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePartnerLabel">Delete Partnership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.partnerships.delete', $partnership) }}" method="POST">
                    @csrf
                    @method('delete')
                    Are you sure want to delete this partnership?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
