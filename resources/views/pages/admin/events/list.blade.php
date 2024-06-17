<x-admin-layout>
    <div class="card">
        <div class="d-flex justify-content-between m-2">
            <h5 class="card-header">Semua Data Acara</h5>
            <a href="{{ route('admin.event.create') }}" class="btn btn-space btn-primary">Create Event</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2" >No</th>
                            <th class="text-center">Judul</th>
                            {{-- <th class="text-center">Deskripsi</th>
                            <th class="text-center">Kategori</th> --}}
                            <th class="text-center">Jadwal</th>
                            <th class="text-center">Kuota</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $index => $event)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-justify"><a href="/admin/event/{{ $event->hashid }}">{{ $event->name }}</a></td>
                            {{-- <td class="text-justify">{{ Str::limit($event['description'], 25) }}</td>
                            <td class="text-center">{{ $event->eventCategory->name }}</td> --}}
                            <td class="text-center">{{ $event->schedule }}</td>
                            <td class="text-center">{{ $event->quota }}</td>
                            <td class="text-left">{{ formatRupiah($event->price) }}</td>
                            <td class="text-center">{{ $event['isActive']?"Aktif":"Selesai" }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="/admin/event/edit/{{ $event->hashid }}" class="mr-2">Edit</a>
                                <span>|</span>
                                <a href="{{ route('admin.event.destroy', $event->hashid) }}" class="ml-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Judul</th>
                            {{-- <th class="text-center">Deskripsi</th>
                            <th class="text-center">Kategori</th> --}}
                            <th class="text-center">Jadwal</th>
                            <th class="text-center">Kuota</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
