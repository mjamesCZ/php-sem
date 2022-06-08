<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Artists</h2>

    <div class="grid grid-cols-2 gap-x-8 gap-y-10">

      @unless(count($artists) == 0)

      @foreach($artists as $artist)
      <x-artist-card :artist="$artist" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless

    </div>

    <div class="mt-6 p-4">
      {{$artists->links()}}
    </div>
  </div>
</x-layout>