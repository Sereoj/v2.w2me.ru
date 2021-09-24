<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">

            <h2>{{ isset($header)  ? $header : '' }}</h2>


        @foreach($images as $image )
                <div class="col-lg-4 col-md-6">
                    <div class="images-list">
                        <a href="{{ url('images', $image->id) }}">
                            <img src="{{ $image->preview }}" loading="lazy" class="img-fluid">
                        </a>
                        <div class="images-list-text">
                            <h3>{{ $image->name }}</h3>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </x-slot>
</x-app-layout>
