<x-guest-layout>
    <form method="POST" action="{{ route('newUser') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Sobre nome -->
        <div>
            <x-input-label for="sobreNome" :value="__('Sobre nome')" />
            <x-text-input id="sobreNome" class="block mt-1 w-full" type="text" name="sobreNome" :value="old('sobreNome')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('sobreNome')" class="mt-2" />
        </div>

        <!-- CPF -->
        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Local de Residência -->
        <div class="mt-4">
            <x-input-label for="residencia" :value="__('Residência')" />
            <x-text-input id="residencia" class="block mt-1 w-full" type="text" name="residencia" :value="old('residencia')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('residencia')" class="mt-2" />
        </div>

        <!-- Registro Geral -->
        <div class="mt-4">
            <x-input-label for="registroGeral" :value="__('Registro geral')" />
            <x-text-input id="registroGeral" class="block mt-1 w-full" type="text" name="registroGeral" :value="old('registroGeral')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('registroGeral')" class="mt-2" />
        </div>

        <!-- Comprovante de Atuação -->
        <div class="mt-4">
            <x-input-label for="comprovanteAtuacao" :value="__('Comprovante de atuação')" />
            <x-text-input id="comprovanteAtuacao" class="block mt-1 w-full" type="text" name="comprovanteAtuacao" :value="old('comprovanteAtuacao')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('comprovanteAtuacao')" class="mt-2" />
        </div>

        <!-- Campos para as informações técnicas --> 
        <div>
            <x-input-label for="formacao" :value="__('Formação')" />
            <x-text-input id="formacao" class="block mt-1 w-full" type="text" name="formacao" :value="old('formacao')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('formacao')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="nome_formacao" :value="__('Detalhes da formação')" />
            <x-text-input id="nome_formacao" class="block mt-1 w-full" type="text" name="nome_formacao" :value="old('nome_formacao')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('nome_formacao')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="especializacoes" :value="__('Especializações')" />
            <x-text-input id="especializacoes" class="block mt-1 w-full" type="text" name="especializacoes" :value="old('especializacoes')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('especializacoes')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="cursos" :value="__('Cursos')" />
            <x-text-input id="cursos" class="block mt-1 w-full" type="text" name="cursos" :value="old('cursos')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('cursos')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="formacao_academica" :value="__('Formação acadêmica')" />
            <x-text-input id="formacao_academica" class="block mt-1 w-full" type="text" name="formacao_academica" :value="old('formacao_academica')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('formacao_academica')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="curriculo" :value="__('Currículo')" />
            <x-text-input id="curriculo" class="block mt-1 w-full" type="text" name="curriculo" :value="old('curriculo')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('curriculo')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="cargo" :value="__('Cargo')" />
            <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('nascimento')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Checkbox radio para selecionar admin ou user -->
        <div class="mt-4">
            <input id="admin" type="radio" name="role" value="admin" {{ old('role') == 'admin' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="admin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Administrador</label>
        </div>

        <div class="mt-4">
            <input id="user" type="radio" name="role" value="user" {{ old('role') == 'user' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="user" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuário</label>
        </div>

        <br>

        <!-- Button -->
        <div>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
