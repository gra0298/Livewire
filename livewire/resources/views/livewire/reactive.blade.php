<div class="w-96 p-10">
    <div class="w-full flex-1 mx-2 svelte-1l8159u">
        <div class="bg-white my-2 p-1 flex border border-blue-200 rounded svelte-1l8159u ">
            <input wire:model="text" placeholder="escribe algo..." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></div>
    </div>
    {{$text}}<!-- para ver cómo se actualiza text-->
    <div class="flex items-center ml-2">
        <button wire:click="count"  class="bg-blue-500 text-blue font-bold py-2 px-4 rounded border block">
            contar
        </button>
        <div class="ml-5">{{$count}}</div><!--  para que se imprima la variable count-->
    </div>
</div>
