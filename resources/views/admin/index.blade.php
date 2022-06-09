<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-12 pl-5">Admin panel</h2>

    <section class="mb-12">
      <h3 class="text-2xl pb-6 pl-5">Events</h3>

      @unless(count($events) == 0)

      @foreach($events as $event)
      <x-admin-row listing="events" :entity="$event" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless
    </section>

    <section class="mb-12">
      <h3 class="text-2xl pb-6 pl-5">Venues</h3>

      @unless(count($venues) == 0)

      @foreach($venues as $venue)
      <x-admin-row listing="venues" :entity="$venue" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless
    </section>

    <section class="mb-12">
      <h3 class="text-2xl pb-6 pl-5">Artists</h3>

      @unless(count($artists) == 0)

      @foreach($artists as $artist)
      <x-admin-row listing="artists" :entity="$artist" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless
    </section>
  </div>
</x-layout>