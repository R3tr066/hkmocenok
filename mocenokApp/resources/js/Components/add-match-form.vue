<script setup>
import {useForm} from '@inertiajs/vue3'
import {ref} from "vue";

const showSucces = ref(false);
const showError = ref(false);

const form = useForm({
    home_team: null,
    away_team: null,
    home_score: null,
    away_score: null,
    match_date: null,
    location: null,
    competition: null,
    season: null,
    status: 'scheduled',
    notes: null
})

const submit = () => {
    console.log('Submitting form data:', form.data())
    form.post('/add-match', {
        onSuccess: () => {
            console.log('Success!')
            form.reset()
            showSucces.value = true
        },
        onError: (errors) => {
            console.log('Errors:', errors)
            showError.value = true
        }
    })
}
</script>

<template>
    <form @submit.prevent="submit">
        <div class="grid gap-6 mb-6 md:grid-cols-2 md:gap-6 px-50 py-2">
            <!--Teams-->
            <div>
                <label for="home_team" class="block mb-2.5 text-sm font-medium text-heading">Home team *</label>
                <input type="text" v-model="form.home_team"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="HK močenok" required/>
            </div>

            <div>
                <label for="away_team" class="block mb-2.5 text-sm font-medium text-heading">Away team *</label>
                <input type="text" v-model="form.away_team"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="Tatran Prešov" required/>
            </div>

            <!--Score-->
            <div>
                <label for="home_score" class="block mb-2.5 text-sm font-medium text-heading">Home score</label>
                <input type="number" v-model="form.home_score"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="3" min="0"/>
            </div>

            <div>
                <label for="away_score" class="block mb-2.5 text-sm font-medium text-heading">Away score</label>
                <input type="number" v-model="form.away_score"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="2" min="0"/>
            </div>

            <!--Match Details-->
            <div>
                <label for="match_date" class="block mb-2.5 text-sm font-medium text-heading">Match date *</label>
                <input type="date" v-model="form.match_date"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       required>
            </div>

            <div>
                <label for="location" class="block mb-2.5 text-sm font-medium text-heading">Location</label>
                <input type="text" v-model="form.location"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="Bratislava"/>
            </div>

            <!--Competition & Season-->
            <div>
                <label for="competition" class="block mb-2.5 text-sm font-medium text-heading">competition</label>
                <input type="text" v-model="form.competition"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="Slovak Extraliga"/>
            </div>

            <div>
                <label for="season" class="block mb-2.5 text-sm font-medium text-heading">Season</label>
                <input type="text" v-model="form.season"
                       class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                       placeholder="2024/2025"/>
            </div>
            <div>
                <label for="status" class="block mb-2.5 text-sm font-medium text-heading">Status</label>
                <select name="status" v-model="form.status">
                    <option value="scheduled">Scheduled</option>
                    <option value="finished">Finished</option>
                    <option value="canceled">Canceled</option>
                </select>
            </div>

            <!--Notes (full width)-->
            <div class="md:col-span-2">
                <label for="notes" class="block mb-2.5 text-sm font-medium text-heading">Notes</label>
                <textarea v-model="form.notes" rows="3"
                          class="bg-white border border-black rounded-md text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                          placeholder="Additional notes about the match..."></textarea>
            </div>
        </div>
        <button type="submit" class="mx-50 p-2 text-black bg-green-600 rounded-md">Add Match</button>
    </form>

    <!--Succes alert-->
    <div v-if="showSucces"
         class="flex items-start sm:items-center p-4 my-4 text-sm text-fg-success-strong rounded-base bg-success-medium border border-success-subtle"
         role="alert">
        <svg class="w-4 h-4 me-2 shrink-0 mt-0.5 sm:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
        <p><span class="font-medium me-1">Match added sucessfully</span></p>
    </div>

    <!--Error alert-->
    <div v-if="showError"
         class="flex items-start sm:items-center p-4 mb-4 text-sm text-fg-danger-strong rounded-base bg-danger-soft border border-danger-subtle"
         role="alert">
        <svg class="w-4 h-4 me-2 shrink-0 mt-0.5 sm:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
        <p><span class="font-medium me-1">Submit was unsucessfull</span> Check logs to see error or contact admin</p>
    </div>

</template>

<style scoped>
</style>
