<x-layout>
  <div class="container mt-24">
    <img class="mr-4 w-3/4 xl:w-2/3" src="{{asset('images/tagline.svg')}}"
      alt="Always get the front row tickets to your favourite events.">
    <h2 class="text-2xl mt-6">With Skybox, your cultural guide</h2>

    @auth
    <p class="text-xl mt-12 text-dodger-blue">
      Welcome back, {{auth()->user()->name}}!
    </p>
    @else
    <p class="text-xl mt-12 text-dodger-blue hover:text-dodger-blue-400 transition-colors">
      <a class="inline-flex" href="/register">Create an account to get started
        <x-ri-arrow-right-line class="w-5 ml-1.5" />
      </a>
    </p>
    @endauth

    <div class="flex gap-4 mt-20">
      <x-home-card title="Explore upcoming events" subtitle="Metronome Festival" url="events" />
      <x-home-card title="Explore hottest venues" subtitle="Forum Karlín" url="venues" />
      <x-home-card title="Explore trending artists" subtitle="Cashanova Bulhar" url="artists" />
    </div>
  </div>
</x-layout>