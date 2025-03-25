
<div>
    <style>
        .pcc_btns {
            display: flex;
            gap: 5px; /* Adjust spacing between buttons */
        }
        .pcc_btns button,
        .pcc_btns a {
            flex: 1; /* Makes both buttons take equal width */
            text-align: center; /* Centers text */
        }
    </style>

    <div class="container">
        <div class="row">
            @if (session()->has('message'))

                <div class="alert alert-success">{{ session('message') }}</div>

            @endif
            @foreach ($products as $product)
            <div class="col-lg-4">
                <div class="product_card">
                    <img src="{{ asset('storage/' . $product->image) }}" style="width:150px; height: 100px; contain:content;"  alt="{{ $product->title }}">

                    <div class="pc_content">
                        <h2>{{ $product->title }}</h2>
                        <p class="pcc_in">In <a href="{{route('category.show',$product->category->id)}}">{{$product->category->name}}</a></p>
                        <p class="pcc_price">${{ $product->price }}</p>

                        <div class="pcc_btns">
                            <button wire:click="addToCart({{ $product->id }})" class="addtocart">
                                Add&nbsp;To<br>Cart
                            </button>
                            <a href="{{ route('product.show', $product->id) }}" class="viewbtn">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>




