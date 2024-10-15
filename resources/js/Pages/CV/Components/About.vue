<script setup lang="ts">

import CVHeading from "@/Components/CVHeading.vue";
import {Degree} from "@/types/Degree";
import {ProfessionalSummary} from "@/types/ProfessionalSummary";
import Card from "@/Components/Cards/Card.vue";

const props = defineProps<{
    professional_summaries?: ProfessionalSummary;
}>();
</script>

<template>

    <!-- Experience Card -->
    <Card>
        <!-- Experience Heading -->
        <CVHeading title="About" icon="person" />

        <!-- Experience Content -->
        <div class="mt-4">
            <p>
                {{ props.professional_summaries?.professional_summary_text }}
            </p>
        </div>
    </Card>

</template>

<style scoped>

</style>
