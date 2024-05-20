<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editEvent{{ $event->id }}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editEvent{{ $event->id }}" tabindex="-1" aria-labelledby="editEventLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventLabel">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="nama">Event Name</label>
                        <input type="text" name="nama" value="{{ $event->nama }}" class="form-control"
                            id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Event Category</label>
                        <select name="category_id" class="form-control text-dark" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $event->category_id ? 'selected' : '' }}>
                                    {{ $category->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poster">Event Poster</label>
                        <input type="file" name="poster" class="form-control-file" id="poster">
                        <small>Leave it empty if you don't want to change the poster</small>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Event Date</label>
                        <input type="date" name="tanggal" class="form-control" style="max-width: 250px"
                            id="tanggal" value="{{ Carbon\Carbon::parse($event->tanggal)->format('Y-m-d') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="benefit">Event Benefit</label>
                        <input type="text" value="{{ $event->benefit }}" name="benefit" class="form-control"
                            id="benefit" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Event Description</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required>{{ $event->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Event Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="Coming Soon" {{ $event->status == 'Coming Soon' ? 'selected' : '' }}>Coming Soon</option>
                            <option value="Ongoing" {{ $event->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="Done" {{ $event->status == 'Done' ? 'selected' : '' }}>Done</option>
                        </select>
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
