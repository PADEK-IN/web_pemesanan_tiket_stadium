<x-guest-layout>

    <div style="width: 100%; height: 90px; background-color: black;"  ></div>

    <main id="main">
        <section id="event" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
            <h2>Acara</h2>
            <p>Gelaran acara menarik yang spektakuler.</p>
            </div>

            <div class="row">
            @foreach($events as $index => $event)
            <div class="col-lg-4 col-md-6">
                <div class="event">
                <div class="event-img card-img-top position-relative">
                    <img src="{{ asset('assets/img/event/'.$event->image) }}" alt="{{ $event->name }}" class="img-fluid card-img"  width="350px">
                    <div class="position-absolute" style="top: 10px; left: 10px; color: white; background-color: rgba(0, 0, 0, 0.5); padding: 2px;">
                        {{ $event->schedule }}
                    </div>
                </div>
                <div class="d-flex flex-column" style="min-height: 150px;">
                    <h3><a href="#">{{ $event->name }}</a></h3>
                    <p>{{ formatRupiah($event->price) }}</p>
                    <p>{{ Str::limit($event->description, 50) }}</p>
                </div>
                <div class="my-4 text-center">
                    <button type="button" onclick="window.location.href='/login'">Pesan Tiket</button>
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>

        </section>
    </main>

</x-guest-layout>
