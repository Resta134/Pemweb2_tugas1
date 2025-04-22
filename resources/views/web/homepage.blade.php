<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <h3 class="my-4">Products</h3>
        <div class="row">
            @foreach($products as $product)
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 60) }}</p>
                            <a href="/products/{{ $product->slug }}" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
