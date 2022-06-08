<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Venues</h2>

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