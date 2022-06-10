<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Purchased tickets</h2>

    @unless(count($tickets) == 0)

    @foreach($tickets as $ticket)
    <div class="flex shadow-card px-5 py-2 rounded-2xl gap-8 items-center mb-3">
      <img class="w-24 aspect-[3/2] rounded-xl border-b-2 border-slate-50"
        src="{{$ticket->deal->event->image ? asset($ticket->deal->event->image) : asset('/images/no-image.png') }}"
        alt="">

      <div class="mr-auto">
        <a class="hover:text-dodger-blue transition-colors" href="/events/{{$ticket->deal->event->id}}">
          <h4 class=" text-xl">{{$ticket->deal->event->name}}</h4>
        </a>
        <p class="text-sm text-slate-400 font-light">{{$ticket->deal->event->time}}</p>
      </div>

      <div class="mr-12 w-40">
        <p class="text-lg">Quantity: <span class="text-dodger-blue">{{$ticket->quantity}}</span></p>
        <p>Total: {{$ticket->deal->price * $ticket->quantity}} Kč</p>
      </div>
    </div>
    @endforeach

    @else
    <p>No purchased tickets found</p>
    @endunless
  </div>
</x-layout>