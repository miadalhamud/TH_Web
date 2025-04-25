<x-app>
  <h1>Appointments List:</h1>
   @foreach($appointments as $appointment) 
      <a class ="flex" href="/appointments/{{$appointment->id}}">
         {{$appointment->patient->name}} ,  {{$appointment->doctor->name}}
    </a>
      <br>
   @endforeach
</x-app>
