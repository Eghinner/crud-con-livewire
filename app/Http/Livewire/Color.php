<?php
namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;
class Color extends Component
{
	public $input_task, $input_descr, $selected_id, $the_user;
	public $updateMode = false;
    public function render()
    {
        $the_user =Auth::user()->id;
    	$the_tasks = Task::where('user_id',$the_user);
    	$the_tasks = $the_tasks->get();
        return view('livewire.color', compact('the_tasks'));
    }

    public function no_te_deje_sola(){
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->input_task = null;
        $this->input_descr = null;
    }

    //Check
    public function store(){
        
    	Task::create([
    		'task' => $this->input_task,
    		'description' => $this->input_descr,
            'user_id' => $this->the_user= Auth::id()
    	]);
        $this->resetInput();

    }
    
    public function edit($id)
    {
        $record = Task::findOrFail($id);
        $this->selected_id = $id;
        $this->task = $record->task;
        $this->email = $record->email;
        $this->updateMode = true;
    }

    public function update()
    {
        if ($this->selected_id) {
            $record = Task::find($this->selected_id);
            $record->update([
                'task' => $this->input_task,
                'description' => $this->input_descr
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }


    //Check
    public function destroy($id)
    {
        if ($id) {
            $record = Task::where('id', $id);
            $record->delete();
        }
    }
}
