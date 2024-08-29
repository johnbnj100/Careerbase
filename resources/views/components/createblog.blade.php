<x-head/>
<div class="w-full px-4 lg:w-1/2 xl:w-5/12 mx-auto pt-20 pb-10">
    <div
      class="relative rounded-lg p-8 shadow-lg dark:bg-dark-2 sm:p-12"
    >
    
      <form method="POST" action="/storeblog" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center text-xl mx-auto container pb-10 font-bold" style="color:#005555; font-family:cursive;">CREATE BLOG</h1>
        <div class="mb-6">
          <input
            type="text"
            name="topic"
            value="{{old('topic')}}"
            placeholder="Topic"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('topic')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="category"
            value="{{old('category')}}"
            placeholder="Category"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('category')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>


         <div class="mb-6">
            <input
            type="file"
            name="image"
            value="{{old('image')}}"
            placeholder="Choose File"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            />

             @error('image')
            <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

       
        <div class="mb-6">
          <textarea
            rows="6"
            name="illustration"
            value="{{old('illustration')}}"
            placeholder="Illustration"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            ></textarea>
          @error('illustration')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
            <textarea
              rows="6"
              name="illustration2"
              value="{{old('illustration2')}}"
              placeholder="Illustration2"
              class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
              ></textarea>
            @error('illustration2')
                <p class="text-red text-xl">{{$message}}</p>
            @enderror
          </div>

        <div>
          <button
            type="submit"
            name="submit"
            class="w-full rounded border border-primary p-3 text-white transition hover:bg-opacity-90"
            style="background-color:#005555;"
            >
            Submit
          </button>

        </div>
      </form>
    </div>
</div>



<x-footer/>
