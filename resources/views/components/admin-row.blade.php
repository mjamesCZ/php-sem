@props(['listing', 'entity'])

<div class="flex shadow-card px-5 py-2 rounded-2xl gap-8 items-center mb-3">
  <img class="w-24 aspect-[3/2] rounded-xl border-b-2 border-slate-50"
    src="{{$entity->image ? asset($entity->image) : asset('/images/no-image.png') }}" alt="">

  <div class="mr-auto">
    <a class="hover:text-dodger-blue transition-colors" href="/{{$listing}}/{{$entity->id}}" target="_blank">
      <h4 class=" text-xl">{{$entity->name}}</h4>
    </a>
    <p class="text-sm text-slate-400 font-light">entity ID: {{$entity->id}}</p>
  </div>

  <div class="mr-4">
    <a class="px-5 py-1 border-2 border-slate-100 rounded-full hover:text-dodger-blue transition-colors mr-3"
      href="/{{$listing}}/{{$entity->id}}/edit">Edit</a>

    <form class="inline" method="POST" action="/{{$listing}}/{{$entity->id}}">
      @csrf
      @method('DELETE')
      <button class="text-red-500 hover:text-red-600 transition-colors">Delete</button>
    </form>
  </div>
</div>