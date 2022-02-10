@props(['route' => ''])
<div class="menubtn {{ request()->path() == $route ? 'text-blue-800' : 'text-blue-400' }}"><a href="{{ $route }}">{{ $slot }}</a></div>
