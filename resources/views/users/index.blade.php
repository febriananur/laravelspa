<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-link href="{{route('users.create')}}" class="p-4 bg-green-500 text-white hover:bg-green-400 rounded">Add</x-splade-link>
            <x-splade-table :for="$users" pagination-scroll="preserve">
                <x-splade-cell actions as=$user class="">
                    <x-splade-link href="{{route('users.edit',$user)}}" class="p-2 bg-yellow-400 hover:bg-yellow-300 rounded">Edit</x-splade-link>
                    <x-splade-form 
                        action="{{route('users.destroy',$user)}}"
                        method="delete"
                        confirm="Delete User"
                        confirm-text="Are you sure you want to delete your user?"
                        confirm-button="Yes, delete!"
                        cancel-button="No, I change my mind!"
                    >
                        <x-splade-button class="bg-red-500 rounded text-white">Delete</x-splade-button>
                    </x-splade-form>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-app-layout>
