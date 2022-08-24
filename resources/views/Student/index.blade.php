
@forelse($students as $l)
    <a href="{{route('Student_single' , $l->id)}}">{{$l->name}}</a>
    <br>
@empty
    <p>There is no students</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Student/create') }}'">Add</button>


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
