<script setup lang="ts">

import CVHeading from "@/Components/CVHeading.vue";
import {Degree} from "@/types/Degree";
import {ProfessionalSummary} from "@/types/ProfessionalSummary";

const props = defineProps<{
    professional_summaries?: ProfessionalSummary;
}>();
</script>

<template>
    <!-- Experience Card -->
    <div class="bg-white rounded-md shadow-2xl p-8 mb-8">
        <!-- Experience Heading -->
        <CVHeading title="About" icon="person" />

        <!-- Experience Content -->
        <div class="mt-4">
            <p>
                {{ props.professional_summaries?.professional_summary_text }}
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>
