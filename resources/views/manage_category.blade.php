@extends('welcome')
@section('content')

<div class="Space_" style="height: 100px; width:100%; "></div>   

<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody >
        @foreach($category as $v_category)
       <tr class="oneline" >
            <th scope="row" >{{$v_category->category_id}}</th>
            <td>{{$v_category->category_name}}</td>         
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                    <form method="post" action="{{url('/edit-category')}}">    
                        @csrf  
                        <input type="hidden" name="category_id" value="{{$v_category->category_id}}">
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </form>

                    <form method="post" action="{{url('/delete-category')}}">
                        @csrf      
                        <input type="hidden" name="category_id" value="{{$v_category->category_id}}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

