<script setup>
import {ref, computed} from 'vue'
import {useTopBar} from '../composables/UseTopBar'

const {isTopBarHidden} = useTopBar()

const isMobileMenuOpen = ref(false)
const isTopBarVisible = ref(true)

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const navbarTopClass = computed(() => {
    return isTopBarVisible.value ? 'top-10' : 'top-0'
})
</script>

<template>
    <header :class="[
    'fixed left-0 w-full bg-white shadow-md z-50 transition-all duration-300', isTopBarHidden ? 'top-0' : 'top-10']">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">

            <div class="flex h-16 items-center justify-between">

                <!--Logo-->
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block" href="#">
                        <span class="sr-only">Home</span>
                        <img src="/img/Logo.svg" alt="HK junior Močenok Logo" class="h-20 w-auto"/>
                    </a>
                </div>

                <!--Desktop Navbar-->
                <div class="hidden md:block ">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-xl font-semibold">

                            <li>
                                <a class="relative text-jblue-700 transition-colors hover:text-jblue-400 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-gold-500 after:transition-all after:duration-300 hover:after:w-full"
                                   href="#"> Aktuality </a>
                            </li>

                            <li>
                                <a class="relative text-jblue-700 transition-colors hover:text-jblue-400 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-gold-500 after:transition-all after:duration-300 hover:after:w-full"
                                   href="#"> História </a>
                            </li>

                            <li>
                                <a class="relative text-jblue-700 transition-colors hover:text-jblue-400 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-gold-500 after:transition-all after:duration-300 hover:after:w-full"
                                   href="#"> Galéria </a>
                            </li>

                            <li>
                                <a class="relative text-jblue-700 transition-colors hover:text-jblue-400 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-gold-500 after:transition-all after:duration-300 hover:after:w-full"
                                   href="#"> Sponzori </a>
                            </li>

                            <li>
                                <a class="relative text-jblue-700 transition-colors hover:text-jblue-400 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-gold-500 after:transition-all after:duration-300 hover:after:w-full"
                                   href="#"> Kontakt </a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!--burger menu-->
                <div class="block md:hidden">
                    <button
                        @click="toggleMobileMenu"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        :aria-expanded="isMobileMenuOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!--Mobile Menu-->
        <div v-show="isMobileMenuOpen" class="md:hidden">
            <nav aria-label="Mobile">
                <ul class="flex flex-col gap-4 py-4 text-base text-center font-semibold">

                    <li>
                        <a class="text-jblue-500 transition hover:text-blue-500/75" href="#"> Aktuality </a>
                    </li>

                    <li>
                        <a class="text-jblue-500 transition hover:text-blue-500/75" href="#"> História </a>
                    </li>

                    <li>
                        <a class="text-jblue-500 transition hover:text-blue-500/75" href="#"> Galéria </a>
                    </li>

                    <li>
                        <a class="text-jblue-500 transition hover:text-blue-500/75" href="#"> Sponzori </a>
                    </li>

                    <li>
                        <a class="text-jblue-500 transition hover:text-blue-500/75" href="#"> Kontakt </a>
                    </li>

                </ul>
            </nav>
        </div>

    </header>

</template>
