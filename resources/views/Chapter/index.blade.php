
@forelse($chapters as $ch)
    <a href="{{route('Chapter_single' , $ch->id)}}">{{$ch->title}}</a>
    <br>
@empty
    <p>There is no chapters</p>
@endforelse
