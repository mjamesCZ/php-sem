<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-12 pb-8">Events</h2>

    <div class="grid grid-cols-3 gap-4">

      @unless(count($events) == 0)

      @foreach($events as $event)
      {{$event->name}}
      @endforeach

      @else
      <p>No listings found</p>
      @endunless

    </div>

    <div class="mt-6 p-4">
      {{$events->links()}}
    </div>
  </div>
</x-layout>