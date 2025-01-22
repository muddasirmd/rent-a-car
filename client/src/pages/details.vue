<template>

  <Suspense>
    <template #default>
      <div class="flex flex-col gap-6 my-4">

        <Header />


        <div class="flex justify-between">

          <div class="flex flex-col justify-between">
            <div class="text-lg md:text-2xl font-bold">{{ car.name }}</div>
            <div class="text-[#888888]">{{ car.model_year ?? "Year" }}</div>
          </div>

          <div class="flex flex-col justify-between items-end">
            <div class=""><img :src="car.brand.image" alt="logo" class=""></div>
            <div class="text-sm">{{ car.brand.name }}</div>
          </div>
        </div>


        <div class="flex flex-col md:flex-row gap-4 md:gap-0">

          <div class="flex flex-col gap-4 justify-center md:w-1/2 md:p-6">

            <img class="md:px-6" :src="car.image" alt="car-img" />

            <div class="flex justify-between">
              <div class="flex gap-2 border border-gray-400 rounded-xl py-2 px-4">

                <img class="rounded-full" :src="car.owner.image" alt="owner-img">

                <div class="flex flex-col">
                  <h1>{{ car.owner.name }}</h1>
                  <p class="text-xs text-[#888888]">Owner</p>
                </div>

              </div>

              <div class="flex items-center">
                <svg class="w-5 h-5 cursor-pointer fill-neutral-600 hover:fill-neutral-400" stroke="currentColor"
                  fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                  </path>
                </svg>
              </div>
            </div>
          </div>

          <div class="flex flex-col justify-center gap-2 md:gap-4 md:w-1/2">

            <div class="flex flex-col md:gap-1">
              <h1 class="text-xl md:text-2xl font-bold">Description</h1>
              <h1 class="text-sm md:text-base">{{ car.short_description }}</h1>
            </div>

            <div class="flex flex-col gap-2 md:gap-4">
              <h1 class="text-lg font-semibold">Features</h1>
              <div class="flex justify-between">
                <div class="flex flex-col items-center gap-2">
                  <div>
                    <svg class="w-4 h-4 fill-[#6b6b6b]" stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M149.6 41L42.88 254.4c23.8 24.3 53.54 58.8 78.42 97.4 24.5 38.1 44.1 79.7 47.1 119.2h270.3L423.3 41H149.6zM164 64h230l8 192H74l90-192zm86.8 17.99l-141 154.81L339.3 81.99h-88.5zM336 279h64v18h-64v-18z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-xs md:text-sm text-[#6b6b6b]">{{ car.doors }} Doors</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                  <div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                      class="w-4 h-4 text-sky-500" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-xs md:text-sm text-[#6b6b6b]">{{ car.seats }} Seats</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                  <div>
                    <svg class="w-4 h-4 fill-orange-600" stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 16 16" color="orange" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-xs md:text-sm text-[#6b6b6b]">{{ car.speed }}</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                  <div>
                    <svg class="w-4 h-4 fill-[#6b6b6b]" stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M256 25C128.3 25 25 128.3 25 256s103.3 231 231 231 231-103.3 231-231S383.7 25 256 25zm0 30c110.9 0 201 90.1 201 201s-90.1 201-201 201S55 366.9 55 256 145.1 55 256 55zM80.52 203.9c-4.71 19.2-7.52 37-7.52 54 144.7 30.3 121.5 62.4 148 177.8 11.4 2.1 23 3.3 35 3.3s23.6-1.2 35-3.3c26.5-115.4 3.3-147.5 148-177.8-.6-18.9-3-38.4-7.5-54C346.7 182.7 301.1 172 256 172c-45.1 0-90.7 10.7-175.48 31.9zM256 183c40.2 0 73 32.8 73 73s-32.8 73-73 73-73-32.8-73-73 32.8-73 73-73zm0 18c-30.5 0-55 24.5-55 55s24.5 55 55 55 55-24.5 55-55-24.5-55-55-55z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-xs md:text-sm text-[#6b6b6b]">{{ car.mode }}</p>
                </div>
              </div>
            </div>

            <hr class="my-2">

            <div class="flex px-6 text-sm md:text-base">
              {{ car.long_description }}
            </div>

          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-2 md:gap-0">
          <div class="flex flex-col md:w-1/2 gap-2 md:gap-4">
            <h1 class="font-medium md:font-semibold">To rent this car above, remember;</h1>
            <div class="flex flex-col gap-2 p-4 rounded-md text-xs md:text-sm italic bg-gray-100 text-[#888888]">
              <p>- Return the car on the specified date and time to the agreed drop-off location.</p>
              <p>- Ensure the vehicle is in the same condition as when you received it.</p>
              <p>- Refuel the car, following the agreed-upon fuel policy.</p>
            </div>


            <div class="flex gap-2 md:gap-4">
              <p class="flex items-center text-2xl md:text-3xl font-medium">=</p>
              <h1 class="flex items-center text-3xl md:text-5xl font-semibold">$ {{ car.rent }}</h1>
              <p class="flex items-end text-xs md:text-sm text-[#888888]">per day</p>
            </div>

          </div>

          <div class="flex md:w-1/2 px-6">

              <VDatePicker 
                borderless 
                expanded 
                :min-date="new Date()"
                color="orange"
                :attributes="attrs"
                v-model.range="range"
                mode="date"
                />
            

          </div>
        </div>

        <div class="flex justify-between text-lg md:text-xl font-medium md:font-semibold">
          <h1>Total</h1>
          <h1>$ {{ car.rent * 2 }}</h1>
        </div>

        <div class="flex justify-end">
          <button class="rounded-md py-2 px-4 md:px-6 text-white bg-orange-500 hover:bg-orange-400">Rent The
            Car</button>
        </div>

        <div class="flex flex-col gap-2 md:w-1/2">

          <textarea class="h-24 p-2 resize-none rounded-md border border-black"></textarea>

          <div class="flex justify-end">
            <button class="flex w-fit rounded-md py-2 px-6 text-white bg-orange-500 hover:bg-orange-400">Send</button>
          </div>

          <h1 class="text-xl md:text-2xl font-medium md:font-semibold">Reviews</h1>
        </div>

        <div>
          <div v-for="i in 5" :key="i" class="flex flex-col gap-1 w-1/2 py-2 border-b border-black">
            <div class="flex items-center gap-4 text-[#888888]">
              <h1 class="">Johnny</h1>
              <span class="text-xs">1st Jan 2024</span>
            </div>
            <p>Amazing Experience</p>
          </div>
        </div>


      </div>
    </template>

    <template #fallback>
      Loading...
    </template>

  </Suspense>

</template>

<script>
import Header from "@/layouts/header/header.vue";
import { inject, onMounted, ref } from "vue";
import { useRoute } from "vue-router";


export default {
  components: {
    Header
  },
  async setup() {

    const route = useRoute();
    const endpoints = inject('endpoints');

    // Accessing route parameters (e.g., /cars/:id)
    const carId = route.params.id;
    const car = ref({ brand: {}, owner: {} })

    onMounted(async () => {
      // Get car data from API
      car.value = await endpoints.getCar(carId);
    })

    // Calendar Attributes
    const attrs = ref([
      {
        key: 'today',
        bar: {
          style: {
            margin: "0 35px 5px 35px",
            backgroundColor: "#fff"
          },
        },
        
        highlight: {
          color: "orange",
          fillMode: "solid",
          style:{
            width: "100%",
            height: "100%"
          }
        },
        dates: new Date()
      },
    ]);

    const range = ref({
      start: new Date(),
      end: new Date(),
    });

    // const car = {name: "Audi", doors: 4, seats: 4, speed: "250 km/h", mode: "Auto", 
    //               brand: {
    //                 name:"Audi",
    //                 image: new URL("@/assets/logos/audi.webp", import.meta.url)
    //               }, 
    //               image: new URL("@/assets/images/car.webp", import.meta.url),
    //               features: ["Air Conditioning", "Power Steering", "ABS Brakes", "Fuel Policy: Full to Full", "Mileage allowance: unlimited"]
    // }

    
    return {
      // car: car.value,
      car,
      attrs,
      range
    };
  }
}
</script>

<style scoped></style>