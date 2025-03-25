<div>

    <div class="main-content">
        <div class="container-fluid">
            <!-- add product form -->
            <div class="com_card mx-2">
                <h3 class="com_card_title mb-3">Add New Product</h3>

                <form wire:submit.prevent="saveProduct">
                    <label for="" class="form_label">Product Title</label>

                    <input type="text" class="form-input" wire:model="title" placeholder="Title" required>

                    <label for="" class="form_label mt-2">Category</label>

                    <select wire:model="category_id" class="form-input">

                        <option value="">Select Category</option>

                        @foreach ($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach

                    </select>

                    <label for="" class="form_label mt-2">Description</label>
                    <textarea wire:model="description" class="form-input" placeholder="Description" required></textarea>

                    <label for="" class="form_label mt-2">Price</label>
                    <input type="number" class="form-input" wire:model="price" placeholder="Price" required>

                    <label for="" class="form_label mt-2">Product Image</label>
                    <input type="file" class="form-input" wire:model="image" required>

                    <button type="submit" class="btn-one mt-3">Add Product</button>
                </form>
                @if (session()->has('message'))

                    <p>{{ session('message') }}</p>

                @endif
            </div>
        </div>
    </div>
</div>



