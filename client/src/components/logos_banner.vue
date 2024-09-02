<template>
    <div class="flex flex-wrap gap-2">
        <div v-for="(c, key) in companies" :key="key" class="flex flex-col gap-1 grow ">
            
            <img class="w-fit h-fit" :src="c.logo">
            <h1 class="">{{ c.name }}</h1>
        </div>
    </div>
        
</template>

<script setup>

let companies = [
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    {name: "Audi", logo: new URL("@/assets/logos/audi.webp", import.meta.url)},
    ]
</script>

<style scoped>

</style>