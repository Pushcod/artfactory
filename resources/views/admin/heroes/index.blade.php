@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Отзывы') }}
            </h2>
            <a href="{{ route('heroes.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый Отзыв') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$heroes" >
                @cell('image', $heroes)
                <img src="{{ Storage::url($heroes->image) }}" class="" alt="">
                @endcell
                @cell('action', $heroes)
                <div class="flex gap-2">
                    <Link href="{{ route('heroes.destroy', $heroes->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('heroes.edit', $heroes->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
            </x-splade-table>
        </div>

</x-app-layout>
