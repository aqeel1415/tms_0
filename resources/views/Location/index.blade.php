
@forelse($locations as $loc)
    <a href="{{route('Location_single' , $loc->id)}}">{{$loc->title}}</a>
    <br>
@empty
    <p>There is no locations</p>
@endforelse
