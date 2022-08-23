
@foreach ($AssetShortages as $w)
    {{ $w }}
    <br>
@endforeach

<button type="button" onclick="window.location='{{ url('AssetShortage/create') }}'">Add</button>
