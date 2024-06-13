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
                            <th class="text-center">Id Ticket</th>
                            <th class="text-center">Tipe Tiket</th>
                            <th class="text-center">Bukti Bayar</th>
                            <th class="text-center">Tanggal Bayar</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $transaction)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-justify">{{ $transaction->userData->name }}</td>
                            <td class="text-justify">{{ $transaction->ticketData->id }}</td>
                            <td class="text-center">{{ $transaction->ticketData->ticket_type }}</td>
                            <td class="text-center"><img src="assets/img/uploads/{{ $transaction->proof }}" alt=bukti_bayar"></td>
                            <td class="text-center">{{ $transaction->date }}</td>
                            <td class="text-center">{{ $transaction->idValid ? 'Valid' : 'Tidak Valid' }}</td>
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
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">Id Ticket</th>
                            <th class="text-center">Tipe Tiket</th>
                            <th class="text-center">Bukti Bayar</th>
                            <th class="text-center">Tanggal Bayar</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
