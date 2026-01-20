@foreach($societes as $societe)
    @php
        $photoPath = $societe->photo;
        $storageExists = $photoPath && \Illuminate\Support\Facades\Storage::disk('public')->exists($photoPath);
        $publicImgExists = $photoPath && file_exists(public_path('img/' . $photoPath));

        $photoUrl = $storageExists
            ? asset('storage/' . $photoPath)
            : ($publicImgExists
                ? asset('img/' . $photoPath)
                : asset('img/default-profile.png'));
    @endphp

    <div class="col-lg-3 col-md-6">
        <div class="team-item">
            <div class="team-img">
                <img src="{{ $photoUrl }}" alt="Photo Société" style="width:100%; height:250px; object-fit:cover;">
            </div>
            <div class="team-text">
                <h2>{{ $societe->nom_societe }}</h2>
                <p><i class="fas fa-map-marker-alt"></i> {{ $societe->ville }} - {{ $societe->adresse }}</p>
                <p><i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/{{ preg_replace('/\D+/', '', $societe->telephone) }}" target="_blank">
                        {{ $societe->telephone }}
                    </a>
                </p>
            </div>
        </div>
    </div>
@endforeach
