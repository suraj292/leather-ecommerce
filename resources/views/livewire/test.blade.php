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

    <div>
        <button wire:click="increment"> + </button>
        <h1>{{$p}}</h1>
        <button wire:click="decrement"> - </button>
    </div>
</div>
