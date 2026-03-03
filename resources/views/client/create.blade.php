<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>Register</title>
</head>

<body>
    <div
        class="min-h-screen flex flex-col items-center justify-center bg-[url(/assets/bg_client.jpg)]  bg-cover  bg-center p-4">

        <form class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full md:w-[60%] mx-autop-6 rounded-lg bg-transparent"
            action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Foto -->
            <div class="flex flex-col items-center col-span-1 md:col-span-2">

                <img src="{{ asset('assets/user.png') }}" data-default="{{ asset('assets/user.png') }}" alt="user photo"
                    id="photoPreview" class="w-24 h-24 rounded-full object-cover border border-gray-300 mb-2">
                <label for="photo"
                    class="cursor-pointer bg-red-400 text-white px-6 py-2 rounded-full hover:bg-red-400 transition">
                    Escolher foto
                </label>
                <input type="file" id="photo" name="photo" accept=".png, .jpg, .jpeg" class="hidden"
                    onchange="previewPhoto(event)">

            </div>

            <!-- Campos do formulário -->
            <div>
                <label class="flex justify-center mb-1">Full name</label>
                <input required minlength='3' type="text" name="full_name" id="full_name" placeholder="Your name"
                    class="border rounded-md px-3 py-2 w-full bg-white/90 border-none  
                     @error('full_name') border-red-500 @enderror">

                <p id="error_full_name" class="text-sm text-red-600 hidden"></p>

                @error('full_name')
                    <p class="text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <div>
                    <label class="flex justify-center mb-1">Birthday</label>
                    <input type="date" name="birthday" id="birthday"
                        class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
                </div>
            </div>

            <div>
                <label class="flex justify-center mb-1">CPF</label>
                <input type="text" name="cpf" id="cpf"
                    class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
            </div>

            <div>
                <label class="flex justify-center mb-1">Perfil name</label>
                <input type="text" name="perfil_name" id="perfil_name"
                    class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
            </div>

            <div>
                <label class="flex justify-center mb-1">Email</label>
                <input type="email" name="email" id="email"
                    class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
            </div>

            <div class="grid grid-cols-1 gap-y-4">
                <div>
                    <label class="flex justify-center mb-1">Password</label>
                    <input type="password" name="password" id="password" minlength="8" maxlength="16"
                        class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
                </div>
                <div>
                    <label class="flex justify-center mb-1">Password confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" minlength="8"
                        maxlength="16" class="rounded-md px-3 py-2 w-full  bg-white/90 border-none">
                </div>
            </div>

            <!-- Botão submit -->
            <div class="flex col-span-1 md:col-span-2 justify-center">
                <input type="submit" value="Let's go"
                    class="w-full bg-red-400 text-white py-2 rounded-md hover:bg-red-400 transition cursor-pointer md:w-[60%]">
            </div>

        </form>
        @if ($errors->has('general'))
            <div class="mb-4 rounded bg-red-100 p-3 text-red-700">
                {{ $errors->first('general') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>



</body>

</html>
