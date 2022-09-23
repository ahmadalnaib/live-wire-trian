<div class="">
   
    <input type="number" wire:model="num1" class="form-control" >
    <select class="form-select mb-3" aria-label="Default select example " wire:model="action">
    <option selected>+</option>
    <option selected>-</option>
    <option selected>*</option>
    <option selected>/</option>
    <option selected>%</option>
  </select>
    <input type="number" wire:model="num2" class="form-control" >
<button class="btn btn-primary btn-lg" wire:click="calc">{{$disabled ? 'bg-danger': ''}} = </button>
<p class="mt-5 text-center display-1">{{$result}}</p>
</div>