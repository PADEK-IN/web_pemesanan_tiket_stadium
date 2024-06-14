<x-user-layout>
    <div class="card">
        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="d-flex justify-content-between m-2">
            <h5 class="card-header">Semua Data Tiket</h5>
            <a href="{{ route('admin.ticket.create') }}" class="btn btn-space btn-primary">Buat Tiket</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2" >No</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Tipe Tiket</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Kuota</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $index => $ticket)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-justify"><a href="/admin/event/{{ $ticket->id_event }}">{{ $ticket->eventData->title }}</a></td>
                            <td class="text-center">{{ $ticket['ticket_type'] }}</td>
                            <td class="text-center">{{ formatRupiah($ticket['price']) }}</td>
                            <td class="text-center">{{ $ticket['quota'] }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="#" class="mr-2">Edit</a>
                                <span>|</span>
                                <a href="#" class="ml-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Tipe Tiket</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Kuota</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-user-layout>
