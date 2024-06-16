<x-user-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($event->image) }}" alt="{{ $event->name }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Deskripsi:</strong> {{ $event->description }}</p>
                            <p><strong>Jadwal:</strong> {{ $event->date }} | {{ $event->time }}</p>
                            <p><strong>Kategori:</strong> {{ $event->eventCategory->name }}</p>
                            <p><strong>Kuota:</strong> {{ $event->quota }}</p>
                            <p><strong>Harga:</strong> {{ formatRupiah( $event->price) }}</p>
                            <p><strong>Status Event:</strong> {{ eventStatus($event->date, $event->time, 'status') }}</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary
                                {{ eventStatus($event->date, $event->time, 'event') }}">
                                 {{ $event['isActive']?"Pesan Tiket":"Selesai" }}</a>
                                 <button class="btn btn-warning" onclick="history.back()">Kembali</button>
                            </div>
                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
