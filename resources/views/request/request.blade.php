<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-black ">
                        <thead class="text-xs text-white uppercase bg-blue-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Дата тура
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Название
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Количество мест
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Стоимость
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $request)
                                <div class="relative overflow-x-auto">
                                    <tr class="bg-white border-b dark:bg-white dark:border-blue-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                                            @php
                                                \Carbon\Carbon::setLocale('ru')
                                            @endphp
                                            {{\Carbon\Carbon::parse($request->tour->date)->translatedFormat('j F Y')}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $request->tour->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $request->number }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $request->costs }}
                                        </td>
                                    </tr>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>