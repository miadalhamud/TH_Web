<x-app>
    <h1>Create New Doctor</h>
    <form method="POST" action="new_doctor">
        @csrf
        <div class= "flex flex-col mb-4">
         <label for="name">Name</label>
         <input class="border" type="text" id="name" name="name" />
       </div>
       <button type="submit" class="bg-blue-700 text-white text-sm px-2 py-1 rounded-md">Submit</button>
       <a href="/doctors" class="bg-blue-700 text-white text-sm px-2 py-1 rounded-md">Show Doctors List</a>
     </form>
</x-app>

