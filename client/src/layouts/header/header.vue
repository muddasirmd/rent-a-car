<template>
    
    <div class="flex justify-between items-center py-4 w-full h-24 border-b">
        <div class="">
            <img :src="logo">
        </div>
        <div class="flex h-full text-sm gap-5 px-4 items-center rounded-full border ">
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
                <h1>Settings Icon</h1>
            </div>
        </div>
        <div class="flex h-full items-center bg-blue-500">Button + Login/Signup</div>
    </div>
        
</template>

<script setup>

const logo = new URL("@/assets/logos/audi.webp", import.meta.url)

</script>

<style scoped>

</style>