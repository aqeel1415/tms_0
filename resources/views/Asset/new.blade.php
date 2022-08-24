<form method="post" action="{{route('Asset_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">Asset name </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Asset name" name="name" >
        <br>
        <label class="visually-hidden">Quantity </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="Asset Quantity" name="quantity" >
        <br>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
