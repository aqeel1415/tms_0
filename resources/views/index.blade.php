

@forelse($Chapters as $Chapter)
    <a href="{{route('single' , $Chapter->id)}}">{{$Chapter->title}}</a>
@empty
    <p>There is no chapters</p>

@endforelse
