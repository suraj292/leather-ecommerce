<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>image</th>
            <th>title</th>
            <th>price</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> title </td>
                <td class="text-success text-uppercase"> image </td>
                <td> price </td>
            </tr>
        </tbody>
    </table>
    <hr>

{{--    @foreach($test as $collection)--}}
{{--    <h4>--}}
{{--        collection : {{ $collection->name }} <br>--}}
{{--        @forelse($collection->collectionLink as $index => $product)--}}
{{--            <br>product {{ $index + 1 }} : {{ $product->products->title }}--}}
{{--            <br>price {{ $index + 1 }} : {{ $product->products->price }}--}}
{{--            <br>--}}
{{--        @empty--}}
{{--            <br>No Products--}}
{{--        @endforelse--}}
{{--    </h4>--}}
{{--    <hr>--}}
{{--    @endforeach--}}

    @foreach($test->collectionLink as $product)
        <h4>
            {{ $product->products->title }}
{{--            collection : {{ $collection->name }}--}}
{{--            @foreach($collection->collectionLink as $product)--}}
{{--                <br>product : {{ $product->products->title }}--}}
{{--                <br>price : {{ $product->products->price }}--}}
{{--                <br>--}}
{{--            @endforeach--}}
        </h4>
        <hr>
    @endforeach

</div>
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@endsection
