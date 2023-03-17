<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
    
</head>

<!-- component -->
<body>


<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Join us</h3>
        <form method="post" action="{{route('user.store')}}">
			
			@csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Name<label>
                            <input type="text" placeholder="Name" name="name"
                    
							class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
							@error('name')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
						</div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
								@error('email')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
								@error('password')
							<div class="text-xs text-red-400">
								{{$message}}
							</div>
							@enderror
                </div>
                <div class="mt-4">
                    <label class="block">Confirm Password<label>
                            <input type="password" placeholder="Password" name="password_confirmation"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <!-- <span class="text-xs text-red-400">Password must be same!</span> -->
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                        Account</button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Already have an account?
                    <a class="text-blue-600 hover:underline" href="http://127.0.0.1:8000/login">
                        Log in
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
	
</body>
</html>