@extends('welcome')
@section('content')


<div class="Space_" style="height: 100px; width:100%; "></div>   

<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Brand country</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody >
        @foreach($brand as $v_brand)
        <tr class="oneline" >
            <th scope="row" >{{$v_brand->brand_id}}</th>
            <td>{{$v_brand->brand_name}}</td>
            <td>{{$v_brand->product_country}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                    <form method="post" action="{{url('/edit-brand')}}">    
                        @csrf  
                        <input type="hidden" name="brand_id" value="{{$v_brand->brand_id}}">
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </form>

                    <form method="post" action="{{url('/delete-brand')}}">
                        @csrf      
                        <input type="hidden" name="brand_id" value="{{$v_brand->brand_id}}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

