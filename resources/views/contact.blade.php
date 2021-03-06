@extends("layouts.app")
    @section('content')

<main class="w-full overflow-y-auto">
  <div class="px-10 mt-5">
      <h1 class="text-white max-w-2xl mx-auto">Contactez-nous</h1>

{{-- 
    Afficher une erreur pré-définie dans le fichier validation.php
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-green-500 max-w-2xl mx-auto">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
--}}

    @if ($enregistrement)
    <br><br>
        <h3 class="text-white max-w-2xl mx-auto">Inscription Ok</h3>
    @endif

    <br><br>

    <!-- component -->
  <div class="max-w-2xl mx-auto">

    <form action=" {{ route('contact') }} " method="post">
      {{-- génère un token pour protéger contre les CSRF --}}
      @csrf

      {{-- Afficher message d'erreur personnalisé --}}
      @error('nom')
      <h2  class="text-red-700">{{ $message }}</h2>
      @enderror
      <label class="text-white" for="nom">Votre nom</label>
      <input type="text" name="nom">

      @error('prenom')
      <h2  class="text-green-300">Votre prénom est obligatoire</h2>
      @enderror
      <label class="text-white" for="prenom">Votre prénom</label>
      <input type="text" name="prenom">

      <input type="submit" value="Soumettre" class="text-white bg-orange-700 rounded-xl px-5">
  {{-- <button type="submit" class="text-white bg-orange-700 rounded-xl px-5">Soumettre</button> --}}
    </form>

  </div>

    {{-- <form>
      <div class="relative z-0 mb-6 w-full group">
        <input type="email" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
      </div>

      <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        </div>

        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
        </div>
      </div>

      <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
        </div>
      </div>

      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form> --}}

  </div>

</main>    
    @endsection