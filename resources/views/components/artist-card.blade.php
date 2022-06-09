@props(['artist'])

<div class="flex border-2 border-slate-50 rounded-2xl shadow-card">
  <a class="w-1/3 hover:opacity-90 transition-opacity" href="/artists/{{$artist->id}}">
    <img class="h-full object-cover rounded-l-2xl border-r-2 border-slate-50"
      src="{{$artist->image ? asset($artist->image) : asset('/images/no-image.png') }}" alt="{{$artist->name}}">
  </a>

  <div class="w-2/3 p-6">
    <h3 class="text-lg mb-2 truncate">
      <a class="hover:text-dodger-blue transition-colors" href="/artists/{{$artist->id}}">{{$artist->name}}</a>
    </h3>
    <p class="text-slate-600 font-light">{{$artist->tags}}</p>
    <p class="text-slate-600 font-light truncate">{{$artist->country}}</p>
    <p class="text-sm text-slate-400 font-light mt-3">{{$artist->events->count()}} upcoming
      event{{$artist->events->count() !== 1 ? 's' : ''}}</p>
  </div>
</div>