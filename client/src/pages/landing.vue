<template>
    <div class="flex flex-col gap-6 md:my-4 relative">

        <Header />

        <LogosBanner />

        <Suspense>
            <template #default>
                <VehicleContainer />
            </template>
            <template #fallback>
                Loading...
            </template>
        </Suspense>

    </div>
</template>

<script setup>
import Header from "@/layouts/header/header.vue"
import LogosBanner from "@/components/logos_banner.vue"
import VehicleContainer from "@/components/vehicle_container.vue"
import { onErrorCaptured, ref } from "vue";

const errorMsg = ref(null)
// To capture any error in child componenets
onErrorCaptured(() => {
    errorMsg.value = "Something went wrong in Children Components"
    console.log("Something went wrong in Children Components")
})

</script>