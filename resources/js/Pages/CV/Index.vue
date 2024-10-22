<script setup lang="ts">

import { ref } from 'vue';
import Pill from "@/Components/Unique/Pill.vue";
import Education from "@/Pages/Education/Index.vue";
import Employers from "@/Pages/Employers/Index.vue";
import About from "@/Pages/CV/Components/About.vue";
import {Skill} from "@/types/Skill";
import PageLayout from "@/Layouts/PageLayout.vue";


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
    <PageLayout
        title="RHEANNE"
        pageIntroduction="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sem nec justo pretium gravida. Vivamus diam lorem, accumsan ac laoreet quis, tristique ac ex. Curabitur egestas nisl velit, facilisis ornare metus vulputate non. In hac habitasse platea dictumst."
    >
            <div class="my-6">
                <pill name="All" pillColour="selected-pill" @pill-click="handlePillClick"/>
                <pill name="About" pillColour="secondary-pill" @pill-click="handlePillClick"/>
                <pill name="Employers" pillColour="secondary-pill" @pill-click="handlePillClick"/>
                <pill name="Education" pillColour="secondary-pill" @pill-click="handlePillClick"/>
            </div>

            <div class="content">
                <About v-if="selectedPill === 'All' || selectedPill === 'About'" :professional_summaries="props.professional_summaries" />
                <Employers v-if="selectedPill === 'All' || selectedPill === 'Employers'" :employers="props.employers" :skills="props.skills" />
                <Education v-if="selectedPill === 'All' || selectedPill === 'Education'" :degrees="props.degrees" />
            </div>
    </PageLayout>
</template>

<style scoped>

</style>
