<script>
export default {
    name: "add-match-form"
}
</script>

<template>
    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2 md:gap-6 px-150 py-2">

            <!--Teams-->
            <div>
                <label for="home_team" class="block mb-2.5 text-sm font-medium text-heading">Home team</label>
                <input type="text" id="home_team"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="HK močenok" required/>
            </div>

            <div>
                <label for="away_team" class="block mb-2.5 text-sm font-medium text-heading">Away team</label>
                <input type="text" id="away_team"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="Tatran Prešov" required/>
            </div>

            <!--Score-->
            <div>
                <label for="home_score" class="block mb-2.5 text-sm font-medium text-heading">Home score</label>
                <input type="number" id="home_score"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="3"/>
            </div>

            <div>
                <label for="away_score" class="block mb-2.5 text-sm font-medium text-heading">Away score</label>
                <input type="number" id="away_score"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="2"/>
            </div>
            <!--Other informations-->
            <div>
                <label for="match_date" class="block mb-2.5 text-sm font-medium text-heading">Match date</label>
                <input type="date" id="match_date" class="bg-white border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body">
            </div>

            <div>
                <label for="location" class="block mb-2.5 text-sm font-medium text-heading">Location</label>
                <input type="text" id="location"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="Bratislava"/>
            </div>
        </div>
        <button type="submit" class="text-black bg-gold-700 ml-150 p-2 rounded-md">Add match</button>
    </form>
</template>

<style scoped>

</style>
