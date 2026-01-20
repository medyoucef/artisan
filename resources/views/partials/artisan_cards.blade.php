@foreach ($artisans as $artisan)
    @php
        // Si la photo commence par "photos/", elle est dans storage/app/public/photos
        if (Str::startsWith($artisan->photo, 'photos/')) {
            $photoUrl = asset('storage/' . $artisan->photo);
        } 
        // Sinon, elle est dans public/img
        else {
            $photoUrl = asset('img/' . $artisan->photo);
        }
    @endphp

    <div class="col-lg-3 col-md-6">
        <div class="team-item">
            <div class="team-img">
                <img 
                    src="{{ $photoUrl }}" 
                    alt="Photo Artisan" 
                    style="width:100%; height:250px; object-fit:cover;">
            </div>

            <div class="team-text">
                <h2>{{ $artisan->nom }}</h2>
                <p>{{ $artisan->profession }}</p>
                <p><i class="fas fa-map-marker-alt"></i> {{ $artisan->ville }} - {{ $artisan->adresse }}</p>
                <p><i class="fas fa-phone-alt"></i> {{ $artisan->telephone }}</p>
            </div>

            <div class="team-social">
                @if ($artisan->facebook)
                    <a class="social-fb" href="{{ $artisan->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if ($artisan->instagram)
                    <a class="social-in" href="{{ $artisan->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                @endif
                @if ($artisan->whatsapp)
                    <a class="social-wa" href="https://wa.me/{{ $artisan->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                @endif
            </div>
        </div>
    </div>
@endforeach
