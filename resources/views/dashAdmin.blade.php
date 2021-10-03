<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kraken store
        </h2><br>
        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('dashh') }}">Notification ({{ $not }})</a>
    </x-slot>

    <div style="background-image: url(https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F12%2Fhp-omen-15-eric-hu-design-gaming-laptop-10.jpg?w=1600&cbr=1&q=90&fit=max); 
                background-repeat: no-repeat;
                background-attachment: cover;
                background-position: center;
                background-size: 1450px 1600px;">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-gray-800 flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
                <div class="text-white mt-10">
                    <p class="font-semibold">Add new merchandise</p>
                </div>
                <form class="flex flex-col space-y-8 mt-10">
                    <input type="text" placeholder="Price" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                    <input type="text" placeholder="Name" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                    <input type="text" placeholder="URL picture" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                    <button class="border border-blue-500 bg-blue-500 text-white rounded-lg py-3 font-semibold">Submit</button>
                </form>
            </div>
        </div>  
    </div>
</x-app-layout>
