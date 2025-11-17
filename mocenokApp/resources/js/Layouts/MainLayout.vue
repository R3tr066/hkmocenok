<script setup>
import Navbar from '@/Components/Navbar.vue'
import Topbar from "../Components/Topbar.vue";
</script>

<template>
    <div>
        <Topbar />
        <Navbar />

        <main>
            <slot/>
        </main>
    </div>
</template>
