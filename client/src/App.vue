<template>
  <div class="mx-5">

    <Suspense>
      <router-view></router-view>
    </Suspense>
    

  </div>

</template>

<script setup>

import { Suspense } from 'vue';

</script>

<style scoped>

</style>
