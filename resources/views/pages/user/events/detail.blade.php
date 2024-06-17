<x-user-layout>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops! Something went wrong.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
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
                            <p><strong>Jadwal:</strong> {{ $event->schedule }}</p>
                            <p><strong>Kategori:</strong> {{ $event->eventCategory->name }}</p>
                            <p><strong>Kuota:</strong> {{ $totalTransaction }}/{{ $event->quota }}</p>
                            <p><strong>Harga:</strong> {{ formatRupiah( $event->price) }}</p>
                            <p><strong>Status Event:</strong> {{ eventStatus($event->schedule, 'status') }}</p>
                            <div class="text-center">
                                <a href="/transaction/create/{{ $event->hashid }}" class="btn btn-primary
                                {{ eventStatus($event->schedule, 'event') }}">
                                 {{ $event['isActive']?"Pesan Tiket":"Selesai" }}</a>
                                 <button class="btn btn-warning" onclick="window.location.href='/event'">Kembali</button>
                            </div>
                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
