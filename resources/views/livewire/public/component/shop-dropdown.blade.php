@foreach($categories as $category)
    <li>
        <a href="{{ route('products', $category->product_category) }}">{{$category->product_category}}</a>
        @if(count($category->sub_category) > 0)
        <ul>
            @foreach($category->sub_category as $subcategory)
            <li><a wire:click="$emit('product_category', {{$subcategory->id}})">{{$subcategory->sub_category}}</a></li>
            @endforeach
        </ul>
        @endif
    </li>
@endforeach
