<x-admin-layout>
    <div class="card">
        <div class="d-flex justify-content-between m-2">
            <h5 class="card-header">Semua Data Kategori</h5>
            <a href="{{ route('admin.category.create') }}" class="btn btn-space btn-primary">Buat Kategori</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2" >No</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-justify">{{ $category->name }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="{{ route('admin.category.edit', $category->hashid) }}" class="mr-2">Edit</a>
                                <span>|</span>
                                <a href="{{ route('admin.category.destroy', $category->hashid) }}" class="ml-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
