@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Отзывы') }}
            </h2>
            <a href="{{ route('indusrties.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый Отзыв') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$indusrties" >
                @cell('image', $indusrties)
                <img src="{{ Storage::url($indusrties->image) }}" class="" alt="">
                @endcell
                @cell('back_img', $indusrties)
                <img src="{{ Storage::url($indusrties->back_img) }}" class="" alt="">
                @endcell
                @cell('action', $indusrties)
                <div class="flex gap-2">
                    <Link href="{{ route('indusrties.destroy', $indusrties->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('indusrties.edit', $indusrties->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
            </x-splade-table>
        </div>

</x-app-layout>
