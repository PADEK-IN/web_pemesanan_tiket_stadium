<x-admin-layout>
    <div class="card">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Edit Profile</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/user/'.$user->image) }}" alt="user-profile" class="img-fluid" width="300px">
                        </div>
                        <div class="col-md-6">
                            @include('pages.admin.profile.partials.update-profile-information-form')
                            <hr>
                            @include('pages.admin.profile.partials.update-password-form')
                            <hr>
                            @include('pages.admin.profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
