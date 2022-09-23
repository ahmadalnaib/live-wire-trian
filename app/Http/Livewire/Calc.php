<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calc extends Component
{

    public $num1=0;
    public $num2=0;
    public string $action='+';
    public float $result=0;
    public bool $disabled=false;

    public function render()
    {
        return view('livewire.calc');
    }

    public function calc()
    {
        $num1=(float)$this->num1;
        $num2=(float)$this->num2;

        if($this->action === '-'){
            $this->result=$num1 - $num2;
        }else if($this->action === '+'){
            $this->result=$num1 + $num2;
        } else if($this->action === '*'){
            $this->result=$num1 * $num2;
        }
         else if($this->action === '/'){
            $this->result=$num1 / $num2;
        }
         else if($this->action === '%'){
            $this->result=$num1 / 100 * $num2;
        }
    }

    public function updated($property)
    {

        if($this->num1 === '' || $this->num2 ===''){
            $this->disabled=true;
        } else{
            $this->disabled=false;
        }

    }
}
