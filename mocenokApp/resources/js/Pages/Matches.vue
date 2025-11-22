<script>
import MainLayout from "../Layouts/MainLayout.vue";
import MatchCard from "../Components/MatchCard.vue";

export default {
    name: "Matches",
    components: { MainLayout, MatchCard },
    props: {
        matches: Array
    },
    mounted() {
        console.log('Matches received:', this.matches);
    }
}
</script>

<template>
    <main-layout>
        <main class="mt-[104px]">
            <div v-for="match in matches"  :key="match.id">
                <MatchCard :match="match"/>
            </div>
            <a href="/add-match" class="relative text-black rounded-md bg-gold-500 mt-10 p-2 ">Add match</a>
        </main>

    </main-layout>
</template>

<style scoped>

</style>
