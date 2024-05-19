<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editParner{{ $partnership->id }}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editParner{{ $partnership->id }}" tabindex="-1" aria-labelledby="editParnerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="editParnerLabel">Edit Partnership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.partnerships.update', $partnership) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Partner Name</label>
                        <input type="text" name="nama" class="form-control" value="{{ $partnership->nama }}" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="link">Partner Link</label>
                        <input type="text" name="link" value="{{ $partnership->link }}" class="form-control" id="link" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
