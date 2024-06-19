<x-admin-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>{{ $user->name }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/user/'.$user->image) }}" alt="{{ $user->name }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                            <p><strong>Nama Lengkap:</strong> {{ $user->name }}</p>
                            <p><strong>Jenis Kelamin:</strong> {{ $user->gender }}</p>
                            <p><strong>Nomor Telepon:</strong> {{ $user->phone }}</p>
                            <p><strong>Status:</strong> {{ ucwords(strtolower($user->role)) }}</p>
                            <button class="btn btn-warning" onclick="window.location.href='/admin/user'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
