<x-user-layout>
    <div class="card">
        <h3 class="card-header">Pemesanan Tiket Acara</h3>
        <div class="card-body">
            <form action="{{ route('transaction.create.store') }}" method="post" id="validationform" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ $event->name }}</span>
                        <input type="text" value="{{ $event->hashid }}" name="id_event" class="d-none form-control">
                        <input type="text" value="{{ $event->quota }}" name="quota" class="d-none form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ $event->description }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga Tiket</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ formatRupiah($event->price) }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Jumlah/Total</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input type="number" required="" class="form-control" id="qty" name="quantity" placeholder="Jumlah Tiket">
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <input id="price" class="d-none" value="{{ $event->price }}">
                        <input type="text" required="" class="form-control" id="amount" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Bukti Pembayaran</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="file" id="proof" name="proof" class="form-control-file">
                        <p class="text-danger mt-1"><i>Lakukan pembayaran ke rekening BSI: 1010202030 a/n TakeItNow sesuai nominal total dan upload bukti pembayaran dengan jelas.</i></p>
                    </div>
                </div>

                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Pesan</button>
                        <button type="button" class="btn btn-space btn-warning" id="cancelButton">Kembali</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Handle Cancel button click
        document.getElementById('cancelButton').addEventListener('click', function() {
            window.location.href='/event';
        });

        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('qty');
            const priceInput = document.getElementById('price');
            const amountInput = document.getElementById('amount');

            function formatRupiah(amount) {
                const formattedAmount = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(amount);
                // return formattedAmount.replace(/\u00A0/g, ''); // Remove non-breaking spaces
                return formattedAmount
            }

            function updateAmount() {
                const quantity = parseFloat(quantityInput.value) || 0;
                const price = parseFloat(priceInput.value) || 0;
                const totalAmount = quantity * price;

                amountInput.value = formatRupiah(totalAmount);
            }

            quantityInput.addEventListener('input', updateAmount);
        });
    </script>
</x-user-layout>
