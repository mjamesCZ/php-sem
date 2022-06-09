<x-layout>
  <div class="relative text-white">
    <img class="aspect-[3/1] object-cover w-full"
      src="{{$artist->image ? asset($artist->image) : asset('/images/no-image.png') }}" alt="{{$artist->name}}"
      alt="{{$artist->name}}">
    <div class="absolute inset-0 bg-gradient-to-b from-[rgba(146,76,148,0.5)] to-[rgba(14,91,182,0.5)]">
      <div
        class="container absolute bottom-8 before:content-['|'] before:absolute before:container before:-left-8 before:opacity-50 before:text-3xl">
        <h2 class="text-4xl mb-2 drop-shadow-lg">{{$artist->name}}</h2>
        <p class="drop-shadow-lg">{{$artist->tags}}, {{$artist->country}}</p>
      </div>
    </div>
  </div>

  <div class="container py-6">
    <section class="py-6">
      <h3 class="text-2xl pb-3">Artist info</h3>
      <p class="font-light text-slate-600">{{$artist->description}}</p>

      <h4 class="text-xl pt-4 pb-2">Website</h4>
      <a class="font-light text-slate-600 hover:text-dodger-blue transition-colors" href="{{$artist->website}}"
        target="_blank" rel="noreferrer">{{$artist->website}}</a>
    </section>

    <section class="py-6">
      <h3 class="text-2xl pb-3">Upcoming events</h3>

      <div class="grid grid-cols-3 gap-x-8 gap-y-10">

        @foreach($artist->events as $event)
        <x-event-card :event="$event" />
        @endforeach

      </div>
    </section>
  </div>
</x-layout>