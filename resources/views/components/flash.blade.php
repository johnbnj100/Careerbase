@if (session()->has('message'))
  <div class="fixed top-0 right-5 text-white font-bold text-2xl px-10 py-3 bg-secondary rounded-full">
    <p>
        {{session('message')}}
    </p>
  </div>
@endif
