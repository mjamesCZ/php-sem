<x-layout>
  <div class="relative text-white shadow-lg">
    <img class="aspect-[3/1] object-cover" src="{{$event->image}}" alt="{{$event->name}}">
    <div class="absolute inset-0 bg-gradient-to-b from-[rgba(146,76,148,0.5)] to-[rgba(14,91,182,0.5)]">
      <div class="container absolute bottom-8">
        <h2 class="text-4xl mb-2">{{$event->name}}</h2>
        <p>{{ \Carbon\Carbon::parse($event->time)->format('l, d/m/y h:m')}}, {{$event->venue->name}}</p>
      </div>
    </div>
  </div>

  <div class="container py-6">
    <section class="py-6">
      <h3 class="text-2xl pb-3">Event description</h3>
      <p class="font-light text-slate-600">{{$event->description}}</p>
    </section>

    <section class="py-6">
      <h3 class="text-2xl pb-3">Performing artists</h3>

      <div class="grid grid-cols-2 gap-x-8 gap-y-10">

        @foreach($event->artists as $artist)
        <x-artist-card :artist="$artist" />
        @endforeach

      </div>
    </section>

    <section class="py-6 pb-3">
      <h3 class="text-2xl">Tickets</h3>
      <p>tixx</p>
    </section>
  </div>
</x-layout>