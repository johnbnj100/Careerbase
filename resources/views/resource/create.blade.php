<x-head />
<div class="w-full px-4 lg:w-1/2 xl:w-5/12 mx-auto pt-20 pb-10">
    <div
      class="relative rounded-lg p-8 shadow-lg dark:bg-dark-2 sm:p-10"
    >
    
      <form method="POST" action="/layouts" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center text-xl mx-auto container pb-10 font-bold" style="color:white; font-family:cursive; color:#005555;">POST A JOB</h1>
        <div class="mb-6">
          <input
            type="text"
            name="title"
            value="{{old('title')}}"
            placeholder="Title"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('title')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="category"
            value="{{old('category')}}"
            placeholder="Category"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('category')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="email"
            name="email"
            value="{{old('email')}}"
            placeholder="Email"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('email')
          <p class="text-red text-xl">{{$message}}</p>
      @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="company"
            value="{{old('company')}}"
            placeholder="Company"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('company')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <input
            type="text"
            name="time"
            value="{{old('time')}}"
            placeholder="Full-Time/Remote/Part-Time"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('time')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        

          <div class="mb-6">
            <input
              type="text"
              name="location"
              value="{{old('location')}}"
              placeholder="Location"
              class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            />
            @error('location')
            <p class="text-red text-xl">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-6">
            <input
              type="text"
              name="salary"
              value="{{old('salary')}}"
              placeholder="Salary"
              class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            />
            @error('salary')
            <p class="text-red text-xl">{{$message}}</p>
            @enderror
          </div>

            <div class="mb-6">
                <input
                  type="text"
                  name="website"
                  value="{{old('website')}}"
                  placeholder="Website/Application Url"
                  class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                />
                @error('website')
                <p class="text-red text-xl">{{$message}}</p>
                @enderror
            </div>

                <div class="mb-6">
                    <input
                      type="text"
                      name="tags"
                      value="{{old('tags')}}"
                      placeholder="Tags(Comma Seperated)"
                      class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                    />
                    @error('tags')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                 </div>

                 <div class="mb-6">
                    <input
                      type="file"
                      name="logo"
                      value="{{old('logo')}}"
                      placeholder="Choose File"
                      class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                    />

                    @error('logo')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                 </div>

          <div class="mb-6">
          <textarea
            rows="6"
            name="description"
            value="{{old('description')}}"
            placeholder="Description"
            class="w-full resize-none rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          ></textarea>
          @error('description')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <textarea
            rows="6"
            name="company-detail"
            value="{{old('company-detail')}}"
            placeholder="Company-Detail"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            ></textarea>
          @error('company-detail')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <textarea
            rows="6"
            name="requirement"
            value="{{old('requirement')}}"
            placeholder="Responsibllity"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            ></textarea>
          @error('requirement')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <textarea
            rows="6"
            name="qualification"
            value="{{old('qualification')}}"
            placeholder="qualification"
            class="w-full rounded border border-white px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            ></textarea>
          @error('qualification')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>

        <div>
          <button
            type="submit"
            name="submit"
            class="w-full text-xl rounded border border-primary p-3 text-white transition hover:bg-opacity-90"
            style="background-color: #005555;"
            >
            Create Job
          </button>

        </div>
      </form>
    </div>
</div>

      <x-footer/>



