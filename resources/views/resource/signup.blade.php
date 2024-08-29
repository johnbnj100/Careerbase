<x-head />
<div class="w-full px-4 lg:w-1/2 xl:w-5/12 mx-auto pt-20 pb-10">
    <div
      class="relative rounded-lg p-8 shadow-lg dark:bg-dark-2 sm:p-12"
    >
    
      <form method="POST" action="/usersignup" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center text-xl mx-auto container pb-10 font-bold" style="color:#005555; font-family:cursive;">CREATE AN ACCOUNT</h1>
        <div class="mb-6">
            <input
              type="text"
              name="name"
              value="{{old('name')}}"
              placeholder="Name"
              class="w-full rounded border bg-gray border-stroke px-[14px] py-3 text-base outline-none focus:border-primary dark:border-dark-3 dark:bg-primary dark:text-dark-6"
            />
            @error('name')
            <p class="text-red text-xl">{{$message}}</p>
              @enderror
          </div>

        <div class="mb-6">
          <input
            type="text"
            name="email"
            value="{{old('email')}}"
            placeholder="Email"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('email')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="password"
            value="{{old('password')}}"
            placeholder="Password"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('password')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="password_confirmation"
            value="{{old('password_confirmation')}}"
            placeholder="Confirm Password"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('password_confirmation')
          <p class="text-red text-xl">{{$message}}</p>
      @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="number"
            value="{{old('number')}}"
            placeholder="Mobile Number"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('number')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>
        

          <div class="mb-6">
            <input
              type="text"
              name="location"
              value="{{old('location')}}"
              placeholder="Location"
              class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            />
            @error('location')
            <p class="text-red text-xl">{{$message}}</p>
            @enderror
          </div>
           
            <div>
                <button
            type="submit"
            class="w-full rounded border border-primary p-3 text-white transition hover:bg-opacity-90"
              style="background-color: #005555;"  
            >
            Get Started
          </button>
        </div>
        <p class="text-center py-4"> Already have an account?<a href="/login" class=""> Sign In </a></p>
      </form>
    </div>
</div>

<x-footer/>



