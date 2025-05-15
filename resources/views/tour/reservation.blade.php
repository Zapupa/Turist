<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Бронирование') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div
                        class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        {{$tour->title}}
                    </div>
                    <div
                        class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @php
                            \Carbon\Carbon::setLocale('ru')
                        @endphp
                        {{\Carbon\Carbon::parse($tour->date)->translatedFormat('j F Y')}}
                    </div>

                    <form method="POST" action="{{ route('request.store', $tour) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-1 p-5">
                            <label for="number">Количество человек</label>
                            <input type="number" name="number" id="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Количество людей" value="1" required />
                        </div>
                        <input class="hidden" type="number" , name="tour_id" id="tour_id" value="{{ $tour->id }}">
                        <input type="hidden" , name="costs" id="costs" value="{{ $tour->price }}">

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Забронировать</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>