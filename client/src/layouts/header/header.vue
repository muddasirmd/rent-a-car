<template>
    
    <div class="flex justify-between items-center py-4 w-full h-12 md:h-20 border-b">

        <router-link to="/" class="">
            <img :src="logo" class="cursor-pointer" alt="app-logo">
        </router-link>

        <div class="flex md:hidden cursor-pointer relative">

            <svg class="w-4 h-4 fill-orange-500" @click="toggleNav = !toggleNav" version="1.1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v-0.25c0-0.413-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.337-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9zM4 4v-2h2v2h-2zM13 6.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.412 0-0.75 0.338-0.75 0.75v0.25h-9v2h9v0.25c0 0.412 0.338 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h3v-2h-3v-0.25zM10 9v-2h2v2h-2zM7 11.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.338-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9v-0.25zM4 14v-2h2v2h-2z"></path>
            </svg>

            <div v-if="toggleNav" class="flex md:hidden justify-center absolute top-0 right-4 h-48 px-4 rounded-lg border bg-white">
                
                <div class="flex flex-col items-center justify-center gap-4 py-4">
                    <div @click="showModal" class="flex text-xs font-light gap-6 py-2 px-8 text-nowrap items-center rounded-full border cursor-pointer">
                        <h1>Apply Filters</h1>
                    </div>

                    <div class="flex items-center w-full">
                        <div class="flex justify-center w-full px-2 py-2 rounded-full text-xs font-light text-white bg-orange-500">
                            <h1>Rent your car</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        

        <div @click="showModal" class="hidden md:flex h-full text-sm font-light gap-14 px-8 items-center rounded-full border cursor-pointer hover:shadow-xl transition-shadow">
            <div>
                <h1>Add Brand</h1>
            </div>
            <div>
                <h1>Model Year</h1>
            </div>
            <div>
                <h1>Add Price</h1>
            </div>
            <div>
                <svg class="w-4 h-4 fill-orange-500" version="1.1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v-0.25c0-0.413-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.337-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9zM4 4v-2h2v2h-2zM13 6.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.412 0-0.75 0.338-0.75 0.75v0.25h-9v2h9v0.25c0 0.412 0.338 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h3v-2h-3v-0.25zM10 9v-2h2v2h-2zM7 11.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.338-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9v-0.25zM4 14v-2h2v2h-2z"></path>
                </svg>
            </div>
        </div>

        <div class="hidden md:flex h-full items-center">
            <div class="px-4 py-3 rounded-full text-sm font-light text-white bg-orange-500">
                <h1>Rent your car</h1>
            </div>
        </div>

        <Teleport to="#app">
            <SearchModal ref="searchModal" />
        </Teleport>
    </div>
        
</template>

<script >
import SearchModal from "@/modals/searchModal.vue"
import { ref } from "vue";

export default {
  components: {
    SearchModal
  },
  setup() {

    const logo = new URL("@/assets/logos/car-logo.webp", import.meta.url);

    let toggleNav = ref(false);

    const searchModal = ref(null)
    function showModal(){
        console.log(searchModal.value)
        searchModal.value.openModal()
    }
    return { 
        logo,
        toggleNav,
        searchModal,
        showModal,
     };
}
}
</script>

<style scoped>

</style>