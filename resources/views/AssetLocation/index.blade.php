
@foreach ($AssetLocations as $w)
    {{ $w }}
    <br>
@endforeach

<button type="button" onclick="window.location='{{ url('AssetLocation/create') }}'">Add</button>


@if (session()->has('success'))
    <div class="alert alert-success">
        @if(is_array(session('success')))
            <ul>
                @foreach (session('success') as $message)
                    <br>
                    {{ $message }}
                @endforeach
            </ul>
        @else
            {{ session('success') }}
        @endif
    </div>
@endif
