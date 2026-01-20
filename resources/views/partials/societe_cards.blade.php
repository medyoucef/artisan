@foreach($societes as $societe)

@php
    $photoPath = $societe->photo;

    // Vérifie si l'image existe dans storage/app/public
    $storageExists = $photoPath && Storage::disk('public')->exists($photoPath);

    if ($storageExists) {
        $photoUrl = asset('storage/' . $photoPath);
    } else {
        $photoUrl = asset('img/' . basename($photoPath));
    }
@endphp


    <div class="col-lg-3 col-md-6 mb-4">
        <div class="team-item">
            <div class="team-img">
            <img 
    src="{{ $photoUrl }}" 
    alt="Image société" 
    style="width:100%; height:250px; object-fit:cover;">

            </div>

            <div class="team-text">
                <h2>{{ $societe->name }}</h2>
                <p><i class="fas fa-map-marker-alt"></i>  {{ $societe->adresse }}</p>

                <p>
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/{{ preg_replace('/\D+/', '', $societe->telephone) }}" target="_blank">
                        {{ $societe->telephone }}
                    </a>
                </p>
            </div>
        </div>
    </div>

@endforeach
