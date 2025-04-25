<x-app>
   Email:  {{ $patient["email"] }}
    <br>
    Mobile Phone: {{ $patient["mobile"] }}
    <br>
    Age: {{ $patient["age"] }}
    <br>
    Medical History: {{ $patient["medical_history"] }}
    <br>
    <div class="mt-6">
      <a class="bg-blue-500 text-white text-sm px-2 py-1 rounded-md" href="/appointments/create?patient_id={{ $patient->id }}">New Appointment</a>
    </div>
</x-app>