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
                        @foreach (['staff ID', 'name', 'email', 'certificate taken'] as $item)
                            <th scope="col" class="text-white font-medium px-4 py-2 border-r text-lg">
                                {{ $item }}
                            </th>
                        @endforeach
                        {{-- <th class="bg-slate-100 border-slate-100"></th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($members as $member)
                        <tr class="bg-white border-b">
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                {{ $member->staff_id }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                {{ $member->name }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                {{ $member->email }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                yes
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                <x-link :route="route('member.edit', $member)">edit</x-link>
                                <x-link :route="route('member.edit', $member)">taken</x-link>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
