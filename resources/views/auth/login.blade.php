@extends('layouts.app')
@section('content')
<div class="container mx-auto p-12 ">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="w-full xl:w-3/4 lg:w-11/12 flex ">
            <div class="flex flex-col w-full md:w-1/2 p-4 bg-white sm:mx-0">
                <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                <div class="w-full mt-4">
                    <form class="form-horizontal w-3/4 mx-auto" method="POST" action="#">
                        <div class="flex flex-col mt-4">
                            <input id="email" type="text" class="flex-grow h-8 px-2 border rounded border-grey-400" name="email" value="" placeholder="Email">
                        </div>
                        <div class="flex flex-col mt-4">
                            <input id="password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required placeholder="Password">
                        </div>
                        <div class="flex items-center mt-4">
                            <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">Remember Me</label>
                        </div>
                        <div class="flex flex-col mt-8">
                            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                Login
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <a class="no-underline hover:underline text-blue-dark text-xs" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    <div class="text-center mt-4">
                        <a class="no-underline hover:underline text-blue-dark text-xs" href="{{ route('register') }}">
                            Create an Account!
                        </a>
                    </div>
                </div>
            </div>
            <!-- Col -->
            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://images.unsplash.com/photo-1584799580661-53b7c6b99430?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80')"></div>
            <!-- Col -->
        </div>
    </div>
</div>
@endsection