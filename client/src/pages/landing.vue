<template>
    <div class="flex flex-col gap-6">

        <Header />

        <LogosBanner />

        <div>
            <h1 class="text-xl font-bold">Available Cars</h1>
            <p class="text-sm">Wheels that you want</p>
        </div>

        <VehicleContainer />

    </div>
</template>

<script setup>
import Header from "@/layouts/header/header.vue"
import LogosBanner from "@/components/logos_banner.vue"
import VehicleContainer from "@/components/vehicle_container.vue"
</script>