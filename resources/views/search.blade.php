@extends('layouts.app') {{-- Или ваш основной макет --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Категории</h2>
                <div class="list-group">
                    <a href="{{ route('search') }}" class="list-group-item list-group-item-action @if(!request('category')) active @endif">Все категории</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('search', ['category' => $category->slug, 'q' => request('q')]) }}"
                           class="list-group-item list-group-item-action @if(request('category') == $category->slug) active @endif">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <div class="mb-4">
                    <form action="{{ route('search') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Поиск по названию товара" name="q" value="{{ $searchTerm }}">
                        <input type="hidden" name="category" value="{{ $categorySlug }}"> {{-- Сохраняем выбранную категорию --}}
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>
                </div>

                <h2>Результаты поиска</h2>
                @if ($searchResults->isNotEmpty())
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($searchResults as $product)
                            <div class="col">
                                <div class="card">
                                    <img src="{{ $product->imageUrl }}" class="card-img-top" alt="{{ $product->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                        <p class="card-text"><small class="text-muted">Цена: {{ $product->price }} ₽</small></p>
                                        <a href="{{ route('moonlight') }}" class="btn btn-sm btn-outline-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        {{ $searchResults->appends(request()->except('page'))->links() }}
                    </div>
                @else
                    <p>Нет товаров, соответствующих вашим критериям.</p>
                @endif
            </div>
        </div>
    </div>
@endsection