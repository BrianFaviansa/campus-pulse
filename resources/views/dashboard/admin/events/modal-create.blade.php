<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createEvent">
    Add new
</button>

<!-- Modal -->
<div class="modal fade" id="createEvent" tabindex="-1" aria-labelledby="createEventLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEventLabel">Create New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="nama">Event Name</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Event Category</label>
                        <select name="category_id" class="form-control" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poster">Event Poster</label>
                        <input type="file" name="poster" class="form-control-file" id="poster" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Event Date</label>
                        <input type="date" name="tanggal" class="form-control" style="max-width: 250px" id="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="benefit">Event Benefit</label>
                        <input type="text" name="benefit" class="form-control" id="benefit" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Event Description</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
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
