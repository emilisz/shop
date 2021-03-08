<div>
  
   <a href="cart" class="absolute right-5 top-3 text-white flex flex-row uppercase">
      <div wire:loading wire:target="add">
         Adding to cart...
      </div>
      <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
      </svg>
      <span class="ml-2">{{$count}}</span>
   </a>
   <label for="search" class="hidden">Search products</label>
   <input wire:model="search" id="search" type="search" placeholder="Search products by title..." class="w-full p-3 mb-2 border rounded">
   <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
      @foreach ($products as $product)
      <div class="border shadow-md rounded-lg p-3 bg-white">
         <div class="bg-cover bg-no-repeat bg-center h-40 mx-auto w-1/2 p-5" style="background-image: url({{asset('img/phone.png')}})"></div>
         
         <h1 class="text-xl font-bold">{{$product->title}}</h1>
         <p>{{$product->description}}</p>
         <div class="flex flex-row justify-between mt-3">
            <p class="font-bold ">{{$product->price}} $</p>
            <button wire:click="add({{ $product}})" class="py-1 px-2 rounded bg-blue-800 hover:bg-gray-800 text-white flex flex-row">
               <svg class="w-6 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                     d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
               </svg>
               Buy</button>
         </div>
      </div>
      @endforeach
   </div>

  <div class="p-3 mt-3">
     {{ $products->links() }}
  </div>
</div>
