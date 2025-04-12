<x-app>
    <h1>Create New Patient</h1>
    <form method="POST" action="new_patient">
        @csrf
        <div class= "flex flex-col mb-4">
         <label for="name">Name</label>
         <input class="border" type="text" id="name" name="name" />
       </div>
       <div class="flex flex-col mb-4">
         <label for="email">Email</label>
         <input class="border" type="email" id="email" name="email" />
       </div>
       <div class="flex flex-col mb-4">
         <label for="mobile">Mobile Phone</label>
         <input class="border" type="tel" id="mobile" name="mobile" placeholder="05xxxxxxxx" />
       </div>
       <div class="flex flex-col mb-4">
         <label for="age">Patient Age</label>
         <input class="border" type="number" id="age" name="age"/>
      </div>
      <div class="flex flex-col mb-4">
         <label for="medical_history">Medical History</label>
         <textarea class="border" type="number" id="medical_history" name="medical_history"></textarea>
      </div>
      <button type="submit" class="bg-blue-700 text-white text-sm px-2 py-1 rounded-md">Submit</button>
      <a href="/patients" class="bg-blue-700 text-white text-sm px-2 py-1 rounded-md">Show Patients List</a>
  </form>
</x-app>
