<form action="{{ route('admin.products.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
            Категория
        </label>
        <select id="category_id" name="category_id" required>
            <option value="">Выберите категорию</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Название
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="name" name="name" type="text" value="{{ old('name') }}" required>
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Описание
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Цена
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="price" name="price" type="number" step="0.01" value="{{ old('price') }}" required>
        @error('price')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
            Количество
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="quantity" name="quantity" type="number" value="{{ old('quantity') }}" required>
        @error('quantity')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                Slug (URL)
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="slug" name="slug" type="text" value="{{ old('slug', Str::slug(old('name'))) }}">
            <p class="text-gray-500 text-xs italic">Будет сгенерирован автоматически из названия, но вы можете изменить.</p>
            @error('slug')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
        URL изображения
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="image" name="image" type="url" value="{{ old('image') }}">
    @error('image')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="in_stock">
        В наличии
    </label>
    <div class="flex items-center">
        <input type="checkbox" id="in_stock" name="in_stock_checkbox" class="form-checkbox h-5 w-5 text-green-500 focus:ring-green-500 border-gray-300 rounded" {{ old('in_stock') ? 'checked' : '' }}>
        <input type="hidden" name="in_stock" value="{{ old('in_stock', 0) }}">
        <span class="ml-2 text-gray-700 text-sm">Отметьте, если товар есть в наличии</span>
    </div>
    @error('in_stock')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('in_stock_checkbox');
        const hiddenInput = document.querySelector('input[name="in_stock"]');

        checkbox.addEventListener('change', function() {
            hiddenInput.value = this.checked ? 1 : 0;
        });

        // Устанавливаем начальное значение скрытого поля при загрузке страницы
        hiddenInput.value = checkbox.checked ? 1 : 0;
    });
</script>

    <div class="flex items-center justify-between">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
            Сохранить товар
        </button>
        <a href="{{ route('admin.products.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
            Назад к списку товаров
        </a>
    </div>
</form>