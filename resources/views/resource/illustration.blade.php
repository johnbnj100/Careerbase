<x-head/>
<div class="mb-8 overflow-hidden rounded">              
    <img
      src="{{asset('storage/'.$blogid->image)}}"
      alt="image"
      class="w-75 rounded-md mx-auto mt-10" id="img" style=""
    />
  </div> 
  <span class="mb-3 flex justify-center items-center rounded px-4 py-1 text-xs font-semibold leading-loose text-dark"
    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
    Date Published: {{ $blogid->created_at->format('d-M-Y') }}
    </span>

  <div class="text-center">
  <h3 class="mb-2 inline-block text-xl px-2 font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
  style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> 
      {{ $blogid->topic }}
  </h3>

  <p class="text-xl text-body-color block text-center dark:text-dark-6 w-75 py-3 mx-auto" style="line-height:30px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    {{ $blogid->illustration2 }}
  </p>
  </div>

<x-footer />