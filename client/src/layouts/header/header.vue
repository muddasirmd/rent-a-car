<template>
    
    <div class="flex flex-col md:flex-row justify-between items-center py-2 md:py-4 w-full md:h-20 border-b">

        <router-link to="/" class="">
            <img :src="logo" class="cursor-pointer" alt="app-logo">
        </router-link>


        <!----------------------------------------------- Mobile Design => Start ---------------------------------------------->

        <div class="flex md:hidden items-center justify-between gap-2 w-full mt-3 cursor-pointer">

            <div class="flex w-full justify-between items-center border rounded-full p-3 shadow-sm" @click="showModal">
                
                <h1 class=" ">Search</h1>

                <svg class="w-4 h-4 fill-orange-500" version="1.1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v-0.25c0-0.413-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.337-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9zM4 4v-2h2v2h-2zM13 6.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.412 0-0.75 0.338-0.75 0.75v0.25h-9v2h9v0.25c0 0.412 0.338 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h3v-2h-3v-0.25zM10 9v-2h2v2h-2zM7 11.75c0-0.412-0.338-0.75-0.75-0.75h-2.5c-0.413 0-0.75 0.338-0.75 0.75v0.25h-3v2h3v0.25c0 0.412 0.337 0.75 0.75 0.75h2.5c0.412 0 0.75-0.338 0.75-0.75v-0.25h9v-2h-9v-0.25zM4 14v-2h2v2h-2z"></path>
                </svg>

            </div>
            
            <div class="flex items-center grow-1 p-1 border rounded-full cursor-pointer relative" @click="showNavDropDown = !showNavDropDown">

                <svg class="w-10 h-10 fill-slate-300" viewBox="0 0 512 512"><path d="M256 73.825a182.175 182.175 0 1 0 182.18 182.18A182.177 182.177 0 0 0 256 73.825zm0 71.833a55.05 55.05 0 1 1-55.054 55.046A55.046 55.046 0 0 1 256 145.658zm.52 208.723h-80.852c0-54.255 29.522-73.573 48.885-90.906a65.68 65.68 0 0 0 62.885 0c19.363 17.333 48.885 36.651 48.885 90.906z" data-name="Profile"/>
                </svg>

                <div v-show="showNavDropDown" class="flex absolute top-12 right-0 border-2 rounded-md items-center shadow-lg h-16 text-sm font-medium p-2 bg-white">
                    <div class="">
                        <h1>Logout</h1>
                    </div>
                </div>

            </div>


        </div>

        <!-------------------------------------------- Bottom Menu  ---------------------   ----------------------->
        <div class="fixed md:hidden bottom-0 w-full text-xs text-white bg-gray-900">
            <div class="flex justify-between p-2">

                <div class="flex flex-col items-center justify-center gap-1 text-[#ff6e31]">
                
                    <svg class="w-4 h-4 fill-orange-500" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M1016.7 513.36L536.331 10.192a31.924 31.924 0 0 0-23.088-9.84 32.038 32.038 0 0 0-23.088 9.84L7.307 513.344c-12.24 12.752-11.808 32.992.944 45.248 12.752 12.224 32.992 11.872 45.248-.944l43.007-44.832v478.832c0 17.68 14.336 32 32 32h223.552c17.632 0 31.936-14.256 32-31.905l1.008-319.664h254.992v319.568c0 17.68 14.32 32 32 32H895.53c17.68 0 32-14.32 32-32V512.655l42.992 45.04a31.997 31.997 0 0 0 23.09 9.84c7.967 0 15.967-2.944 22.16-8.944 12.736-12.224 13.152-32.48.928-45.232zm-153.165-58.544v504.831H704.063V640.095c0-17.68-14.32-32-32-32h-318.88c-17.632 0-31.936 14.256-32 31.904l-1.008 319.664H160.511V454.815c0-2.64-.416-5.168-1.008-7.632L513.263 78.56l351.424 368.208c-.688 2.592-1.152 5.264-1.152 8.048z"></path>
                    </svg>
                    <h1 class="font-medium">Home</h1>
                </div>

                <div class="flex flex-col items-center justify-center gap-1">
                    
                    <svg class="w-4 h-4 fill-white active:fill-orange-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"></path>
                    </svg>
                    <h1>My Cars</h1>
                </div>

                <div class="flex flex-col items-center justify-center gap-1">
                
                    <svg class="w-4 h-4 fill-white active:fill-orange-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"></path><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"></path>
                    </svg>
                    <h1>Bookmarks</h1>
                </div>

                <div class="flex flex-col items-center justify-center gap-1">
                    
                    <svg class="w-4 h-4 fill-white active:fill-orange-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <h1>Rents</h1>
                </div>                
                
                <div class="flex flex-col items-center justify-center gap-1">
                    
                    <svg class="w-4 h-4 fill-white active:fill-orange-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <h1>Rentals</h1>
                </div>

                <div class="flex flex-col items-center justify-center gap-1">
                    
                    <svg class="w-4 h-4 fill-white active:fill-orange-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path>
                    </svg>
                    <h1>Profile</h1>
                </div>

            </div>

        </div>

        <!----------------------------------------------- Mobile Design => End ---------------------------------------------->


        <!----------------------------------------------- Desktop Design => Start  ---------------------------------------------->
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

        
        <div class="hidden md:flex items-center gap-2">
            
            <div class="hidden md:flex h-full items-center">
                <div class="px-4 py-3 rounded-full text-sm font-light text-white bg-orange-500">
                    <h1>Rent your car</h1>
                </div>
            </div>

            <div class="flex items-center gap-1 p-2 border rounded-full cursor-pointer relative" @click="showNavDropDown = !showNavDropDown">
                <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 5H0V4h16v1zm0 8H0v-1h16v1zm0-4.008H0V8h16v.992z"></path>
                </svg>

                <svg class="w-10 h-10 fill-slate-300" viewBox="0 0 512 512"><path d="M256 73.825a182.175 182.175 0 1 0 182.18 182.18A182.177 182.177 0 0 0 256 73.825zm0 71.833a55.05 55.05 0 1 1-55.054 55.046A55.046 55.046 0 0 1 256 145.658zm.52 208.723h-80.852c0-54.255 29.522-73.573 48.885-90.906a65.68 65.68 0 0 0 62.885 0c19.363 17.333 48.885 36.651 48.885 90.906z" data-name="Profile"/>
                </svg>

                <div v-show="showNavDropDown" class="absolute top-14 right-0 flex flex-col gap-4 shadow-lg font-medium p-4 w-60 whitespace-nowrap border-2 rounded-md bg-white">
                    <div class="">
                        <h1>My Bookmarks</h1>
                    </div>                   
                    <div class="">
                        <h1>My Rents</h1>
                    </div>
                    <div class="">
                        <h1>My Rentals</h1>
                    </div>  
                    <div class="">
                        <h1>My Cars</h1>
                    </div> 
                    <div class="">
                        <h1>My Profile</h1>
                    </div>                   
                    <div class="">
                        <h1>Logout</h1>
                    </div>
                </div>

            </div>

        </div>

<!----------------------------------------------- Desktop Design => End  ---------------------------------------------->        

        
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

    let showNavDropDown = ref(false);

    const searchModal = ref(null)
    function showModal(){
        searchModal.value.openModal()
    }
    return { 
        logo,
        showNavDropDown,
        searchModal,
        showModal,
     };
}
}
</script>

<style scoped>

</style>