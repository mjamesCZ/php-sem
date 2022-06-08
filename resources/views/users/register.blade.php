<x-layout>
  <div class="my-14 max-w-lg mx-auto border border-slate-200 shadow-outline rounded-lg p-16">
    <header>
      <h2 class="text-4xl mb-1">Create an account</h2>
      <a class="bg-slate-800 hover:bg-slate-700 text-white rounded-xl py-2 mt-5 mb-7 transition-colors flex justify-center"
        href="/auth/redirect">
        <x-ri-github-fill class="w-6 pr-2" />
        Sign in with GitHub
      </a>
    </header>

    <form method="POST" action="/users">
      @csrf
      <div class="mb-3">
        <label for="name" class="inline-block text mb-1 text-slate-600">Name</label>
        <input type="text" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="name"
          value="{{old('name')}}" placeholder="Jaromír Jágr" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="inline-block text mb-1 text-slate-600">Email</label>
        <input type="email" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="email"
          value="{{old('email')}}" placeholder="jarda@gmail.com" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="inline-block text mb-1 text-slate-600">
          Password
        </label>
        <input type="password" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password2" class="inline-block text mb-1 text-slate-600">
          Confirm Password
        </label>
        <input type="password" class="border border-slate-200 rounded-lg px-4 py-2 w-full font-light"
          name="password_confirmation" value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="my-6 text-center">
        <button type="submit"
          class="bg-dodger-blue hover:bg-dodger-blue-400 text-white rounded-full py-2 px-24 transition-colors">
          Sign Up
        </button>
      </div>

      <p class="text mt-8 text-dodger-blue hover:text-dodger-blue-400 transition-colors">
        <a class="inline-flex" href="/login">Already have an account? Log in
          <x-ri-arrow-right-line class="w-5 ml-1.5" />
        </a>
      </p>
    </form>
  </div>
</x-layout>