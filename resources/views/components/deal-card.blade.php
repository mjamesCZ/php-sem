@props(['deal'])

<div class="flex justify-between shadow-outline px-8 py-2 rounded-2xl gap-8 items-center mb-8 whitespace-nowrap">
  <div class="flex items-center gap-8">
    <h4 class="text-lg w-32">{{$deal->name}}</h4>

    <p class="w-32">Price: <span class="text-dodger-blue">{{$deal->price}} Kč</span></p>

    @unless($deal->stock == 0)
    <p>Still available: <span class="text-dodger-blue">{{$deal->stock}}</span></p>
    @else
    <p class="text-slate-400">Out of stock</p>
    @endunless
  </div>

  <form method="POST" action="/tickets/{{$deal->id}}" enctype="multipart/form-data">
    @csrf

    {{-- Quantity --}}
    <div class="inline">
      <label for="quantity" class="text mb-1 text-slate-400">Quantity</label>
      <input type="number" min="1" max="{{$deal->stock}}"
        class="border border-slate-200 rounded-lg px-4 py-2 mr-4 ml-2 font-light w-24" name="quantity" value="1" />

      @error('quantity')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <button type="submit" @if ($deal->stock == 0) disabled @endif
      class="inline bg-dodger-blue hover:bg-dodger-blue-400 text-white rounded-full py-2 px-8 transition-colors
      disabled:bg-slate-300">
      Buy
    </button>
  </form>
</div>