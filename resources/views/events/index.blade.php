<x-layout>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($events) == 0)

    @foreach($events as $event)
    TEST
    @endforeach

    @else
    <p>No listings found</p>
    @endunless

  </div>

  <div class="mt-6 p-4">
    {{$events->links()}}
  </div>
</x-layout>