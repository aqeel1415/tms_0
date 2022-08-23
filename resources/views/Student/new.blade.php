<form method="post" action="{{route('Student_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">Student Name </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Student name" name="name" >
        <br>
        <label class="visually-hidden">Student Phone </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="Student Phone" name="phone" >
        <br>
        <label class="visually-hidden">Student Email </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Student Email" name="email" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
