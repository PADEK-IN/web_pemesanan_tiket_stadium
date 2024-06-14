<x-admin-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>{{ $event->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($event->image) }}" alt="{{ $event->name }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Deskripsi:</strong> {{ $event->description }}</p>
                            <p><strong>Jadwal:</strong> {{ $event->date }} | {{ $event->time }}</p>
                            <p><strong>Status Event:</strong> {{ $event->isActive?"Aktif":"Selesai" }}</p>
                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
