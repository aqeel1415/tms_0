<form method="post" action="{{route('AssetShortage_new.post')}}">
    @csrf
    <div class="col-auto">

        <label class="visually-hidden">Asset id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="asset_id" name="asset_id" >
        <br>
        <label class="visually-hidden">Required Quantity </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="quantity" name="quantity" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
