@if(session()->has('alert'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
  class="fixed bottom-6 right-8 px-10 py-6 shadow-card rounded-lg bg-green-50/90 backdrop-blur-lg">
  <p class="text-green-600">
    {{session('alert')}}
  </p>
</div>

@endif