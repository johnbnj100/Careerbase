<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | TailGrids</title>
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="/tailwind/assets/css/tailwind.css" />
  </head>
<div class="w-full px-4 lg:w-1/2 xl:w-5/12 mx-auto">
    <div
      class="relative rounded-lg bg-white p-8 shadow-lg dark:bg-dark-2 sm:p-12"
    >
      <form method="POST" action="/layouts/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <input
            type="text"
            name="title"
            value="{{$listing->title}}"
            placeholder="title"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('title')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <input
            type="email"
            name="email"
            value="{{$listing->email}}"
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
            name="company"
            value="{{$listing->company}}"
            placeholder="Company"
            class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          />
          @error('company')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
        </div>
          <div class="mb-6">
            <input
              type="text"
              name="location"
              value="{{$listing->location}}"
              placeholder="Location"
              class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
            />
            @error('location')
            <p class="text-red text-xl">{{$message}}</p>
            @enderror
          </div>

            <div class="mb-6">
                <input
                  type="text"
                  name="website"
                  value="{{$listing->website}}"
                  placeholder="Website/Application Url"
                  class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                />
                @error('website')
                <p class="text-red text-xl">{{$message}}</p>
                @enderror
            </div>

                <div class="mb-6">
                    <input
                      type="text"
                      name="tags"
                      value="{{$listing->tags}}"
                      placeholder="Tags(Comma Seperated)"
                      class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                    />
                    @error('tags')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                 </div>

                 <div class="mb-6">
                    <input
                      type="file"
                      name="logo"
                      value="{{$listing->logo}}"
                      placeholder="Choose File"
                      class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                    />
                    @error('logo')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                 </div>

            <div class="mb-6">
          <textarea
            rows="6"
            name="description"
            value="{{$listing->description}}"
            placeholder="Description"
            class="w-full resize-none rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
          ></textarea>
          @error('description')
          <p class="text-red text-xl">{{$message}}</p>
            @enderror
        </div>

        <div>
          <button
            type="submit"
            name="submit"
            class="w-full rounded border border-primary bg-primary p-3 text-white transition hover:bg-opacity-90"
          >
            Update
          </button>
        </div>
      </form>
      <x-flash />

