<template>
    <div class="flex flex-col gap-6 my-4 relative">

        <Header />

        <LogosBanner />

        <VehicleContainer />

    </div>
</template>

<script setup>
import Header from "@/layouts/header/header.vue"
import LogosBanner from "@/components/logos_banner.vue"
import VehicleContainer from "@/components/vehicle_container.vue"
</script>