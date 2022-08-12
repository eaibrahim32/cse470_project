<!DOCTYPE html>

<html>
    <head>
        <title>Inventory Management System</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css"  href="{{asset('/')}}public/asset/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/asset/css/bootstrap.min.css"/>       

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >


    </head>

    <body>

        <div class="bg-dark" id="wrapper">
            <div class="bg-dark" id="menu">                          
                <ul>
                    <a href="{{url('/')}}"><li>DASHBOARD</li></a> 

                    <li><a href="#">Supplier</a>
                        <ul class="bg-dark">
                            <li> <a href="{{url('/add-supplier')}}" > Add </a></li>
                            <li><a href="{{url('/manage-supplier')}}" >Manage</a> </li>                                   
                        </ul>  
                    </li>
                    <li><a href="#">brand</a>
                        <ul class="bg-dark ">
                            <li > <a href="{{url('/add-brand')}}" > Add </a></li>
                            <li><a href="{{url('/manage-brand')}}" >Manage</a> </li>                               
                        </ul>  
                    </li>
                    <li>
                        <a href="#">category</a>                       
                        <ul class="bg-dark">
                            <li> <a href="{{url('/add-category')}}" > Add </a></li>
                            <li><a href="{{url('/manage-category')}}" >Manage</a> </li>                                 
                        </ul>                                 
                    </li>                  
                    <li><a href="#">product</a>
                        <ul class="bg-dark">
                            <li> <a href="{{url('/add-product')}}" > Add </a></li>
                            <li><a href="{{url('/manage-product')}}" >Manage</a> </li>                               
                        </ul>  
                    </li>
                    <li><a href="{{url('/purchase')}}">purchase</a> </li>

                    <li><a href="{{url('/stoke')}}">stock</a> </li>


                    <li><a href="{{url('/sale')}}">sale</a> </li>


                    <li><a href="{{url('/report')}}">report</a> </li>

                </ul>
            </div>
        </div>  
        <!---------------------------------------------------------------------------------->               


        <section class="section"> 

            @yield('dashboard')
            <div class="Space_" style="height: 100px; width:100%; "></div>  

            @yield('content')

        </section>










        <!---------------------------------------------------------------------------------------->
        <section class="footer bg-dark text-warning text-center">
            <p class="footer_p">esab's Property</p>
        </section>


        <script src="{{asset('/')}}public/asset/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
    </body>

</html>