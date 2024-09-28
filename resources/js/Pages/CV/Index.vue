<script setup lang="ts">

import { ref } from 'vue';
import Pill from "@/Components/Unique/Pill.vue";
import Education from "@/Pages/Education/Index.vue";
import Employers from "@/Pages/Employers/Index.vue";

const props = defineProps<{
    degrees: Degree[];
    employers: Employer[];
}>();

const selectedPill = ref('All');

const handlePillClick = (pillName: string) => {
    selectedPill.value = pillName;
};

</script>

<template>
    <div class="my-8">
        <pill name="All" pillColour="green-pill" @pill-click="handlePillClick"/>
        <pill name="Employers" pillColour="green-pill" @pill-click="handlePillClick"/>
        <pill name="Education" pillColour="green-pill" @pill-click="handlePillClick"/>
    </div>

    <div class="content">
        <Employers v-if="selectedPill === 'All' || selectedPill === 'Employers'" :employers="props.employers" />
        <Education v-if="selectedPill === 'All' || selectedPill === 'Education'" :degrees="props.degrees" />
    </div>
</template>

<style scoped>

</style>
