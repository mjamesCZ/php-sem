<x-layout>
  <div class="my-14 max-w-lg mx-auto border border-slate-200 shadow-outline rounded-lg p-16">
    <header>
      <a class="inline-flex mb-6 text-slate-400 hover:text-dodger-blue transition-colors" href="/admin">
        <x-ri-arrow-left-line class="w-5 mr-1" />Go back
      </a>
      <h2 class="text-4xl mb-6">Edit event</h2>
    </header>

    <form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      {{-- Name --}}
      <div class="mb-3">
        <label for="name" class="inline-block text mb-1 text-slate-600">Name</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="name"
          value="{{$event->name}}" placeholder="Colours of Ostrava" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Category --}}
      <div class="mb-3">
        <label for="category" class="inline-block text mb-1 text-slate-600">Category</label>
        <select name="category" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light">
          @foreach (['Concerts', 'Plays', 'Exhibitions', 'Festivals', 'Movies', 'Culinary', 'Conferences', 'Sports
          events', 'Other'] as $category)
          <option value="{{ $category }}" @selected($event->category==$category)>
            {{ $category }}
          </option>
          @endforeach
        </select>
      </div>

      {{-- Venue --}}
      <div class="mb-3">
        <label for="venue_id" class="inline-block text mb-1 text-slate-600">Venue</label>
        <select name="venue_id" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light">
          @foreach ($venues as $venue)
          <option value="{{ $venue->id }}" @selected($event->venue==$venue)>
            {{ $venue->name }}
          </option>
          @endforeach
        </select>
      </div>

      {{-- Time --}}
      <div class="mb-3">
        <label for="time" class="inline-block text mb-1 text-slate-600">Time of the event</label>
        <input type="datetime-local" name="time" value="{{ date('Y-m-d\TH:i', strtotime($event->time)) }}"
          class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light">

        @error('time')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Artists --}}
      <div class="mb-3">
        <label for="artists[]" class="inline-block text mb-1 text-slate-600">Preforming artists</label>
        <select multiple name="artists[]" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light">
          @foreach ($artists as $artist)
          <option value="{{$artist->id}}" {{$event->artists->contains($artist->id) ?
            'selected' : '' }}> {{$artist->name}}</option>
          @endforeach
        </select>
      </div>

      {{-- Description --}}
      <div class="mb-3">
        <label for="description" class="inline-block text mb-1 text-slate-600">Description</label>
        <textarea class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="description"
          rows="6">{{$event->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Image --}}
      <div class="mb-6">
        <label for="image" class="inline-block text mb-1 text-slate-600">Upload an image</label>
        <input type="file" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="image" />

        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="my-6 text-center">
        <button type="submit"
          class="bg-dodger-blue hover:bg-dodger-blue-400 text-white rounded-full py-2 px-24 transition-colors">
          Update
        </button>
      </div>
    </form>
  </div>
</x-layout>