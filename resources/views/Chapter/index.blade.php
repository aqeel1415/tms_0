
@forelse($chapters as $ch)
    <a href="{{route('Chapter_single' , $ch->id)}}">{{$ch->title}}</a>
@empty
    <p>There is no chapters</p>
@endforelse
