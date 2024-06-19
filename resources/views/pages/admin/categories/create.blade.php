<x-admin-layout>
    <div class="card">
        <h3 class="card-header">Kategori Baru</h3>
        <div class="card-body">
            <form action="{{ route('admin.category.create') }}" method="post" id="validationform">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" placeholder="Masukkan nama kategori" class="form-control" name="name">
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
            window.location.href='/admin/category';
        });
    </script>
</x-admin-layout>
