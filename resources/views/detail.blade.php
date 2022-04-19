@extends("layouts.app")
    @section('content')

    <main class="w-full overflow-y-auto">
        <div class="px-10 mt-5">
          <span class="uppercase font-bold text-1xl text-white"
            >{{ $item->title }}</span>
        </div>
        
        {{-- <div class="px-10 grid grid-cols-2 grid-rows-2 gap-4"> --}}
          


        <!-- component -->
        <section class="row-span-2 text-gray-700 body-font overflow-hidden bg-red-400">
          <div class="container px-5 py-4 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
              <img alt="ecommerce" class="lg:w-1/2 h-full w-full object-cover object-center rounded border border-gray-200" src={{ $item->image }}>
              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 ">Category : {{ $item->category_id }}</h1>

                <p class="leading-5 ">{{ $item->title }}</p>

                <div class="flex mt-2 items-center pb-5 border-b-2 border-gray-200 mb-5">
                </div>

                <p class="leading-relaxed ">{{ $item->content }}</p>
                
                <div class="flex">
                  <span class="title-font font-medium text-2xl text-gray-900">$ {{ $item->price }}</span>
                  <button class="flex ml-auto text-white bg-lime-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Ajouter au panier</button>

                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- </div> --}}

    </main>
    @endsection