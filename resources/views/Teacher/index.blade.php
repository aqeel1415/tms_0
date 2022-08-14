@forelse($teacher as $t)
    <a href="{{route('Teacher_single' , $t->id)}}">{{$t->name}}</a>
@empty
    <p>There is no teachers</p>
@endforelse
