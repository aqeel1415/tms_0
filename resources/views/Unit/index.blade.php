
@forelse($units as $l)
    <a href="{{route('Unit_single' , $l->id)}}">{{$l->title}}</a>
    <br>
@empty
    <p>There is no units</p>
@endforelse
<button type="button" onclick="window.location='{{ url('Unit/create') }}'">Add</button>

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
