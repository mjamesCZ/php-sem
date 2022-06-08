@props(['event'])

<div class="flex flex-col border-2 border-slate-50 rounded-2xl shadow-card">
  <a class="hover:opacity-90 transition-opacity" href="/events/{{$event->id}}">
    <img class="object-cover aspect-[3/2] rounded-t-2xl border-b-2 border-slate-50" src="{{$event->image}}"
      alt="{{$event->name}}">
  </a>

  <div class="p-6">
    <h3 class="text-xl mb-2 truncate">
      <a class="hover:text-dodger-blue transition-colors" href="/events/{{$event->id}}">{{$event->name}}</a>
    </h3>
    <p class="text-slate-600 font-light">
      {{$event->category}}, {{ \Carbon\Carbon::parse($event->time)->format('l, d/m/y')}}
    </p>
    <p class="text-slate-600 font-light truncate">
      <a href="/venues/{{$event->venue->id}}">{{$event->venue->name}}</a>
    </p>
    <p class="text-sm text-slate-400 font-light mt-3">125 are going</p>
  </div>
</div>