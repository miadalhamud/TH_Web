<x-app>
  <h1>Doctors List:</h1>
   @foreach($doctors as $doctor) 
      <a class ="flex" href="/doctors/{{$doctor->id}}">{{$doctor->name}}</a>
      <br>
   @endforeach
</x-app>