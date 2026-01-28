@extends('auth.layout')

@section('content')

<h2 class="font-extrabold mb-10 text-4xl tracking-wide flex items-center justify-center text-white">
    BioLink
</h2>

<div class="w-full  min-w-xs md:w-md rounded-2xl p-6">
    <h1 class="text-xl font-semibold text-white mb-6">
        Acessar conta
    </h1>

    <form class="flex flex-col gap-4" action="{{ route('login') }}" method="post">
        @csrf

        {{-- Email --}}
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-300">Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="email@gmail.com"
                autofocus
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

        {{-- Actions --}}
        <div class="flex flex-col gap-3 mt-6">
            <button
                class="btn btn-primary w-full text-white font-semibold tracking-wide transition hover:scale-[1.02]"
            >
                Entrar
            </button>

            <a
                href="{{ route('register.create') }}"
                class="text-center text-xs text-gray-300 hover:text-primary transition"
            >
                Não possui conta? Criar agora
            </a>
        </div>
    </form>
</div>

@endsection