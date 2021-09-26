<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            @isset($image)
                <div class="col-xl-8">
                    <div id="carouselCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $image->preview }}"
                                     class="d-block w-100" alt="..." loading="lazy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $image->preview }}"
                                     class="d-block w-100" alt="..." loading="lazy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $image->preview }}"
                                     class="d-block w-100" alt="..." loading="lazy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
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
