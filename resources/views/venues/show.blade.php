<x-layout>
  <div class="relative text-white">
    <img class="aspect-[3/1] object-cover w-full"
      src="{{$venue->image ? asset($venue->image) : asset('/images/no-image.png') }}" alt="{{$venue->name}}"
      alt="{{$venue->name}}">
    <div class="absolute inset-0 bg-gradient-to-b from-[rgba(146,76,148,0.5)] to-[rgba(14,91,182,0.5)]">
      <div
        class="container absolute bottom-8 before:content-['|'] before:absolute before:container before:-left-8 before:opacity-50 before:text-3xl">
        <h2 class="text-4xl mb-2 drop-shadow-lg">{{$venue->name}}</h2>
        <p class="drop-shadow-lg">{{$venue->category}}, {{$venue->address}}</p>
      </div>
    </div>
  </div>

  <div class="container py-6">
    <section class="py-6">
      <h3 class="text-2xl pb-3">Venue info</h3>
      <p class="font-light text-slate-600">{{$venue->description}}</p>

      <h4 class="text-xl pt-4 pb-2">Website</h4>
      <a class="font-light text-slate-600 hover:text-dodger-blue transition-colors" href="{{$venue->website}}"
        target="_blank" rel="noreferrer">{{$venue->website}}</a>
    </section>

    <section class="py-6">
      <h3 class="text-2xl pb-3">Upcoming events</h3>

      <div class="grid grid-cols-3 gap-x-8 gap-y-10">

        @foreach($venue->events as $event)
        <x-event-card :event="$event" />
        @endforeach

      </div>
    </section>
  </div>
</x-layout>