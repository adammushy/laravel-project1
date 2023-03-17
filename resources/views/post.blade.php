@extends('layout')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
 

    <h3 class="text-2xl font-bold text-center">Upload Post</h3>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
         

			@csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Title<label>
                            <input type="text" placeholder="title" name="title"
                    
							class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
							@error('title')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
						</div>
                  
                <div class="mt-4">
                    <label class="block ">Image<label>
                        <img id="picha" src="landscape.jpg" alt="hellow" class="h-20 w-40">
                            <input type="file" placeholder="image" name="image" id="ipt" onchange="showPreview()"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 custom-image">
								@error('image')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
                </div>
                        
                <div class="mt-4">
                    <label class="block" for="email">Caption<label>
                            <input type="text" placeholder="caption" name="caption"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
								@error('caption')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
                </div>
               
                <!-- <span class="text-xs text-red-400">Password must be same!</span> -->
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Upload</button>
                </div>
                
            </div>
        </form>

        <script>
            function showPreview(){
                var myInput=document.getElementById("ipt")
                document.getElementById("picha").src=window.URL.createObjectURL(myInput.files[0]);
            }

        </script>

@endsection 