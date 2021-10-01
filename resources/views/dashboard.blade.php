<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kraken store
        </h2><br>
        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('histt') }}">History</a>
    </x-slot>

    <div style="background-image: url(https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F12%2Fhp-omen-15-eric-hu-design-gaming-laptop-10.jpg?w=1600&cbr=1&q=90&fit=max); 
                background-repeat: no-repeat;
                background-attachment: cover;
                background-position: center;
                background-size: 1450px 1600px;">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Your balance : {{ $user->montant }} TND
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-screen min-h-screen p-10" >

            <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl">
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style='
                    background-image: url(https://www.sbsinformatique.com/2565-large_default/carte-graphique-palit-geforce-rtx-3090-gaming-pro-oc-tunisie.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 170px;'></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">5 890,000 TND</h4>
                        <p class="text-sm">Palit GeForce RTX ™ 3090 Gaming Pro OC Graphics Card</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 5890.000, 'libelle_achat' => 'Palit GeForce RTX ™ 3090 Gaming Pro OC Graphics Card' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://www.tunisianet.com.tn/15877-large/carte-graphique-nvidia-geforce-gt-9400.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 170px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">58,520 TND</h4>
                        <p class="text-sm">Nvidia GeForce 9400 GT graphics card</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 58.520, 'libelle_achat' => 'Nvidia GeForce 9400 GT graphics card' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://planete-informatique.tn/planet-xp/wp-content/uploads/2020/10/216546.jpg);
                    ackground-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 150px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">589,000 TND</h4>
                        <p class="text-sm">REDRAGON MIRROR 24 ”FULL HD CURVED PC Gaming Screen 144Hz 1Ms</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 589.000, 'libelle_achat' => 'REDRAGON MIRROR 24 ”FULL HD CURVED PC Gaming Screen 144Hz 1Ms' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://www.cdiscount.com/pdt2/p/0/1/1/700x700/aceumhe0eep01/rw/ecran-pc-gamer-incurve-acer-ed270rpbiipx-27-f.jpg);
                    ackground-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 230px 150px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">945,270 TND</h4>
                        <p class="text-sm">Curved PC Gaming Screen - ACER ED270RPbiipx - 27" FHD - Dalle VA - 165Hz - HDMI / DisplayPort</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 945.270, 'libelle_achat' => 'Curved PC Gaming Screen - ACER ED270RPbiipx - 27 FHD - Dalle VA - 165Hz - HDMI _ DisplayPort' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
            </div>

            

        </div>

        <div class="flex items-center justify-center w-screen min-h-screen p-10" >

            <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl">
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://www.wiki.tn/50456/pc-gamer-dhalsim-i5-9600kf-9-gen-16g-gtx-2060-super-gaming-x-240-go-ssd.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 160px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">2 469,000 TND</h4>
                        <p class="text-sm">PC GAMER DHALSIM I5 9600KF 9 GEN 16G GTX 2060 SUPER GAMING X 240 GO SSD</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 2469.000, 'libelle_achat' => 'PC GAMER DHALSIM I5 9600KF 9 GEN 16G GTX 2060 SUPER GAMING X 240 GO SSD' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://www.tunisianet.com.tn/52944-large/pc-gamer-3yw-rogue-i7-4e-gen-8-go-gtx-980-gaming-4g-cle-3g-offerte.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 160px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">2 591,220 TND</h4>
                        <p class="text-sm">Pc GAMER 3YW ROGUE / i7 4é Gén / 8 Go / GTX 980 Gaming 4G + Free 3G key</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 2591.220, 'libelle_achat' => 'Pc GAMER 3YW ROGUE _ i7 4é Gén _ 8 Go _ GTX 980 Gaming 4G + Free 3G key' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://planete-informatique.tn/planet-xp/wp-content/uploads/2020/12/ML.KERD_-600x600.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 240px 170px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">25,000 TND</h4>
                        <p class="text-sm">TINJI TJ-1 1600dpi Gaming Mouse</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 25.000, 'libelle_achat' => 'TINJI TJ-1 1600dpi Gaming Mouse' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
                <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
                    <div class="h-40 bg-gray-400 rounded-lg" style="
                    background-image: url(https://www.tunisianet.com.tn/131025-large/clavier-gaming-retroeclaire-spirit-of-gamer-pro-k5.jpg);
                    background-repeat: no-repeat;
                    background-attachment: cover;
                    background-position: center;
                    background-size: 230px 170px;"></div>
                    <div class="flex flex-col items-start mt-4">
                        <h4 class="text-xl font-semibold">45,500 TND</h4>
                        <p class="text-sm">Spirit of Gamer Pro-K5 Backlit Gaming Keyboard</p>
                        <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="{{ route('buyy' , [ 'montant' => 45.500, 'libelle_achat' => 'Spirit of Gamer Pro-K5 Backlit Gaming Keyboard' ]) }}" onclick="let r=confirm('Are you sure?'); if(r){alert('your order delivered within 24 hours')};">Buy</a>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</x-app-layout>
