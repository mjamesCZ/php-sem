@props(['event'])

<div class="flex flex-col border-2 border-slate-50 rounded-2xl shadow-card">
  <a class="hover:opacity-90 transition-opacity" href="/events/{{$event->id}}">
    <img class="object-cover aspect-[3/2] rounded-t-2xl border-b-2 border-slate-50"
      src="{{$event->image ? asset($event->image) : asset('/images/no-image.png') }}" alt="{{$event->name}}">
  </a>

  <div class="p-6">
    <h3 class="text-xl mb-2 truncate">
      <a class="hover:text-dodger-blue transition-colors" href="/events/{{$event->id}}">{{$event->name}}</a>
    </h3>
    <p class="text-slate-600 font-light">
      {{$event->category}}, {{ \Carbon\Carbon::parse($event->time)->format('l, d/m/y')}}
    </p>
    <p class="text-slate-600 font-light truncate">
      <a class="hover:text-dodger-blue transition-colors"
        href="/venues/{{$event->venue->id}}">{{$event->venue->name}}</a>
    </p>
    <div class="flex justify-between">
      <p class="text-sm text-slat-400 font-light mt-3">125 are going</p>

      <a class="text-white items-center bg-dodger-blue hover:bg-dodger-blue-400 rounded-full transition-colors p-2 scale-125 shadow-card"
        href="/venues/{{$event->venue->id}}/#tickets">
        <x-ri-coupon-3-line class="w-4" />
      </a>
    </div>
  </div>
</div>