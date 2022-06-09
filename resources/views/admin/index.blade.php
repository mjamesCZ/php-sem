<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-12 pl-5">Admin panel</h2>

    <section class="mb-12">
      <div class="flex justify-between items-center pb-6 px-5">
        <h3 class="text-2xl">Events</h3>

        <a class="px-6 py-1.5 bg-dodger-blue text-white hover:bg-dodger-blue-400 rounded-full transition-colors"
          href="/events/create">Create new event</a>
      </div>

      @unless(count($events) == 0)

      @foreach($events as $event)
      <x-admin-row listing="events" :entity="$event" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless
    </section>

    <section class="mb-12">
      <div class="flex justify-between items-center pb-6 px-5">
        <h3 class="text-2xl">Venues</h3>

        <a class="px-6 py-1.5 bg-dodger-blue text-white hover:bg-dodger-blue-400 rounded-full transition-colors"
          href="/venues/create">Create new venue</a>
      </div>


      @unless(count($venues) == 0)

      @foreach($venues as $venue)
      <x-admin-row listing="venues" :entity="$venue" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless
    </section>

    <section class="mb-12">
      <div class="flex justify-between items-center pb-6 px-5">
        <h3 class="text-2xl">Artists</h3>

        <a class="px-6 py-1.5 bg-dodger-blue text-white hover:bg-dodger-blue-400 rounded-full transition-colors"
          href="/artists/create">Create new artist</a>
      </div>

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