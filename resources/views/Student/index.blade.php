
@forelse($students as $l)
    <a href="{{route('Student_single' , $l->id)}}">{{$l->name}}</a>
@empty
    <p>There is no students</p>
@endforelse
