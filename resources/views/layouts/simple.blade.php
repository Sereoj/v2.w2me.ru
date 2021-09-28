<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            @isset($image)
                <div class="col-xl-8">
                    @isset($carousel)
                    <div id="carouselCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($carousel as $key => $button)
                            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="{{ $loop->index }}"
                                    class="{{ $key == 1 ? 'active' : '' }}" aria-current="true" aria-label="{{ $button['0'] }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($carousel as $key => $img)
                            <div class="carousel-item {{ $key == 1 ? 'active' : '' }}">
                                <img src="{{ $img['1'] }}"
                                     class="d-block w-100" alt="..." loading="lazy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $img['0'] }}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endisset
                </div>
                <div class="col-xl-4 py-4 p-4">
                    <h2>{{ $image->name }}</h2>
                    <h4>Описание</h4>
                    <p>
                        {{ $image->description }}
                    </p>

                    <button type="button" class="btn btn-primary">Установить (.zip)</button>
                    <button type="button" class="btn btn-primary">Открыть в приложении</button>
                </div>
            @endisset
        </div>
    </x-slot>

    <x-slot name="meta_title">
        {{  $meta_title ?? "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  $meta_description ?? "World to Me" }}
    </x-slot>
</x-app-layout>
