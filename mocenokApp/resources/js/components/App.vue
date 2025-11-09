<script setup>
import {onMounted} from 'vue';
import {initFlowbite} from 'flowbite';
import Navbar from "./Navbar.vue";

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <div>
            <Navbar/>
        </div>
    </div>

</template>

<style scoped>
</style>
