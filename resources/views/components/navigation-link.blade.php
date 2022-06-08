@props(['url', 'routeName'])

<li class="p-1 mb-2">
  <a class="hover:text-dodger-blue transition-colors block {{ Route::currentRouteNamed( $routeName ) ?  'text-dodger-blue' : '' }}"
    href="{{$url}}">
    {{$slot}}
  </a>
</li>