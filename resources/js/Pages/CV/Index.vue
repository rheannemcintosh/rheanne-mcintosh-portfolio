<script setup lang="ts">

import { ref } from 'vue';
import Pill from "@/Components/Unique/Pill.vue";
import Education from "@/Pages/Education/Index.vue";
import Employers from "@/Pages/Employers/Index.vue";
import About from "@/Pages/CV/Components/About.vue";
import Navigation from "@/Components/Unique/Navigation.vue";
import StandardLayout from "@/Layouts/StandardLayout.vue";
import {Skill} from "@/types/Skill";

const props = defineProps<{
    professional_summaries?: ProfessionalSummary;
    degrees: Degree[];
    employers: Employer[];
    skills: Record<number, Skill>;
}>();

const selectedPill = ref('All');

const handlePillClick = (pillName: string) => {
    selectedPill.value = pillName;
};

</script>

<template>
    <StandardLayout>
        <div class="m-4 max-w-3xl mx-auto">
            <div class="my-8">
                <pill name="All" pillColour="green-pill" @pill-click="handlePillClick"/>
            <PageHeading title="CV" />
                <pill name="About" pillColour="green-pill" @pill-click="handlePillClick"/>
                <pill name="Employers" pillColour="green-pill" @pill-click="handlePillClick"/>
                <pill name="Education" pillColour="green-pill" @pill-click="handlePillClick"/>
            </div>

            <div class="content">
                <About v-if="selectedPill === 'All' || selectedPill === 'About'" :professional_summaries="props.professional_summaries" />
                <Employers v-if="selectedPill === 'All' || selectedPill === 'Employers'" :employers="props.employers" :skills="props.skills" />
                <Education v-if="selectedPill === 'All' || selectedPill === 'Education'" :degrees="props.degrees" />
            </div>
        </div>
    </StandardLayout>
</template>

<style scoped>

</style>
