
@forelse($levels as $l)
    <a href="{{route('Level_single' , $l->id)}}">{{$l->title}}</a>
    <br>
@empty
    <p>There is no levels</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Level/create') }}'">Add</button>

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
