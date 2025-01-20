<x-guest-layout>
    <form method="POST" action="{{ route('newUser') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

    <!-- campos para as informações técnicas--> 
    <div>
        <x-input-label for="formacao" :value="__('formação')" />
        <x-text-input id="formacao" class="block mt-1 w-full" type="text" name="formacao" :value="old('formacao')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('formacao')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="nome_formacao" :value="__('Detalhes da formação')" />
        <x-text-input id="nome_formacao" class="block mt-1 w-full" type="text" name="nome_formacao" :value="old('detalhes')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('nome_formacao')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="especializacoes" :value="__('Especializações')" />
        <x-text-input id="especializacoes" class="block mt-1 w-full" type="text" name="especializacoes" :value="old('especializacoes')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('especializacoes')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="cursos" :value="__('cursos')" />
        <x-text-input id="cursos" class="block mt-1 w-full" type="text" name="cursos" :value="old('cursos')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('cursos')" class="mt-2" />
    </div>
     
    <div>
        <x-input-label for="formacao_academica" :value="__('Formação escolar')" />
        <x-text-input id="formacao_academica" class="block mt-1 w-full" type="text" name="formacao_academica" :value="old('formacao')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('formacao_academica')" class="mt-2" />
    </div>
     
    <div>
        <x-input-label for="curriculo" :value="__('Curriculo')" />
        <x-text-input id="curriculo" class="block mt-1 w-full" type="text" name="curriculo" :value="old('curriculo')" required autofocus autocomplete="índice" />
        <x-input-error :messages="$errors->get('curriculo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="nascimento">Data de Nascimento:</x-input-label>
        <input type="date" id="nascimento" name="nascimento" value="{{ old('nascimento') }}" required>
    </div>
 


        
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!--checkbox radio para selecionar adm ou user-->
        <div class="mt-4">
            <input id="admin" type="radio" name="role" value="admin"{{ old('role') == 'admin' ? 'checked' : '' }}  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="admin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Administrador</label>
        </div>

        <div class="mt-4">
            <input checked id="user" type="radio" name="role" value="user" {{ old('role') == 'user' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="user" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuário</label>
        </div>
        <br>


        <div>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>

