
@forelse($chapters as $ch)
    <a href="{{route('Chapter_single' , $ch->id)}}">{{$ch->title}}</a>
    <br>
@empty
    <p>There is no chapters</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Chapter/create') }}'">Add</button>

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
