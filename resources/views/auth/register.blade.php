@extends("layouts.app")

@section("titulo")
    Registrate
@endsection

@section("contenido")
    <div class="flex justify-center md:gap-10 md:items-center">
        <div class="hidden lg:w-6/12 lg:block p-5">
            <img src="{{asset('img/register.jpg')}}" alt="imagen registro de usuario"/>
        </div>
        <div class="w-8/12 md:w-6/12 lg:w-4/12 p-6 bg-white rounded-lg shadow-xl">
            <form action={{route("register")}} method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Nombre de usuario</label>
                    <input id="username" name="username" type="text" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electronico</label>
                    <input id="email" name="email" type="email" placeholder="Tu correo electronico" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="Contraseña" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirmar contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmar contraseña" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection