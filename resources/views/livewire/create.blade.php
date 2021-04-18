<div>
	
	<div class="flex flex-col justify-around bg-white shadow-md rounded-lg mx-auto p-7 md:w-1/2 sm:w-2/3">

	    <h3 class="text-2xl w-auto font-bold border-b-2 border-blue-600">Create</h3>
	<div>

	  <label for="input_task" class="bg-white px-1">
		  Task
		  <br>
	</label>
	  <input
	 	 placeholder="Please, write your task"
	    id		="input_task"
	    type	="text"
	    name	="input_task"
	    class	="border-gray-300 px-2 my-2 border-blue rounded-sm w-full"
	    wire:model="input_task"
	    {{-- value="MArar" --}}
	  />
	</div>
	<div>
		<label for="input_descr" class="bg-white px-1">
	    Description
	    <br>
	    </label>
	  <textarea
	    id		="input_descr"
	    type	="text"
	    name	="input_descr"
	    class	="border-gray-300 px-2 my-2 border-blue rounded-sm w-full"
	    wire:model="input_descr"></textarea>
	</div>

	<div class="flex justify-around">
	<button 
		@click.prevent="menu=!menu" 
		wire:click="store()"
		class="text-center text-grey-lighter font-bold rounded text-xs bg-blue-600 p-4 px-10">OK
	</button>

	<button 
		@click.prevent="menu=!menu" 
		class="text-center text-grey-lighter font-bold rounded text-xs bg-blue-200 p-4 px-10">Back
	</button>
	</div>
	</div>

</div>