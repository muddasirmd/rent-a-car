<template>
    <div class="flex flex-wrap gap-2">

        <div v-for="(c, key) in companies" :key="key" class="flex flex-col items-center gap-1 grow basis-16">    
            <img class="w-fit h-fit" :src="c.logo" alt="company-logo">
            <h1 class="text-xs">{{ c.name }}</h1>
        </div>
    </div>
        
</template>

<script setup>

let companies = [
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
    ]
</script>

<style scoped>

</style>