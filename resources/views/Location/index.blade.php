
@forelse($locations as $loc)
    <a href="{{route('Location_single' , $loc->id)}}">{{$loc->title}}</a>
@empty
    <p>There is no locations</p>
@endforelse
