<x-user-layout>
    <div class="bg-white pl-2 py-2">
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
            <h4>List Acara</h4>
            <div class="d-flex">
                <label for="searchInput" class="mr-2 mt-1">Cari:</label>
                <input type="text" id="searchInput" placeholder="Search..." class="form-control mb-3">
            </div>
        </div>

        <div id="cardContainer" class="d-flex flex-wrap">
            @foreach($events as $index => $event)
            <div class="card card-list m-2" data-title="{{ strtolower($event->name) }}" data-description="{{ strtolower($event->description) }}">
                <div class="card-img-top">
                    <img class="img-fluid card-img" src="{{ asset('assets/img/event').'/'.$event->image }}" alt="Gambar Event">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="/event/{{ $event->hashid }}">{{ $event->name }}</a></h3>
                    <p class="card-text">{{ Str::limit($event->description, 50) }}</p>
                    <p class="text-muted">{{ $event->date }} | {{ $event->time }}</p>
                    <p class="text-muted">{{ $event->eventCategory->name }}</p>
                    <p class="text-muted">{{ $event->quota }}</p>
                    <p class="text-muted">{{ formatRupiah($event->price) }}</p>
                    <div class="text-center">
                        <a href="/transaction/create/{{ $event->hashid }}" class="btn btn-primary
                        {{ eventStatus($event->date, $event->time, 'event') }}">
                         {{ $event['isActive']?"Pesan Tiket":"Selesai" }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <ul id="pagination" class="pagination justify-content-center mt-3"></ul>
    </div>

</x-user-layout>
