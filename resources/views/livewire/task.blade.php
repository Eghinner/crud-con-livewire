<div>
    
	<table class="text-left w-full border-collapse">
	  <thead>
	    <tr class="bg-blue-700">
	      <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Task</th>

	      <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light flex justify-end">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($tasks as $task)
	    <tr class="hover:bg-grey-lighter">
	      <td class="py-4 px-6 border-b border-grey-light" x-data="{showChildren:false}" @click.away="showChildren=false">


	    <h5 class="text-xl cursor-pointer" @click.prevent="showChildren=!showChildren">
	      {{$task->task}}
	    </h5>

	      <p class="text-gray-600" x-show="showChildren" style="display: none;">
	      	{{$task->description}}
	      </p>

	    </td>

	      <td class="flex py-4 px-6 border-b border-grey-light justify-end">
	        <a href="#" class="flex text-center text-grey-lighter font-bold rounded text-xs bg-gradient-to-r from-green-400 to-blue-500 hover:from-blue-500 hover:to-green-500 w-20 p-3 mx-1">Edit</a>
	        <a href="#" class="flex text-center text-grey-lighter font-bold rounded text-xs bg-gradient-to-r from-red-400 to-purple-500 focus:from-pink-500 focus:to-yellow-500 w-20 p-3 mx-1">Clean</a>
	      </td>
	    </tr>
	    @endforeach
	    
	  </tbody>
	</table>

</div>
