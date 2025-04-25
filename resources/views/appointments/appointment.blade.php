<x-app>
   Patient Name:  {{ $appointment["patient_name"] }}
    <br>
    Date: {{ $appointment["date"] }}
    <br>
    Time: {{ $appointment["time"] }}
    <br>
    Doctor Name: {{ $appointment["doctor_name"] }}
    <br>
    <div class="mt-6">
      <a class="bg-blue-500 text-white text-sm px-2 py-1 rounded-md" href="/appointments/create">New Appointment</a>
    </div>
</x-app>