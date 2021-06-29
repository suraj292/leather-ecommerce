@foreach($categories as $category)
    <li>
        <a href="">{{$category->product_category}}</a>
        @if($category->sub_category->count() > 0)
        <ul>
            @foreach($category->sub_category as $subcategory)
            <li><a href="#">{{$subcategory->sub_category}}</a></li>
            @endforeach
        </ul>
        @endif
    </li>
@endforeach
