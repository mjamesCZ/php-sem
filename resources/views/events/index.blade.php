<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Events</h2>

    <div class="grid grid-cols-3 gap-x-8 gap-y-10">

      @unless(count($events) == 0)

      @foreach($events as $event)
      <x-event-card :event="$event" />
      @endforeach

      @else
      <p>No listings found</p>
      @endunless

    </div>

    <div class="mt-6 mb-4 p-4">
      {{$events->links()}}
    </div>
  </div>
</x-layout>