
@extends('welcome')
@section('content')

<div class="Space_" style="height: 100px; width:100%; "></div> 


<form bg-dark style="margin-left: 500px; margin-bottom:8px;" action="{{url('/save-brand')}}" role="form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group col-md-6">
        <label for="inputAddress">Brand Name</label>
        <input type="text" name="brand_name"class="form-control" id="" placeholder=" Write Brand Name" required="">
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress2">Brand Country</label>
        <input type="text"  name="brand_country" class="form-control" id="" placeholder="Write Brand Country" required="">
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 607px; margin-bottom:8px;">SUBMIT</button>
</form>

@endsection





