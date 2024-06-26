<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Videogame') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="data_venda" :value="__('Data de Venda')" />
                            <x-text-input id="data_venda" class="block mt-1 w-full" type="date" name="data_venda" :value="old('data_venda')" required />
                            <x-input-error :messages="$errors->get('data_venda')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="cor" :value="__('Cor')" />
                            <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" required />
                            <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="preco" :value="__('Preço')" />
                            <x-text-input id="preco" class="block mt-1 w-full" type="number" name="preco" :value="old('preco')" required step="0.01" />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="processador" :value="__('Processador')" />
                            <x-text-input id="processador" class="block mt-1 w-full" type="text" name="processador" :value="old('processador')" required />
                            <x-input-error :messages="$errors->get('processador')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Confirmar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
