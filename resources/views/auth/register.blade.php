@extends('auth.layout')

@section('content')

<h2 class="font-extrabold mb-10 text-4xl tracking-wide flex items-center justify-center text-white">
    BioLink
</h2>

<div class="w-full  min-w-xs md:w-md rounded-2xl p-6">
    <h1 class="text-2xl font-semibold text-white mb-6">
        Criar conta
    </h1>

    <form class="flex flex-col gap-4" method="post" action="{{ route('register') }}">
        @csrf

        {{-- Name --}}
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-300">Nome</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="João da Silva"
                class="input bg-transparent w-full text-gray-200 ring-1 ring-white/20 focus:ring-primary focus:outline-none transition"
            />
            @error('name')
                <p class="text-error text-xs">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-300">Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="email@gmail.com"
                class="input bg-transparent w-full text-gray-200 ring-1 ring-white/20 focus:ring-primary focus:outline-none transition"
            />
            @error('email')
                <p class="text-error text-xs">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-300">Senha</label>
            <input
                type="password"
                name="password"
                placeholder="********"
                class="input bg-transparent w-full text-gray-200 ring-1 ring-white/20 focus:ring-primary focus:outline-none transition"
            />
            @error('password')
                <p class="text-error text-xs">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password Confirm --}}
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-300">Confirmar senha</label>
            <input
                type="password"
                name="password_confirmation"
                placeholder="********"
                class="input bg-transparent w-full text-gray-200 ring-1 ring-white/20 focus:ring-primary focus:outline-none transition"
            />
        </div>

        {{-- Actions --}}
        <div class="flex flex-col gap-3 mt-6">
            <button
                class="btn btn-primary w-full text-white font-semibold tracking-wide transition hover:scale-[1.02]"
            >
                Cadastrar
            </button>

            <a
                href="{{ route('login.create') }}"
                class="text-center text-xs text-gray-300 hover:text-primary transition"
            >
                Já possui conta? Entrar
            </a>
        </div>
    </form>
</div>

@endsection