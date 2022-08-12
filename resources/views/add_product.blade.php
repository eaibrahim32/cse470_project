
@extends('welcome')
@section('content')
<div class="Space_" style="height: 100px; width:100%; "></div>  


<form style="margin-left: 500px; margin-bottom:8px;" action="{{url('/save-product')}}" role="form" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group col-md-6">
        <label for="Procut Name">Product Name</label>
        <input type="text" name="product_name" class="form-control" id="" required="">
    </div>
    <div class="form-group col-md-6">
        <label for="Product DEscription">Product DEscription</label>
        <input type="text" name="product_description" class="form-control" id="" required="">
    </div>

    <div class="form-group col-md-6">
        <label for="inputState">Category Name</label>
        <select id="inputState" name="category_name" class="form-control">
            <option value="None">Choose</option>
            @foreach($select_category as $v_category)           
            <option value="{{$v_category->category_name}}">{{$v_category->category_name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary"   style="margin-left: 607px; margin-bottom:8px;">Submit</button>
</form>

@endsection

