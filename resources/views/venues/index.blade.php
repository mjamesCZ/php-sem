<x-layout>
  <div class="container">
    <h2 class="text-4xl pt-14 pb-8">Venues</h2>

    <div class="grid grid-cols-2 gap-x-8 gap-y-10">

      @unless(count($venues) == 0)

      @foreach($venues as $venue)
      <div class="flex border-2 border-slate-50 rounded-2xl shadow-card">
        <a class="w-1/3" href="/venues/{{$venue->id}}">
          <img class="h-full object-cover rounded-l-2xl border-r-2 border-slate-50" src="{{$venue->image}}"
            alt="{{$venue->name}}">
        </a>

        <div class="w-2/3 p-6">
          <h3 class="text-xl mb-2 truncate">
            <a class="hover:text-dodger-blue transition-colors" href="/venues/{{$venue->id}}">{{$venue->name}}</a>
          </h3>
          <p class="text-slate-600 font-light">{{$venue->category}}</p>
          <p class="text-slate-600 font-light truncate">{{$venue->address}}</p>
          <p class="text-sm text-slate-400 font-light mt-3">{{$venue->events->count()}} upcoming
            event{{$venue->events->count() !== 1 ? 's' : ''}}</p>
        </div>
      </div>
      @endforeach

      @else
      <p>No listings found</p>
      @endunless

    </div>

    <div class="mt-6 p-4">
      {{$venues->links()}}
    </div>
  </div>
</x-layout>