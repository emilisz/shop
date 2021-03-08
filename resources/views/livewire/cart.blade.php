<div class="border p-3 grid grid-cols-3 gap-3 bg-white">
    @if ($cart)
        <div class="lg:col-span-2">
            <h1 class="font-xl font-bold">Cart ({{count($cart)}})</h1>
            {{-- {{dd($cart)}} --}}
            <div class="p-3">
                @php
                $totalSum = 0;
                @endphp
        
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $product)
                        <tr>
                            <td class="border p-3">{{$product['title']}}</td>
                            <td class="border p-3">{{$product['description']}}</td>
                            <td class="border p-3">{{$product['qty']}}</td>
                            <td class="border p-3 ">{{$product['price']}} $</td>
                            <td class="border p-3 font-bold">{{$product['price'] * $product['qty']}} $</td>
                        </tr>
                        @php
                        $totalSum += $product['price'] * $product['qty'];
                        @endphp
                        @endforeach
        
        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="lg:col-span-1 flex flex-wrap content-end">
        
            <div class="title font-sans font-bold mr-5 py-2 px-5">Total: {{$totalSum}} $</div>
            <button wire:click="checkout"
                class="bg-green-600 hover:bg-gray-800 text-white py-2 px-5 rounded shadow-lg ">Checkout</button>
        </div>
    @else
        Cart empty ...
    @endif
</div>
