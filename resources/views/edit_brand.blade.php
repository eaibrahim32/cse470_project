
@extends('welcome')
@section('content')

<div class="Space_" style="height: 100px; width:100%; "></div>  



<form bg-dark style="margin-left: 500px; margin-bottom:8px;" action="{{url('/update-brand/'.$brand[0]->brand_id)}}" role="form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group col-md-6">
        <label for="inputAddress">Brand Name</label>
        <input type="text" name="brand_name" value="{{$brand[0]->brand_name}}" class="form-control"  id="" placeholder="Write Brand Name" required="">
    </div>

    <div class="form-group col-md-6">
        <label for="inputAddress2">Brand Country</label>
        <input type="text" name="product_country" value="{{$brand[0]->product_country}}" class="form-control" id="" placeholder="Write Brand Country" required="">
    </div>    

    <button type="submit" class="btn btn-primary" style="margin-left: 607px; margin-bottom:8px;">SUBMIT</button>

</form>

@endsection