<x-app>
    <h1 class="we">Welcome to Al Noor Health Center</h1>
    <h4>Our Medical Specialties:</h4>
    @foreach($specialties as $specialty) 
      <a class ="flex" href= "/specialty/{{$specialty->id}}">{{$specialty->specialty}}</a>
    @endforeach
</x-app>