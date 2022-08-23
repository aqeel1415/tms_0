
@forelse($levels as $l)
    <a href="{{route('Level_single' , $l->id)}}">{{$l->title}}</a>
    <br>
@empty
    <p>There is no levels</p>
@endforelse
