<x-app>
    <x-slot:title>Create Nwe Appointment</x-slot:title>
    <form method="POST" sction ="/appointments/create">
        @csrf
        <input type="hidden" name="patient_id" value="{{ $patient_id }}">
        <div class= "flex flex-col mb-4">
         <label for="date">Date</label>
         <input class="border" type="date" id="appointment_date" name="appointment_date" />
       </div>
       <div class="flex flex-col mb-4">
         <label for="time">Time</label>
         <input class="border" type="time" id="appointment_time" name="appointment_time" />
      </div>
      <div class="flex flex-col mb-4">
        <select name="doctor_id" id="doctor_id" class="w-full border rounded-lg mb-10">
            <option value=""> Select Doctor</option>
            @foreach($doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach
          </select>
     </div>
     <button type="submit" class="bg-blue-700 text-white text-sm px-2 py-1 rounded-md">Submit</button>
     </form>
</x-app>