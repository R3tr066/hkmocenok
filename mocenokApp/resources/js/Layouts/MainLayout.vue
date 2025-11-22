<script setup>
import Navbar from '@/Components/Navbar.vue'
import Topbar from "../Components/Topbar.vue";
import Footer from "../Components/Footer.vue";
</script>

<template>
    <div>
        <Topbar/>
        <Navbar/>

        <main>
            <slot/>
        </main>
        <Footer/>
    </div>
</template>
