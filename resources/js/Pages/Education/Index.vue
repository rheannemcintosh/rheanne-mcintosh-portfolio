<script setup lang="ts">

import { ref, onMounted } from 'vue';

import CVHeading from "@/Components/CVHeading.vue";
import { Education } from '@/types/Education';

// Define the props for the component
const props = defineProps<{
    education: Education[];
}>();

const openEducation = ref<number[]>([]);

/**
 * Toggle the dropdown state of an employer
 *
 * @param educationId The ID of the employer to toggle
 */
function toggleOpen(educationId: number): void {
    if (openEducation.value.includes(educationId)) {
        openEducation.value = openEducation.value.filter(openEducationId => openEducationId !== educationId);
    } else {
        openEducation.value.push(educationId);
    }
}

/**
 * Format a date to a human-readable format (e.g. MAR 2022)
 *
 * @param date The date to format
 * @returns {string} The formatted date
 */
const formatDate = (date: string): string => {
    console.log(date)
    return new Date(date).toLocaleDateString('en-UK', { year: 'numeric', month: 'short' });
}

// Run this code when the component is mounted
onMounted((): void => {
    props.education.forEach((institution) => {
        if (institution.is_default_open) {
            openEducation.value.push(institution.id);
        }
    });
});

</script>

<template>
    <!-- Experience Card -->
    <div class="bg-white rounded-md shadow-2xl p-8 mb-8">
        <!-- Experience Heading -->
        <CVHeading title="Education" icon="school" />

        <!-- Experience Content -->
        <div class="mt-4">
            <!-- Loop through each education -->
            <div v-for="(institution) in education" :key="institution.id" class="mb-2">

                <!-- Check if the employer has a description or responsibilities -->
                <div>
                    <!-- Employer Dropdown Button -->
                    <button
                        @click="toggleOpen(institution.id)"
                        class="flex justify-between items-center bg-green-700 text-white px-2 py-1 rounded-sm mb-1 w-full"
                    >
                        <!-- Employer Name and Role -->
                        <div class="flex items-center">
                            <h3 class="text-lg font-bold uppercase">

                                {{ institution.degrees?.title }},
                            </h3>
                            <h4 id="name" class="text-lg pl-2">{{ institution.institution }}</h4>
                        </div>

                        <!-- Employment Dates & Dropdown Toggle -->
                        <div id="dates" class="text-xs text-right font-bold font-mono uppercase flex items-center">
                            <!-- Dates -->
                            <span>
                                {{ formatDate(institution.start_date) }} -
                                {{ institution.is_current_education ? 'Present' : formatDate(institution.end_date) }}
                            </span>

                            <!-- Dropdown Toggle -->
                            <span
                                :class="{'rotate-180': openEducation.includes(institution.id)}"
                                class="material-symbols-rounded ml-2 transform transition-transform duration-300 inline-block"
                            >
                                arrow_drop_down
                            </span>
                        </div>
                    </button>

                    <!-- Employer Description and Responsibilities -->
                    <div
                        v-if="openEducation.includes(institution.id)"
                        class="transition-all duration-300 ease-in-out transform mb-4"
                        :class="{ 'opacity-100 max-h-96': openEducation.includes(institution.id), 'opacity-0 max-h-0': !openEducation.includes(institution.id) }"
                    >
                        <!-- Employer Description -->
                        <p class="mb-2 text-justify">{{ institution.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
