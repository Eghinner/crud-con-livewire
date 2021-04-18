<div x-data="{menu:false}" @click.away="menu=false">
<div class="py-2">
	

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        	<button 
        		@click.prevent="menu=!menu"
        		wire:click="no_te_deje_sola()"
        		class="mb-5 mt-0 text-center text-grey-lighter font-bold rounded text-xs bg-gradient-to-r from-indigo-400 to-purple-500 focus:from-pink-500 focus:to-yellow-500 w-20 p-3 mx-1">
        		New Task
        	</button>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            
    
	<table class="text-left w-full border-collapse">
	  <thead>
	    <tr class="bg-blue-700">
	      <th class="cursor-pointer py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Task</th>

	      <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light flex justify-end">Actions</th>
	    </tr>
	  </thead>
	  <tbody id="dragon" class="overflow-y-auto">
	  	@foreach($the_tasks as $task)
	    <tr class="hover:bg-grey-lighter">
	      <td class="py-4 px-6 border-b border-grey-light" x-data="{showChildren:false}" @click.away="showChildren=false">

		<div class="flex">
	    <h5 class="text-xl">
	    	<i class="fas fa-grip-lines mr-2 cursor-move"></i>
	     	{{$task->task}}
	    </h5>
	    <small @click.prevent="showChildren=!showChildren" class="cursor-pointer ml-3 text-gray-700 font-semibold">
	    	desc<i class="fas fa-angle-down text-gray-600 ml-1"></i>
	    </small>
	    </div>
	      <p class="text-gray-600" x-show="showChildren">
	      	{{$task->description}}
	      </p>

	    </td>

	      <td class="flex py-4 px-6 border-b border-grey-light justify-end">
	        <button @click.prevent="menu=!menu" wire:click="edit({{$task->id}})" class="flex text-center text-grey-lighter font-bold rounded text-xs bg-gradient-to-r from-green-400 to-blue-500 hover:from-blue-500 hover:to-green-500 p-4 mx-1">Edit</button>
	        <button wire:click="destroy({{$task->id}})" class="flex text-center text-grey-lighter font-bold rounded text-xs bg-gradient-to-r from-red-400 to-purple-500 focus:from-pink-500 focus:to-yellow-500 p-4 mx-1">Clean</button>
	      </td>
	    </tr>
	    @endforeach
	    
	  </tbody>
	</table>

</div>
</div>
</div>


<!-- Le Fuck Formularie -->
<div 	x-show="menu"

class="backdrop-filter backdrop-blur-sm absolute z-10 w-screen h-screen shadow frosted top-0 left-0">
<div 	x-show="menu"
		x-transition:enter="transition duration-30 transform ease-out"
        x-transition:enter-start="scale-0"
        x-transition:leave="transition duration-50 transform ease-in"
        x-transition:leave-end="opacity-0 scale-120"
        style="display: none;" 

class="z-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-full w-full flex flex-col justify-around">
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
</div>

</div>
</div>