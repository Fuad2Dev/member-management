<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Members') }}
            </h2>

            <x-link :route="route('member.create')">add</x-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <table class="w-full border text-center">
                <thead class="border-b">
                    <tr class="bg-gray-800">
                        @foreach (['staff ID', 'name', 'certificate taken'] as $item)
                            <th scope="col" class="text-white font-medium px-4 py-2 border-r text-lg">
                                {{ $item }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>


                    <tr class="bg-white border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                            01193430D
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                            Fuad Muhammed
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                            yes
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
