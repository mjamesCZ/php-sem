<x-layout>
  <div class="my-14 max-w-lg mx-auto border border-slate-200 shadow-outline rounded-lg p-16">
    <header>
      <a class="inline-flex mb-6 text-slate-400 hover:text-dodger-blue transition-colors" href="/admin">
        <x-ri-arrow-left-line class="w-5 mr-1" />Go back
      </a>
      <h2 class="text-4xl mb-6">Edit artist</h2>
    </header>

    <form method="POST" action="/artists/{{$artist->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      {{-- Name --}}
      <div class="mb-3">
        <label for="name" class="inline-block text mb-1 text-slate-600">Name</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="name"
          value="{{$artist->name}}" placeholder="Imagine Dragons" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Tags --}}
      <div class="mb-3">
        <label for="tags" class="inline-block text mb-1 text-slate-600">Tags</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="tags"
          value="{{$artist->tags}}" placeholder="Alternative/Indie, Rock, Pop" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Country --}}
      <div class="mb-3">
        <label for="country" class="inline-block text mb-1 text-slate-600">Country</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="country"
          value="{{$artist->country}}" placeholder="United States" />

        @error('country')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Website --}}
      <div class="mb-3">
        <label for="website" class="inline-block text mb-1 text-slate-600">Website</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="website"
          value="{{$artist->website}}" placeholder="forumkarlin.cz" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{-- Description --}}
      <div class="mb-3">
        <label for="description" class="inline-block text mb-1 text-slate-600">Description</label>
        <textarea class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="description"
          rows="6">{{$artist->description}}</textarea>

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