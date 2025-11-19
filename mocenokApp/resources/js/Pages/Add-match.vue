<script>
import MainLayout from "../Layouts/MainLayout.vue";
import AddMatchForm from "../Components/add-match-form.vue";


export default {
    name: "Add-match",
    components: {AddMatchForm, MainLayout}
}

</script>

<template>
    <main-layout>
        <main class="mt-[104px]">
            <add-match-form/>
        </main>
    </main-layout>

</template>

<style scoped>

</style>
