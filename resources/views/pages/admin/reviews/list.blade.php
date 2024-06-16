<x-admin-layout>
    <div class="card">
        <h5 class="card-header">Semua Data Transaksi</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2" >No</th>
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Rating</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center">Tanggal Comment</th>
                            {{-- <th class="text-center">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $index => $review)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-left">{{ $review->userData->name }}</td>
                            <td class="text-center">{{ $review->eventData->name }}</td>
                            <td class="text-center">{{ $review->rating }}</td>
                            <td class="text-justify">{{ Str::limit($review->comment, 25) }}</td>
                            <td class="text-center">{{ $review->created_at->diffForHumans() }}</td>
                            {{-- <td class="text-center" style="padding: 0">
                                <a href="#" class="mr-2">Edit</a>
                                <span>|</span>
                                <a href="#" class="ml-2">Delete</a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Rating</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center">Tanggal Comment</th>
                            {{-- <th class="text-center">Aksi</th> --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
