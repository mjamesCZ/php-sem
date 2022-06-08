@php
$categories = ['Cinemas', 'Clubs', 'Theatres', 'Galleries', 'Museums', 'Arenas', 'Conference centres', 'Sports venues',
'Outdoors']
@endphp

<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Venues</h2>

    <div class="pb-4 mb-8 overflow-x-auto">
      <ul class="flex gap-3">
        <li>
          <a class="px-5 py-2 block border-2 border-gray-50 rounded-full hover:text-dodger-blue {{ !request()->category ? 'text-dodger-blue' : ''}}"
            href="/venues">All</a>
        </li>

        @foreach($categories as $category)
        <li class="shrink-0">
          <a class="px-5 py-2 block bg-gray-50 rounded-full hover:text-dodger-blue transition-colors {{ request()->category == $category ? 'bg-slate-900 text-white hover:text-white' : ''}}"
            href="/venues/?category={{$category}}">{{$category}}</a>
        </li>
        @endforeach

      </ul>
    </div>

    <div class="grid grid-cols-2 gap-x-8 gap-y-10">

      @unless(count($venues) == 0)

      @foreach($venues as $venue)
      <x-venue-card :venue="$venue" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless

    </div>

    <div class="mt-6 mb-4 p-4">
      {{$venues->links()}}
    </div>
  </div>
</x-layout>