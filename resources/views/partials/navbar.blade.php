<link href="/css/app.css" rel="stylesheet">
<div class="h-screen w-full flex bg-gray-800">
<nav class="w-24 flex flex-col items-center bg-gray-900 py-4">
      <div class="text-lg font-semibold text-white">Le Festin</div>
      <!-- nav content -->
      {{-- 1ère icone --}}
      <ul class="mt-2 text-gray-300 font-semibold">
        <li class="mt-3 t">
          <a href="{{ route("acceuil") }}" class="flex flex-col items-center text-sm capitalize">

       {{-- <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
              <path
                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                  17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                  8h-8v10h8V11m-10 4H3v6h8v-6z"
              ></path>
            </svg> --}}

              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
            <span>Acceuil</span>

          </a>
        </li>

        {{-- 2ème icone --}}
        <li class="mt-3 t">
          <a href="{{ route("contact") }}" class="flex flex-col items-center text-sm capitalize">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
              
            <span>Contacts</span>

          </a>
        </li>

        {{-- 3ème icone --}}
        <li class="mt-3 t">
          <a href="#" class="flex flex-col items-center text-sm capitalize">
            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
              <path
                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                  17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                  8h-8v10h8V11m-10 4H3v6h8v-6z"
              ></path>
            </svg>
            <span>Drink</span>
          </a>
        </li>
      </ul>
    </nav>