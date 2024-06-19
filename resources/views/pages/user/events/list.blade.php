<x-user-layout>
    <div class="bg-white pl-2 py-2">
        <div class="d-flex justify-content-between m-2">
            <h4>List Acara</h4>
            <div class="d-flex">
                <label for="searchInput" class="mr-2 mt-1">Cari:</label>
                <input type="text" id="searchInput" placeholder="Search..." class="form-control mb-3">
            </div>
        </div>
        <div>
            {{-- {{ dd($events) }} --}}
        </div>
        <div id="cardContainer" class="d-flex flex-wrap">
            @foreach($events as $index => $event)
            <div class="card card-list m-2" data-title="{{ strtolower($event->name) }}" data-description="{{ strtolower($event->description) }}">
                <div class="card-img-top position-relative">
                    <img class="img-fluid card-img" src="{{ asset('assets/img/event').'/'.$event->image }}" alt="Gambar Event">
                    <div class="position-absolute" style="top: 10px; left: 10px; color: white; background-color: rgba(0, 0, 0, 0.5); padding: 2px;">
                        {{ $event->eventCategory->name }}
                    </div>
                    <div class="position-absolute" style="bottom: 10px; left: 10px; color: white; background-color: rgba(0, 0, 0, 0.5); padding: 2px;">
                        {{ $event->totalTransaction }}/{{ $event->quota }}
                    </div>
                    <div class="position-absolute" style="bottom: 10px; right: 10px; color: white; background-color: rgba(0, 0, 0, 0.5); padding: 2px;">
                        {{ formatRupiah($event->price) }}
                    </div>
                </div>
                <div class="card-body d-flex flex-column" style="min-height: 200px;">
                    <h3 class="card-title"><a href="/event/{{ $event->hashid }}">{{ $event->name }}</a></h3>
                    <p class="card-text">{{ Str::limit($event->description, 50) }}</p>
                    <p class="text-muted">{{ $event->schedule }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="/transaction/create/{{ $event->hashid }}" class="btn btn-primary {{ eventStatus($event->schedule, 'event') }}">
                        {{ $event['isActive'] ? "Pesan Tiket" : "Selesai" }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <ul id="pagination" class="pagination justify-content-center mt-3"></ul>
    </div>

</x-user-layout>
