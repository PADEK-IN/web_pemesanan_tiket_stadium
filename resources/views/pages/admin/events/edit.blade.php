<x-admin-layout>
    <div class="card">
        <h3 class="card-header">Edit Acara</h3>
        <div class="card-body">
            <form action="/admin/event/update/{{ $event->hashid }}" method="post" id="validationform" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" placeholder="Masukkan nama acara" class="form-control" name="name" value="{{ $event->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <textarea required="" class="form-control" name="description">{{ $event->description }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control form-control-sm" name="id_category">
                            <option disabled>Pilih Kategori</option>
                            @foreach ( $categories as $category )
                            <option value="{{ $category->hashid }}" {{ $event->id_category == $category->id?'selected':'' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Jadwal Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="datetime-local" required="" placeholder="Masukkan jadwal" class="form-control" name="schedule" value="{{ $event->schedule }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kuota/Harga</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input type="number" required="" class="form-control" name="quota" placeholder="Kuota Acara" value={{ $event->quota }}>
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <input type="number" required="" class="form-control" name="price" placeholder="Harga Tiket (Rupiah)" value={{ $event->price }}>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6 flex flex-col">
                        <img src="{{ asset('assets/img/event/'.$event->image) }}" alt="gambar acara" width="150px" class="mb-2">
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
