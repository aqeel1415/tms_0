<form method="post" action="{{route('AssetLocation_new.post')}}">
    @csrf
    <div class="col-auto">

        <label class="visually-hidden">Asset id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="asset_id" name="asset_id" >
        <br>
        <label class="visually-hidden">Unit id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="unit_id" name="unit_id" >
        <br>
        <label class="visually-hidden">Location id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="location_id" name="location_id" >
        <br>
        <label class="visually-hidden">Amount to assign </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="amount" name="amount" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>

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
