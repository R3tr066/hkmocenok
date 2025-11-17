<script setup>
import MainLayout from '../Layouts/MainLayout.vue'
</script>

<template>
    <MainLayout>
        <main class="mt-[104px]">

            <!--carousel-->
            <div id="home-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../../../public/img/home-carousel/t1.jpg"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../../../public/img/home-carousel/t2.jpg"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../../../public/img/home-carousel/t3.jpg"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
            </div>

        </main>
    </MainLayout>
</template>
