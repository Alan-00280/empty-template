@props([
    'heading' => 'null',
    'description' => null
])

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $heading }}</h4>
            @if ($description)
                <p class="card-description"> {{ $description }} </p>
            @endif
            {{ $slot }}
        </div>
    </div>
</div>