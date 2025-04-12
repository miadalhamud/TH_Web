@props(["path" , "active" => false])
<a id="nav-link" class="{{ $active ? 'text-blue-500' : 'text-blue-900'}} " href="{{ $path }}">{{ $slot }}</a>
