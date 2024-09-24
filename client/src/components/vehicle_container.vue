<template>
    
    <router-link to="details/abc123" class="flex flex-wrap justify-between gap-2">
        <div v-for="car, key in cars" :key="key" class="flex basis-1/5 flex-col grow gap-4 border-2 rounded-lg w-fit cursor-pointer">
            
            <div class="flex">
                <img class="flex rounded-t-lg" :src="car.img" alt="car-img">
            </div>

            <div class="flex justify-between px-2">
                <div class="flex flex-col gap-1">
                    <div>
                        <img :src="car.logo" alt="logo">
                    </div>
                    <div>
                        <h1 class="font-semibold">{{ car.name }}</h1>
                    </div>
                </div>
                <div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fill-neutral-600" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"></path></svg>
                </div>
            </div>

            <div class="flex justify-between p-2">
                <div class="flex flex-col items-center gap-1">
                    <div>
                        <svg class="w-4 h-4 fill-[#6b6b6b]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M149.6 41L42.88 254.4c23.8 24.3 53.54 58.8 78.42 97.4 24.5 38.1 44.1 79.7 47.1 119.2h270.3L423.3 41H149.6zM164 64h230l8 192H74l90-192zm86.8 17.99l-141 154.81L339.3 81.99h-88.5zM336 279h64v18h-64v-18z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-medium">{{ car.doors }} Doors</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-1">
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-4 h-4 text-sky-500" xmlns="http://www.w3.org/2000/svg"><path d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-medium">{{ car.seats }} Seats</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-1">
                    <div>
                        <svg class="w-4 h-4 fill-orange-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" color="orange" xmlns="http://www.w3.org/2000/svg"><path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-medium">{{ car.speed }}</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-1">
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 25C128.3 25 25 128.3 25 256s103.3 231 231 231 231-103.3 231-231S383.7 25 256 25zm0 30c110.9 0 201 90.1 201 201s-90.1 201-201 201S55 366.9 55 256 145.1 55 256 55zM80.52 203.9c-4.71 19.2-7.52 37-7.52 54 144.7 30.3 121.5 62.4 148 177.8 11.4 2.1 23 3.3 35 3.3s23.6-1.2 35-3.3c26.5-115.4 3.3-147.5 148-177.8-.6-18.9-3-38.4-7.5-54C346.7 182.7 301.1 172 256 172c-45.1 0-90.7 10.7-175.48 31.9zM256 183c40.2 0 73 32.8 73 73s-32.8 73-73 73-73-32.8-73-73 32.8-73 73-73zm0 18c-30.5 0-55 24.5-55 55s24.5 55 55 55 55-24.5 55-55-24.5-55-55-55z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-medium">{{ car.mode }}</p>    
                    </div>
                </div>
            </div>
        </div>
    </router-link>
        
</template>

<script setup>

const cars = [
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
    {name: "Audi V8", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", logo: new URL("@/assets/logos/audi.webp", import.meta.url), img: new URL("@/assets/images/car.webp", import.meta.url)},
]

</script>

<style scoped>

</style>