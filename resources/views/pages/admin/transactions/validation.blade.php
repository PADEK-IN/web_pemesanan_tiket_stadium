<x-admin-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Detail transaksi tiket #{{ $transaction->hashid }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/uploads/'.$transaction->proof) }}" alt="bukti-pembayaran" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('admin.transaction.validation', $transaction->hashid) }}" method="post">
                                @csrf
                                {{-- @method('PATCH') --}}
                                <p><strong>Nama Pengguna:</strong> {{ $transaction->userData->name }}</p>
                                <p><strong>No Hp:</strong> {{ $transaction->userData->phone }}</p>
                                <hr>
                                <p><strong>Acara:</strong> {{ $transaction->eventData->name }}</p>
                                <p><strong>Jadwal Acara:</strong> {{ $transaction->eventData->schedule }}</p>
                                <p><strong>Harga Tiket:</strong> {{ formatRupiah($transaction->eventData->price) }}</p>
                                <hr>
                                <p><strong>Jumlah Tiket:</strong> {{ $transaction->quantity }}</p>
                                <p><strong>Total Pembayaran:</strong> {{ formatRupiah($transaction->eventData->price * $transaction->quantity) }}</p>
                                <p><strong>Tanggal Pembayaran:</strong> {{ $transaction->created_at }}</p>
                                <p><strong>Status Transaksi:</strong> <input class="form-control col-6" type="text" value="{{ $transaction->status }}" name="status" placeholder="Tulis pesan status transaksi"></p>
                                <p><strong>Status Pembayaran:</strong>
                                    <select name="isValid" class="form-control col-6">
                                        <option disabled>Pilih Status pembayaran</option>
                                        <option value="1" {{ $transaction->isValid?"selected":"" }}>Valid</option>
                                        <option value="0" {{ $transaction->isValid?"":"selected" }}>Tidak Valid</option>
                                    </select>
                                </p>
                                <button type="submit" class="btn btn-sm btn-info">Submit</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="window.location.href='/admin/transaction'">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
