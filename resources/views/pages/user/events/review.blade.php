<x-user-layout>
    <div class="card">
        <h3 class="card-header">Review Acara</h3>
        <div class="card-body">
            <form action="{{ route('event.review.store') }}" method="post" id="validationform">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Acara</label>
                    <div class="col-12 col-sm-8 col-lg-6 rating">
                        <span class="pt-2">{{ $event->name }}</span>
                        <input type="text" value="{{ $event->hashid }}" name="id_event" class="d-none form-control">
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
                        <input type="radio" name="rating" value="5" {{ isset($review) && $review->rating == 5 ? 'checked' : '' }} id={{ isset($review)?'':'star5' }} >
                        <label for="star5">&#9733;</label>
                        <input type="radio" name="rating" value="4" {{ isset($review) && $review->rating == 4 ? 'checked' : '' }} id={{ isset($review)?'':'star4' }} >
                        <label for="star4">&#9733;</label>
                        <input type="radio" name="rating" value="3" {{ isset($review) && $review->rating == 3 ? 'checked' : '' }} id={{ isset($review)?'':'star3' }} >
                        <label for="star3">&#9733;</label>
                        <input type="radio" name="rating" value="2" {{ isset($review) && $review->rating == 2 ? 'checked' : '' }} id={{ isset($review)?'':'star2' }} >
                        <label for="star2">&#9733;</label>
                        <input type="radio" name="rating" value="1" {{ isset($review) && $review->rating == 1 ? 'checked' : '' }} id={{ isset($review)?'':'star1' }} >
                        <label for="star1">&#9733;</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Komentar</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <textarea required class="form-control" name="comment" {{ isset($review) && $review->comment ? 'disabled' : '' }}>{{ $review->comment ?? '' }}</textarea>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        @if (!isset($review))
                            <button type="submit" class="btn btn-space btn-primary">Kirim</button>
                        @endif
                        <button type="button" class="btn btn-space btn-warning" id="cancelButton">Kembali</button>
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
