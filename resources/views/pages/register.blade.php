<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


<section class="h-screen bg-[#DDDDEC] flex items-center justify-center">
  <div class="container h-[80vh] px-6 py-24 bg-white my-10">
    <div
      class="g-6 flex h-auto flex-wrap items-center justify-center lg:justify-between">
      <!-- Left column container with background-->
      <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12 ">
        <img
          src="../images/loginImg.svg"
          class="w-full"
          alt="Phone image" />
      </div>


      <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
        <form action="{{ route('register') }}" method="post">

        @if(session('status'))
        <div class="alert alert-danger">
            {{session('status')}}
        </div>  
        @endif

          @csrf
          @error('name')
                           {{$message}}
                                                @enderror
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded border border-[#015AAB] border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  "
              id="exampleFormControlInput3"
              name="name"
              placeholder="Your Names" />
        
          </div>
          @error('email')
                                                    {{$message}}
                                                @enderror
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded border border-[#015AAB] border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 "
              id="exampleFormControlInput3"
              name="email"
              placeholder="Email address" />
        
          </div>


          @error('password')
                                                    {{$message}}
                                                @enderror
          <!-- Password input -->
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="password"
              name="password"
              class="peer block min-h-[auto] border border-[#015AAB] border-1 w-full rounded  bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
              id="exampleFormControlInput33"
              placeholder="Password" />
     
          </div>

          @error('cpassword')
                                                    {{$message}}
                                                @enderror
          <!-- Password input -->
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="password"
              name="cpassword"
              class="peer block min-h-[auto] border border-[#015AAB] border-1 w-full rounded  bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  "
              id="exampleFormControlInput33"
              placeholder="Password" />
       
          </div>

          <!-- Remember me checkbox -->
          <div class="mb-6 flex items-center justify-between">


            <!-- Forgot password link -->
            <a
              href="#!"
              class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
              >Forgot password?</a
            >
          </div>

          <!-- Submit button -->
          <input 
            type="submit"
            class="inline-block w-full rounded bg-[#015AAB] px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
            data-te-ripple-init
            data-te-ripple-color="light"
           value="SignUp"
         />

          <!-- Divider -->
          <div
            class="my-4 flex items-center before:mt-0.5 ">
            <p
              class="mx-4 mb-0 text-center font-semibold ">
              New to site?
            </p>
        
            <a class="text-[#015AAB]" href="/login">
            Login
            </a>

            <a class="text-[#015AAB] mx-10" href="/">
            Back Home
            </a>
          </div>

     
        </form>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>