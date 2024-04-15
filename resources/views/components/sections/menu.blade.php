{{-- <style>
    .bordered {
        border-bottom: 1px solid gray;
    }
</style> --}}
<div class="p-4">
    <div class="">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex-col bordered px-4 py-4 mx-auto">
                <h2 class="font-bold text-2xl ">Menu</h2>
                <h4 class="font-bold text-xl">Popular Ice Creams</h4>
                <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-4 my-4">
                    <x-card padding="none" shadow="sm" class="flex-col  bg-gray-700 text-white rounded hover:scale-105 border-red-600 cursor-pointer">
                        <img class="w-[100%]" src="https://img.freepik.com/free-photo/coold-sweet-ice-cream-with-chocolate_144627-7297.jpg?t=st=1712971472~exp=1712975072~hmac=d05af4fcc6eb75b9ca9aeffeb1e89d3a6ee23993ff061fb94ded69dc5b68c00c&w=900" alt="ice" height="300" width="300"/>
                        <div class="p-2" >
                            <h3>American Gelato</h3>
                            <span>3 photos . 3 Reviews</span>
                        </div>
                    </x-card>
                    <x-card padding="none" shadow="sm" class="flex-col  bg-gray-700 text-white rounded hover:scale-105 border-red-600 cursor-pointer">
                        <img class="w-[100%]" src="https://img.freepik.com/free-photo/coold-sweet-ice-cream-with-chocolate_144627-7294.jpg?t=st=1713027759~exp=1713031359~hmac=e845859ff885af7a9f7e2d4f5d6998fb2bdbba96158d0ccbaf99bda9c4a335b2&w=900" alt="ice" height="300" width="300"/>
                        <div class="p-2">
                            <h3>Chocolate Flavour</h3>
                            <span>3 photos . 3 Reviews</span>
                        </div>
                    </x-card>
                    <x-card padding="none" shadow="sm" class="flex-col  bg-gray-700 text-white rounded hover:scale-105 border-red-600 cursor-pointer">
                        <img class="w-[100%]" src="https://img.freepik.com/premium-photo/delicious-summer-dessert-coffee-ice-cream-waffle-cone_978921-4808.jpg?w=900" alt="ice" height="300" width="300"/>
                        <div class="p-2">
                            <h3>Frozen Yogurt</h3>
                            <span>3 photos . 3 Reviews</span>
                        </div>
                    </x-card>
                </div>
                <x-button red label='Website Menu'/>
            </div>
            <div class="bordered py-4">
                <div class="flex-col border-2 p-4">
                    <h2 class="text-2xl font-bold">Order Ice Cream</h2>
                    <h4>Takeout</h4>
                    <div class="flex gap-4">
                        <h4>No fees</h4>
                        <h4>Pick-up in next 10-25mins</h4>
                    </div>
                    
                    <x-button class="my-4 w-[100%]" red>Start Order</x-button>
                </div>
                <div class="flex-col border-2 mt-4 p-4">
                    <div class="flex items-center justify-between py-2 border-b-2">
                        <x-nav-link class="text-red-500" href="#" sm>icecreampro.com</x-nav-link>
                        <x-icon name="external-link" class="w-10 h-10 p-2 border-2 rounded-full" solid />
                    </div>
                    <div class="flex items-center justify-between py-2 border-b-2">
                        <h2>+234 8161823021</h2>
                        <x-icon name="phone-incoming" class="w-10 h-10 p-2 border-2 rounded-full" solid />
                    </div>
                    <div class="flex items-center justify-between py-2 border-b-2">
                        <h2>Directions</h2>
                        <x-icon name="location-marker" class="w-10 h-10 p-2 border-2 rounded-full" solid />
                    </div>
                    <x-button red class="w-[100%] text-white">
                        <x-icon name="pencil" class="w-5 h-5" solid />
                        Suggest an edit
                    </x-button>
                </div>
            </div>

        </div>


        <div class="flex-col bordered px-4 py-8 mx-auto">
            <h2 class="font-bold  text-lg">Highlights from the business</h2>
            <div class="grid md:grid-cols-6  justify-between py-6">
                <span>
                    <x-icon name="credit-card" class="w-12 h-12 p-2 border-2 rounded-full" solid />
                    <p class="text-left">Discounts<br/> Available</p>
                </span>
                <span>
                    <x-icon name="credit-card" class="w-12 h-12 p-2 border-2 rounded-full" solid />
                    <p class="text-left">Locally Owned<br/> & Operated</p>
                </span>
                <span>
                    <x-icon name="credit-card" class="w-12 h-12 p-2 border-2 rounded-full" solid />
                    <p class="text-left">Catering<br/> Services</p>
                </span>
                <span>
                    <x-icon name="credit-card" class="w-12 h-12 p-2 border-2 rounded-full" solid />
                    <p class="text-left">Kid<br/> Friendly</p>
                </span>
                <span>
                    <x-icon name="support" class="w-12 h-12 p-2 border-2 rounded-full" solid />
                    <p class="text-left">Healthy<br/> Dining</p>
                </span>
            </div>
        </div>
        <div class="px-4 py-8 bordered">
            <h2 class="font-bold text-xl">Location & Hours</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div class="flex-col">
                    <img class="my-4 h-20 w-20" src="https://img.freepik.com/free-vector/street-map-desing-with-catering-sector-pins_23-2147618798.jpg?t=st=1713033608~exp=1713037208~hmac=f9668bd4fbd1084ef6a762bb45b8d3e5a46eff3d5781aeddd70dc20b8fbd8470&w=740" alt="map"/>
                    <div class="flex gap-4">
                        <h4>1503 N Point St <br/>

                            San Francisco, CA 94123<br/>
                            
                            Marina/Cow Hollow</h4>
                        <div><x-button padding="none" light gray label="Get Directions" /></div>
                    </div>
                </div>

                <div class="flex gap-4 text-sm">
                    <div>
                        <h3>Mon</h3>
                        <h3>Tue</h3>
                        <h3>Wed</h3>
                        <h3>Thu</h3>
                        <h3>Fri</h3>
                        <h3>Sat</h3>
                        <h3>Sun</h3>
                    </div>
                    <div>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>
                        <h3>10:00 AM to 10:00 PM</h3>

                    </div>

                </div>
            </div>
        </div>

    </div>
    


</div>