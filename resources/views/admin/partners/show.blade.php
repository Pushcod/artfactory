<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Продукты') }}
            </h2>
            <a href="{{ route('products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку товаров') }}</a>
        </div>
    </x-slot>
<div class="container" >
    <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto" >
        <div class=" flex gap-2">
            <img src="{{ Storage::url($product->image) }}" class="max-h-[250px]" alt="...">
            <div class=" flex flex-col gap-2 items-center justify-center" >
                <h5 class="p-2 rounded-md bg-black text-amber-50 my-4 ">{{$product->title}}</h5>
                <p class="p-2 rounded-md bg-black text-amber-50 my-4">{{$product->content}}</p>
            </div>

        </div>
    </div>
</div>
</x-app-layout>
