@foreach ($galleries as $gallery)
    <div class="col-50 filtr-item" data-category="1, 2">
        <a href="{{ asset('storage/' . $gallery->path) }}" data-lightbox="image-1"><img
                src="{{ asset('storage/' . $gallery->path) }}" alt=""></a>
    </div>
@endforeach
