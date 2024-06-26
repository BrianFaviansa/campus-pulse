@extends('dashboard.admin.layouts.layout')

@section('content')
    <h1 class="">Events</h1>
    @include('dashboard.admin.events.modal-create')

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif

    <div class="recentCustomers mt-1">
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Organizer</th>
                    
                    <th>Status</th>
                    <th>Event Date</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($events as $event)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $event->nama }}</td>
                        <td class="text-center"><a target="_blank" href="{{ asset('storage/event_posters/'. $event->poster) }}"><img src="{{ asset('storage/event_posters/' . $event->poster) }}"
                            alt="{{ $event->nama }}" class="img img-fluid" style="max-width: 150px;"></a></td>
                        <td>{{ $event->user->nama }}</td>
                        <td>{{ $event->status}}</td>
                        <td>{{ $event->tanggal->format('d F Y') }}</td>
                        <td>
                            @include('dashboard.admin.events.modal-show')
                            @include('dashboard.admin.events.modal-edit')
                            @include('dashboard.admin.events.modal-delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">There is no event</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
