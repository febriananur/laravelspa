<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Users') }}
            </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <x-splade-form class="space-y-4" action="{{route('users.update', $user)}}" :default="$user" method="put">
                            <x-splade-input name="name" placeholder="Your Email Name" label="Name" />
                            <x-splade-input name="email" type="email" placeholder="Your Email Address" label="Email"  />
                            <x-splade-input name="password" type="password" placeholder="Your Password" label="Password" />
                            <x-splade-submit label="Save" :spinner="false" />
                        </x-splade-form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    