<x-admin-layout>
    <div class="card">
        <h5 class="card-header">Semua Data Pengguna</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="event-list" class="table table-striped table-bordered my-3">
                    <thead>
                        <tr>
                            <th class="text-center px-2">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">No. Hp</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                        <tr>
                            <td class="text-center" >{{ $index + 1 }}</td>
                            <td class="text-justify">{{ $user["name"] }}</td>
                            <td class="text-justify">{{ $user["email"] }}</td>
                            <td class="text-center">{{ $user["gender"] == "male"?"LK":"PR" }}</td>
                            <td class="text-center">{{ $user["phone"] }}</td>
                            <td class="text-center">{{ $user["role"] }}</td>
                            <td class="text-center" style="padding: 0">
                                <a href="#" class="mr-2">Edit</a>
                                <span>|</span>
                                <a href="#" class="ml-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">No. Hp</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
