
@forelse($locations as $loc)
    <a href="{{route('Location_single' , $loc->id)}}">{{$loc->title}}</a>
    <br>
@empty
    <p>There is no locations</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Location/create') }}'">Add</button>

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
