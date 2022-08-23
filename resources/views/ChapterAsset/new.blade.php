<form method="post" action="{{route('ChapterAsset_new.post')}}">
    @csrf
    <div class="col-auto">

        <label class="visually-hidden">Level id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="level_id" name="level_id" >
        <br>
        <label class="visually-hidden">Chapter id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="chapter_id" name="chapter_id" >
        <br>
        <label class="visually-hidden">Required Quantity </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="quantity" name="quantity" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
