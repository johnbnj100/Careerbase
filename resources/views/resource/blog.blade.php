<x-head />
<x-search />
    <!-- ====== Blog Section Start -->
    <section class="bg-white dark:bg-dark lg:pb-10 pt-20" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">

              <h2
                class=" text-3xl font-bold dark:text-white sm:text-3xl"
              style="color:#005555;">
                Job Market News
              </h2>
            
            </div>
          </div>
        </div>

            
        <div class="-mx-4 flex flex-wrap">
          @foreach ( $blog as $blogs)
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 w-full">
              <div class="mb-8 overflow-hidden rounded">
                
                <img
                  src="{{asset('storage/'.$blogs->image)}}"
                  alt="image"
                  class="w-full  h-[300px] rounded-md"
                  style="width: 400px; height: 280px;"
                />
              </div>        
              <div>
                <div class="border p-4 rounded-lg shadow-2">
                <span
                  class="mb-3 inline-block rounded px-4 py-1 text-xs font-semibold leading-loose text-white"
                style="background-color:#005555; display:flex; justify-content:center; align-item:center;">
                  Date Published: {{ $blogs->created_at->format('d-M-Y') }}
                </span>
                <h3 class="">
                  <a
                    href="/illustration/{{$blogs['id']}}"
                    class="mb-2 inline-block text-xl px-2 font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                    >
                    {{ $blogs->topic }}
                  </a>
                </h3>
                <p class="text-base text-body-color dark:text-dark-6 p-2">
                  {{ $blogs->illustration }}
                </p>
              </div>
              </div>
            
              @endforeach
            </div>
          </div>
        
      </div>
     
    </section>
    <!-- ====== Blog Section End -->
  <x-footer />
