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

        <h3 class="card-header">Acara Baru</h3>
        <div class="card-body">
            <form action="{{ route('admin.event.create') }}" method="post" id="validationform" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" placeholder="Masukkan nama acara" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <textarea required="" class="form-control" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control form-control-sm" name="id_event">
                            <option disabled selected>Pilih Acara</option>
                            @foreach ( $categories as $category )
                            <option value="{{ $categort->id }}">{{ $categort->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal/Waktu</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input id="date" type="date" required="" class="form-control" name="date">
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <input type="time" required="" data-parsley-equalto="#pass2" class="form-control" name="time">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kuota/Harga</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input id="date" type="date" required="" class="form-control" name="date">
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <input type="time" required="" data-parsley-equalto="#pass2" class="form-control" name="time">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="file" id="image" name="image" class="form-control-file">
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
