<script>
export default {
    name: "MatchCard",
    props: {
        match: Object
    },
    computed: {
        formattedDate() {
            const date = new Date(this.match.match_date);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}.${month}.${year}`;
        }
    }
}
</script>

<template>
    <a :href="`/match-details/${match.matchId}`"
       class="grid grid-cols-1 grid-rows-3 block max-w-sm p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">

        <div class="m-auto">
            <p class="text-center text-2xl font-medium">{{match.home_team}}  :  {{match.away_team}}</p>
        </div>

        <div class="m-auto">
            <p class="text-center text-2xl font-bold">{{match.home_score}} : {{match.away_score}}</p>
        </div>

        <div>
            <p class="text-2xl text-center font-medium">{{formattedDate}}</p>
        </div>
    </a>
</template>
