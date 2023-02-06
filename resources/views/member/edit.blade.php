<x-guest-layout>
    <form method="POST" action="{{ route('edit') }}">
        @csrf

        <!-- Staff ID -->
        <div>
            <x-input-label for="name" :value="__('Staff ID')" />
            <x-text-input id="staff_id" class="block mt-1 w-full" type="text" name="staff_id" :value="$member->staff_id" required
                autofocus />
            <x-input-error :messages="$errors->get('staff_id')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$member->name"
                required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$member->email"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <x-link :route="route('dashboard')">
                back
            </x-link>

            <x-primary-button class="ml-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
