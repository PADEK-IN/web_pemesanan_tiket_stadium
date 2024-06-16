<x-user-layout>
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

        <h3 class="card-header">Review Acara</h3>
        <div class="card-body">
            <form action="{{ route('admin.event.create') }}" method="post" id="validationform">
                @csrf
                <input type="number" value="{{ $event->hashid }}" class="d-none" disabled>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ $event->name }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ $event->description }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Rating</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">&#9733;</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Komentar</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <textarea required="" class="form-control" name="comment"></textarea>
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
            window.location.href='/transaction';
        });
    </script>
</x-user-layout>
