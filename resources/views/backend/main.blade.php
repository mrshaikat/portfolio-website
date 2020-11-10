@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
        </ol>

    <form action="{{ route('backend.main.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        

            <div class="row jumbotron mb-3 pb-0">

                <div class="form-group col-md-3 mt-3">

                    <h3>Navigation Logo</h3>
                            <img class=" img-thumbnail" style=" height: 20vh;" src="{{url($main->nav_logo)}}" alt="">

                            <input class="mt-3" type="file" id="nav_logo" name="nav_logo">
                   
                            
                </div>
                

                        <div class="form-group col-md-4 mt-3">
                            <h3>Background Image</h3>
                                <img class=" img-thumbnail" style=" height: 30vh;" src="{{url($main->bg_img)}}" alt="">
                            <input class="mt-3" type="file" id="bg_img" name="bg_img">
                        </div>


                        <div class="form-group col-md-4 mt-4">
                            <div class="mb-3">
                                <label for="title"><h4>Title</h4></label>
                            <input type="text" class=" form-control" id="title" name="title" value="{{$main->title}}">
                            </div>

                            <div class="mb-3">
                                <label for="sub_title"><h4>Sub Title</h4></label>
                                <input type="text" class=" form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                            </div>
 
                            <div class="mt-4">
                                <label for="sub_title"><h4>Upload Resume</h4></label>
                                <input type="file" id="sub_title" name="resume">
                            </div>




                            </div>

                            
                            
                          
                        
                            
                        </div>
                       
                           <div class="text-center mb-4">
                            <input class="btn btn-lg btn-info pl-5 pr-5" type="submit" value="Submit">
                           </div>
                        </form>      

        </div>     
    
</main>
@endsection