<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
        <h2>{{ $header ?? '' }}</h2>
        @forelse($images as $image )
                <div class="col-lg-4 col-md-6">
                    <div class="images-list">
                        <a href="{{ url('catalog',Str::slug($image->name)) }}">
                            <img src="{{ $image->preview }}" loading="lazy" class="img-fluid" style="width: 100%;">
                        </a>
                        <div class="images-list-text">
                            <h3>{{ $image->name }}</h3>
                        </div>
                    </div>
                </div>
            @empty
            <p>В данный момент нет изображений.</p>
        @endforelse
        </div>
    </x-slot>

    <x-slot name="meta_title">
        {{  $meta_title ?? "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  $meta_description ?? "World to Me" }}
    </x-slot>
</x-app-layout>
