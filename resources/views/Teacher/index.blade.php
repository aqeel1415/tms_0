@forelse($teacher as $t)
    <a href="{{route('Teacher_single' , $t->id)}}">{{$t->name}}</a>
    <br>
@empty
    <p>There is no teachers</p>
@endforelse

<button type="button" onclick="window.location='{{ url('Teacher/create') }}'">Add</button>
