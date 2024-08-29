<x-head/>
    <!-- ====== Contact Section Start -->
    
    <section
      class="flex justify-center items-center dark:bg-dark-2 shadow-lg mx-auto relative z-10 overflow-hidden py-20 lg:py-[120px]">        
      <div
      class="relative rounded-lg p-8 shadow-lg dark:bg-dark-2 sm:p-12"
    >
    <form method="POST" action="/users/authenticate">
                @csrf
                <div class="mb-6">
                    <h1 class="text-center p-10 text-2xl" style="color:#005555;"> LOGIN TO YOUR ACCOUNT </h1>
                </div>
                <div class="mb-6">
                  <input
                    type="email"
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
                    type="password"
                    name="password"
                    value="{{old('password')}}"
                    placeholder="Password"
                    class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                  />
                  @error('password')
                  <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                </div>

                <div>
                  <button
                    type="submit"
                    style="background-color:#005555;"
                    class="w-full rounded border border-primary p-3 text-white transition hover:bg-opacity-90"
                  >
                    LOGIN
                  </button>
                </div>
                <p class="text-center py-4"> Don't have an account?<a href="/signup" class=""> Sign Up </a></p>
            </form>
         </div>
    </section>
    <!-- ====== Contact Section End -->
    <x-footer/>
