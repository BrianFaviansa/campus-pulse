<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPartnership">
    Add new
</button>

<!-- Modal -->
<div class="modal fade" id="createPartnership" tabindex="-1" aria-labelledby="createPartnershipLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPartnershipLabel">Register New Partnership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.partnerships.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Partner Name</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="link">Partner Link</label>
                        <input type="text" name="link" class="form-control" id="link" required>
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
