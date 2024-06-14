<x-admin-layout>
    <div class="card">
        <!-- Error Messages -->
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

        <h3 class="card-header">Ticket Baru</h3>
        <div class="card-body">
            <form action="{{ route('admin.ticket.create') }}" method="post" id="validationform">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control form-control-sm" name="id_event">
                            <option disabled selected>Pilih Acara</option>
                            @foreach ( $events as $event )
                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Tipe Tiket</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control form-control-sm" name="ticket_type">
                            <option disabled selected>Pilih Tipe Tiket</option>
                            <option value="reguler">Reguler</option>
                            <option value="vip">VIP</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga/Kuota</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input type="number" required="" class="form-control" name="price" placeholder="Masukkan harga tiket">
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <input type="number" required="" class="form-control" name="quota" placeholder="Masukkan kuota tiket">
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <button type="button" class="btn btn-space btn-warning" id="cancelButton">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Handle Cancel button click
        document.getElementById('cancelButton').addEventListener('click', function() {
            window.location.href='/admin/event';
        });
    </script>
</x-admin-layout>
