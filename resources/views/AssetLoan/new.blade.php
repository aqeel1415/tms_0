<form method="post" action="{{route('AssetLoan_new.post')}}">
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
        <label class="visually-hidden">Teacher id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="teacher_id" name="teacher_id" >
        <br>
        <label class="visually-hidden">Student id </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="student_id" name="student_id" >
        <br>
        <label class="visually-hidden">Amount </label>
        <br>
        <input type="number"  class="form-control-plaintext" placeholder="lent_amount" name="lent_amount" >
        <br>
        <label class="visually-hidden">Loan start_date </label>
        <br>
        <input type="date"  class="form-control-plaintext" placeholder="loan_start_date" name="loan_start_date" >
        <br>
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
