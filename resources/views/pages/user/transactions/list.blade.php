<x-user-layout>
    <div class="card">
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
                            <th class="text-center">Jumlah Tiket</th>
                            <th class="text-center">Total Bayar</th>
                            <th class="text-center">Tanggal Bayar</th>
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
                            <td class="text-justify"><a href="/event/{{ $transaction->eventData->hashid }}">{{ $transaction->eventData->name }}</a></td>
                            <td class="text-center">{{ $transaction->quantity }}</td>
                            <td class="text-left">{{ formatRupiah($transaction->eventData->price * $transaction->quantity) }}</td>
                            <td class="text-center">{{ $transaction->created_at }}</td>
                            <td class="text-center">{{ eventStatus($transaction->eventData->schedule, 'status') }}</td>
                            <td class="text-center">{{ $transaction->status }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="/event/review/{{ $transaction->eventData->hashid }}" class="btn btn-sm btn-secondary
                                {{ eventStatus($transaction->eventData->schedule, 'button') }}">Review</a>
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
