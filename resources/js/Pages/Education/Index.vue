<script setup lang="ts">

import { ref, onMounted } from 'vue';

import CVHeading from "@/Components/CVHeading.vue";
import { Degree } from '@/types/Degree';

// Define the props for the component
const props = defineProps<{
    degrees: Degree[];
}>();

const openDegree = ref<number[]>([]);

/**
 * Toggle the dropdown state of an employer
 *
 * @param educationId The ID of the employer to toggle
 */
function toggleOpen(degreeId: number): void {
    if (openDegree.value.includes(degreeId)) {
        openDegree.value = openDegree.value.filter(openDegreeId => openDegreeId !== degreeId);
    } else {
        openDegree.value.push(degreeId);
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
    props.degrees.forEach((degree) => {
        if (degree.is_default_open) {
            openDegree.value.push(degree.id);
        }
    });
});

</script>

<template>
    <!-- Experience Card -->
    <div class="bg-white rounded-md shadow-2xl p-8 mb-8">
        <!-- Experience Heading -->
        <CVHeading title="University Education" icon="school" />

        <!-- Experience Content -->
        <div class="mt-4">
            <!-- Loop through each education -->
            <div v-for="(degree) in degrees" :key="degree.id" class="mb-2">

                <!-- Check if the employer has a description or responsibilities -->
                <div>
                    <!-- Employer Dropdown Button -->
                    <button
                        @click="toggleOpen(degree.id)"
                        class="flex justify-between items-center bg-green-700 text-white px-2 py-1 rounded-sm mb-1 w-full"
                    >
                        <!-- Employer Name and Role -->
                        <div class="flex items-center">
                            <h3 class="text-lg font-bold uppercase">
                                {{ degree.abbreviation }}
                                {{ degree.short_title ? degree.short_title : degree.title }},
                            </h3>
                            <h4 id="name" class="text-lg pl-2">{{ degree.university }}</h4>
                        </div>

                        <!-- Employment Dates & Dropdown Toggle -->
                        <div id="dates" class="text-xs text-right font-bold font-mono uppercase flex items-center">
                            <!-- Dates -->
                            <span>
                                {{ formatDate(degree.start_date) }} -
                                {{ degree.is_current_degree ? 'Present' : formatDate(degree.end_date) }}
                            </span>

                            <!-- Dropdown Toggle -->
                            <span
                                :class="{'rotate-180': openDegree.includes(degree.id)}"
                                class="material-symbols-rounded ml-2 transform transition-transform duration-300 inline-block"
                            >
                                arrow_drop_down
                            </span>
                        </div>
                    </button>

                    <!-- Employer Description and Responsibilities -->
                    <div
                        v-if="openDegree.includes(degree.id)"
                        class="transition-all duration-300 ease-in-out transform mb-4"
                        :class="{ 'opacity-100 max-h-96': openDegree.includes(degree.id), 'opacity-0 max-h-0': !openDegree.includes(degree.id) }"
                    >
                        <!-- Employer Description -->
                        <p class="mb-2 text-justify">{{ degree.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
