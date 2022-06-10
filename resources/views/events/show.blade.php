<x-layout>
  <div class="relative text-white">
    <img class="aspect-[3/1] object-cover w-full"
      src="{{$event->image ? asset($event->image) : asset('/images/no-image.png') }}" alt="{{$event->name}}"
      alt="{{$event->name}}">
    <div class="absolute inset-0 bg-gradient-to-b from-[rgba(146,76,148,0.5)] to-[rgba(14,91,182,0.5)]">
      <div
        class="container absolute bottom-8 before:content-['event'] before:text-xs before:uppercase before:bg-wisteria/75 before:text-white/90 before:px-3 before:py-1 before:mb-5 before:inline-flex before:rounded-full">
        <h2 class="text-4xl mb-2 drop-shadow-lg">{{$event->name}}</h2>
        <p class="drop-shadow-lg">{{ \Carbon\Carbon::parse($event->time)->format('l, d/m/y h:m')}},
          {{$event->venue->name}}</p>
      </div>
    </div>
  </div>

  <div class="container py-6">
    <section class="py-6">
      <h3 class="text-2xl pb-3">Event info</h3>
      <p class="font-light text-slate-600">{{$event->description}}</p>
    </section>

    @unless($event->artists->count() == 0)
    <section class="py-6">
      <h3 class="text-2xl pb-3">Performing artists</h3>

      <div class="grid grid-cols-2 gap-x-8 gap-y-10">

        @foreach($event->artists as $artist)
        <x-artist-card :artist="$artist" />
        @endforeach

      </div>
    </section>
    @endunless

    <section class="py-6">
      <h3 class="text-2xl pb-3">Venue</h3>

      <div class="grid grid-cols-2 gap-x-8 gap-y-10">
        <x-venue-card :venue="$event->venue" />
      </div>
    </section>

    <section class="py-6 pb-3" id="tickets">
      <h3 class="text-2xl">Tickets</h3>

      @if (auth()->user()->admin)

      <div class="shadow-outline rounded-xl p-6">
        <h3 class="mb-3 text-lg">Add a new deal</h3>

        <form class="flex gap-3" method="POST" action="/events/{{$event->id}}/deal" enctype="multipart/form-data">
          @csrf

          {{-- Name --}}
          <div class="w-1/2">
            <label for="name" class="text mb-1 text-slate-600">Name</label>
            <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 font-light w-full" name="name"
              value="{{old('name')}}" placeholder="Basic entry" />

            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          {{-- Stock --}}
          <div class="w-1/4">
            <label for="stock" class="text mb-1 text-slate-600">Stock</label>
            <input type="number" min="1" class="border border-slate-200 rounded-lg px-4 py-2 font-light" name="stock"
              value="{{old('stock')}}" placeholder="200" />

            @error('stock')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          {{-- Price --}}
          <div class="w-1/4">
            <label for="price" class="text mb-1 text-slate-600">Price</label>
            <input type="number" min="0" step="0.01" class="border border-slate-200 rounded-lg px-4 py-2 font-light"
              name="price" value="{{old('price')}}" placeholder="399" />

            @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          <div class="my-6 text-center">
            <button type="submit"
              class="bg-dodger-blue hover:bg-dodger-blue-400 text-white rounded-full py-2 px-8 transition-colors">
              Add
            </button>
          </div>
        </form>
      </div>

      @endif

    </section>
  </div>
</x-layout>