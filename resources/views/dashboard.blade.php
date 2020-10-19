<x-app-layout>
    <x-slot name="header">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('usuarios.index') }}">Menu de Usuários</a><br>
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('tarefas.index') }}">Menu de Tarefas</a>
        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-jet-dropdown-link>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            </div>
        </div>
    </div>
</x-app-layout>
