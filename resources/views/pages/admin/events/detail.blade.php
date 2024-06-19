<x-admin-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/event/'.$event->image) }}" alt="{{ $event->name }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Deskripsi:</strong> {{ $event->description }}</p>
                            <p><strong>Jadwal:</strong> {{ $event->schedule }}</p>
                            <p><strong>Kategori:</strong> {{ $event->eventCategory->name }}</p>
                            <p><strong>Kuota:</strong> {{ $event->quota }}</p>
                            <p><strong>Harga:</strong> {{ formatRupiah($event->price) }}</p>
                            <p><strong>Status Event:</strong> {{ $event->isActive?"Aktif":"Selesai" }}</p>
                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
