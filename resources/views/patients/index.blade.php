<x-app>
  <h1>Patients List:</h1>
   @foreach($patients as $patient) 
      <a class ="flex" href="/patients/{{$patient->id}}">{{$patient->name}}</a>
      <br>
   @endforeach
</x-app>
