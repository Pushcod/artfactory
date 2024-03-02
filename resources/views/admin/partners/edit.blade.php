@seoTitle(__('Редактировать заявку'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование заявки') }} "{{ $about->name }}"
            </h2>
            <a href="{{ route('abouts.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('abouts.update', $about->id)}}" :default="$about">
                <x-splade-input name="name" label="{{__('ФИО')}}" placeholder="{{__('Имя')}}"/>
                <x-splade-textarea class="mt-5" name="text" label="{{__('текст')}}" placeholder="{{__('Отзыв')}}"/>
                <x-splade-file name="profile" label="{{__('Фото')}}"/>
                <x-splade-input name="number_phone" label="{{__('Номер телефона')}}" placeholder="{{__('ФИО Клиента')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                    <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
