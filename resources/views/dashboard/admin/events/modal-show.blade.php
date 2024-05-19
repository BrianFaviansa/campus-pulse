<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#showEvent{{ $event->id }}">
    Detail
</button>

<!-- Modal -->
<div class="modal fade" id="showEvent{{ $event->id }}" tabindex="-1" aria-labelledby="showEventLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="showEventLabel">Event Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="nama">Event Name</label>
                        <input type="text" name="nama" value="{{ $event->nama }}" class="form-control"
                            id="nama" readonly>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Event Category</label>
                        <select name="category_id" class="form-control text-dark" id="category_id" disabled>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $event->category_id ? 'selected' : '' }}>
                                    {{ $category->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poster">Event Poster</label> <br>
                        <a target="_blank" href="{{ asset('storage/event_posters/'. $event->poster) }}"><img src="{{ asset('storage/event_posters/' . $event->poster) }}"
                            alt="{{ $event->nama }}" class="img img-fluid" style="max-width: 400px; min-width: 300px"></a>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Event Date</label>
                        <input type="text" name="tanggal" value="{{ $event->tanggal->format('d F Y') }}" class="form-control"
                        id="tanggal" readonly>
                    </div>
                    <div class="form-group">
                        <label for="benefit">Event Benefit</label>
                        <input type="text" value="{{ $event->benefit }}" name="benefit" class="form-control"
                            id="benefit" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Event Description</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" readonly>{{ $event->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Event Status</label>
                        <select class="form-control" disabled name="status" id="status">
                            <option value="Coming Soon" {{ $event->status == 'Coming Soon' ? 'selected' : '' }}>Coming Soon</option>
                            <option value="Ongoing" {{ $event->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="Done" {{ $event->status == 'Done' ? 'selected' : '' }}>Done</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
