

@forelse($teacher as $t)
    <a href="{{route('Teacher_single' , $t->id)}}">{{$t->name}}</a>
    <br>
@empty
    <p>There is no teachers</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Teacher/create') }}'">Add</button>

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
