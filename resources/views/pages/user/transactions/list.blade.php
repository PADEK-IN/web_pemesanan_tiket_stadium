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
            <h4 class="card-header">History Pembelian Tiket</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2" >No</th>
                            <th class="text-center">Kode Tiket</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Jadwal Acara</th>
                            <th class="text-center">Status Acara</th>
                            <th class="text-center">Pembayaran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $transaction)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-center">{{ $transaction->hashid }}</td>
                            <td class="text-justify"><a href="/admin/event/{{ $transaction->id_event->hashid }}">{{ $transaction->eventData->name }}</a></td>
                            <td class="text-center">{{ formatRupiah($transaction->eventData->price) }}</td>
                            <td class="text-center">{{ $transaction->eventData->date }} | {{ $transaction->eventData->time }}</td>
                            <td class="text-center">{{ eventStatus($transaction->eventData->date, $transaction->eventData->time, 'status') }}</td>
                            <td class="text-center">{{ $transaction->status }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="/event/review/{{ $transaction->eventData->hashid }}" class="btn btn-sm btn-secondary
                                {{ eventStatus($transaction->eventData->date, $transaction->eventData->time, 'button') }}">Review</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Tiket</th>
                            <th class="text-center">Nama Event</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Jadwal Acara</th>
                            <th class="text-center">Status Acara</th>
                            <th class="text-center">Pembayaran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-user-layout>
