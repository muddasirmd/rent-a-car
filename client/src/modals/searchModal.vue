<template>

<div v-if="showModal" class="absolute z-50 overflow-y-hidden flex items-center justify-center h-screen w-full bg-black bg-opacity-50">
    <div class="flex flex-col p-6 w-[30rem] rounded-lg bg-white">
        
        <div class="flex items-center border-b pb-5">
            
            <svg class="h-3 w-3 cursor-pointer fill-black" @click="closeModal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 490 490" xml:space="preserve">
                <polygon points="456.851,0 245,212.564 33.149,0 0.708,32.337 212.669,245.004 0.708,457.678 33.149,490 245,277.443 456.851,490   489.292,457.678 277.331,245.004 489.292,32.337 "/>
            </svg>
            
            <h1 class="flex mx-auto text-xl font-semibold">Filter Your Search</h1>
        </div>
        
        <form class="flex flex-col gap-5 py-4">
            
            <div class="flex flex-col gap-2">
                <label for="price" class="text-lg font-medium">Price</label>
                <input type="number" name="price" min="1" max="1000000"
                    class="peer px-3 py-4 w-full h-full bg-transparent text-blue-gray-700 outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 text-sm rounded-md border-blue-gray-200 focus:border-gray-900"
                    placeholder="Enter your price" />
                
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="brand" class="text-lg font-medium">Select Year</label>
                <div class="dropdown relative">
                    <button @click="toggleYear = !toggleYear" ref="yearDropDownToggler" class="flex items-start border cursor-pointer text-base rounded-lg w-full py-3 px-2 border-gray-300 text-gray-600 focus:outline-none">
                        Select Year
                    </button>
        
                    <div v-if="toggleYear" ref="yearContainer" class="absolute w-full max-h-screen z-50 py-4 my-2 overflow-scroll rounded-md flex flex-col gap-2 bg-[#f9f9f9] dropdown-content">
                        
                        <div v-for="year,key in [2024,2023,2022,2021,2020,2019]" :key="key" class="flex p-3 items-center cursor-pointer hover:bg-[#f1f1f1]">
                            
                            
                            <h1 class="font-light">{{ year }}</h1>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="brand" class="text-lg font-medium">Select Brand</label>
                <div class="dropdown relative">
                    <button @click="toggleBrand = !toggleBrand" ref="brandDropDownToggler" class="flex items-start border cursor-pointer text-base rounded-lg w-full py-3 px-2 border-gray-300 text-gray-600 focus:outline-none">
                        Select Brand
                    </button>
        
                    <div v-if="toggleBrand" ref="brandContainer" class="absolute w-full max-h-screen py-4 my-2 overflow-scroll rounded-md flex flex-col gap-2 bg-[#f9f9f9] dropdown-content">
                        
                        <div v-for="brand,key in brandList" :key="key" class="flex gap-2 p-3 items-center cursor-pointer hover:bg-[#f1f1f1]">
                            
                            <img :src="brand.logo" class="w-8" alt="brand-logo">
                            
                            <h1 class="font-light">{{ brand.name }}</h1>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="flex ">
                <button class="flex w-full p-4 text-lg font-medium justify-center rounded-md text-white bg-[#ff6e31] hover:bg-orange-400">
                    <span>Search</span>
                </button>
            </div>
        </form>
    </div>
</div>

</template>

<script>

import { onMounted, ref } from 'vue';
// import Header from "@/layouts/header/header.vue"


export default{

    setup(){

        let toggleBrand = ref(false);
        let toggleYear = ref(false);

        let brandList = [
            {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
            {name: "BMW", logo: new URL("@/assets/logos/bmw-logo.png", import.meta.url)},
            {name: "Cadillac", logo: new URL("@/assets/logos/cadillac-logo.webp", import.meta.url)},
            {name: "Chevrolet", logo: new URL("@/assets/logos/chevrolet-logo.webp", import.meta.url)},
            {name: "Ferrari", logo: new URL("@/assets/logos/ferrari-logo.webp", import.meta.url)},
            {name: "Ford", logo: new URL("@/assets/logos/ford-logo.webp", import.meta.url)},
            {name: "Honda", logo: new URL("@/assets/logos/honda.webp", import.meta.url)},
            {name: "Hyundai", logo: new URL("@/assets/logos/hyundai-logo.webp", import.meta.url)},
            {name: "Kia", logo: new URL("@/assets/logos/kia-logo.webp", import.meta.url)},
            {name: "Lamborghini", logo: new URL("@/assets/logos/lamborghini-logo.webp", import.meta.url)},
            {name: "Mercedes", logo: new URL("@/assets/logos/Mercedes.webp", import.meta.url)},
            {name: "Mitsubishi", logo: new URL("@/assets/logos/mitsubishi-logo.webp", import.meta.url)},
            {name: "Nissan", logo: new URL("@/assets/logos/nissan-logo.webp", import.meta.url)},
            {name: "Peugeot", logo: new URL("@/assets/logos/peugeot-logo.webp", import.meta.url)},
            {name: "Suzuki", logo: new URL("@/assets/logos/suzuki-logo.webp", import.meta.url)},
            {name: "Tesla", logo: new URL("@/assets/logos/tesla-logo.webp", import.meta.url)},
            {name: "Toyota", logo: new URL("@/assets/logos/toyota-logo.webp", import.meta.url)},
            {name: "Volkswagen", logo: new URL("@/assets/logos/volkswagen-logo.webp", import.meta.url)},
        ];

        let showModal = ref(false)

        function openModal() {
            showModal.value = true
            document.body.classList.add('no-scroll')
        }

        function closeModal() {
            showModal.value = false
            document.body.classList.remove('no-scroll')
        }

        const brandContainer = ref(null);
        const brandDropDownToggler = ref(null);        
        
        const yearContainer = ref(null);
        const yearDropDownToggler = ref(null);

        onMounted(() => {
            // Add a click event listener to the document when the component is mounted
            document.addEventListener('click', handleClick);
        });

        function handleClick(event) {
            handleBrandClickOutside(event);
            handleYearClickOutside(event);
        }


        function handleBrandClickOutside(event){
            
            if(brandContainer.value && event.target != brandDropDownToggler.value && ![...brandContainer.value.children].includes(event.target)){
                toggleBrand.value = false;
            }
        }        
        
        function handleYearClickOutside(event){
            
            if(yearContainer.value && event.target != yearDropDownToggler.value && ![...yearContainer.value.children].includes(event.target)){
                toggleYear.value = false;
            }
        }



        return { 
            toggleBrand,
            toggleYear,
            brandList,
            showModal,
            openModal,
            closeModal,
            brandContainer,
            brandDropDownToggler,
            yearContainer,
            yearDropDownToggler,
        }
    }
}

</script>

<style>
/* .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    } */

    /* .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 
            0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    } */

    /* .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    } */
</style>