<script setup lang="ts">
// Import Statements
import { ref, onMounted } from 'vue';
import CVHeading from '@/Components/CVHeading.vue';
import { Employer } from '@/types/Employer';
import Pill from "@/Components/Unique/Pill.vue";
import {Skill} from "@/types/Skill";
import Card from "@/Components/Cards/Card.vue";
import Paragraph from "@/Components/Unique/Paragraph.vue";

// Define the props for the component
const props = defineProps<{
    employers: Employer[];
    skills: Record<number, Skill>;
}>();

// Define a reactive variable to store which employers are open
const openEmployers = ref<number[]>([]);

/**
 * Toggle the dropdown state of an employer
 *
 * @param employerId The ID of the employer to toggle
 */
function toggleOpen(employerId: number): void {
    if (openEmployers.value.includes(employerId)) {
        openEmployers.value = openEmployers.value.filter(openEmployerId => openEmployerId !== employerId);
    } else {
        openEmployers.value.push(employerId);
    }
}

const getSkillName = (skillId: number): string => {
    return props.skills[skillId] ? props.skills[skillId].skill : 'Unknown skill';
};

/**
 * Format a date to a human-readable format (e.g. MAR 2022)
 *
 * @param date The date to format
 * @returns {string} The formatted date
 */
const formatDate = (date: string): string => {
    return new Date(date).toLocaleDateString('en-UK', { year: 'numeric', month: 'short' });
}

/**
 * Check if an employer has responsibilities attached
 *
 * @param roles The roles to check
 * @returns {boolean} Whether the employer has responsibilities
 */
const hasResponsibilities = (roles: Role[]): boolean => {
    return roles.some(role => role.responsibilities && role.responsibilities.length > 0);
}

// Run this code when the component is mounted
onMounted((): void => {
    props.employers.forEach((employer) => {
        if (employer.is_default_open) {
            openEmployers.value.push(employer.id);
        }
    });
});

const decodeSkills = (skillsJson: string): number[] => {
    try {
        return JSON.parse(skillsJson); // Decode the JSON string into an array of skill IDs
    } catch (e) {
        console.error('Error decoding skills JSON', e);
        return [];
    }
};

</script>

<template>

    <!-- Experience Card -->
    <Card>
        <!-- Experience Heading -->
        <CVHeading title="Experience" icon="work" />

        <!-- Experience Content -->
        <div class="mt-4">
            <!-- Loop through each employer -->
            <div v-for="(employer) in employers" :key="employer.id" class="mb-2">
                <!-- Check if the employer has a description or responsibilities -->
                <div v-if="employer.description || hasResponsibilities(employer.roles)">
                    <!-- Employer Dropdown Button -->
                    <button
                        @click="toggleOpen(employer.id)"
                        class="flex justify-between items-center bg-green-700 text-white px-2 py-1 rounded-sm mb-1 w-full"
                    >
                        <!-- Employer Name and Role -->
                        <div class="flex items-center">
                            <h3 class="text-lg font-bold uppercase">
                                {{ employer.roles.length === 1 ? employer.roles[0].title :  "Various Roles" }},
                            </h3>
                            <h4 id="name" class="text-lg pl-2">{{ employer.name }}</h4>
                        </div>

                        <!-- Employment Dates & Dropdown Toggle -->
                        <div id="dates" class="text-xs text-right font-bold font-mono uppercase flex items-center">
                            <!-- Dates -->
                            <span>
                                {{ formatDate(employer.start_date) }} -
                                {{ employer.is_current_employer ? 'Present' : formatDate(employer.end_date) }}
                            </span>

                            <!-- Dropdown Toggle -->
                            <span
                                :class="{'rotate-180': openEmployers.includes(employer.id)}"
                                class="material-symbols-rounded ml-2 transform transition-transform duration-300 inline-block"
                            >
                                arrow_drop_down
                            </span>
                        </div>
                    </button>

                    <!-- Employer Description and Responsibilities -->
                    <div
                        v-if="openEmployers.includes(employer.id)"
                        class="transition-all duration-300 ease-in-out transform mb-4"
                        :class="{ 'opacity-100 max-h-96': openEmployers.includes(employer.id), 'opacity-0 max-h-0': !openEmployers.includes(employer.id) }"
                    >
                        <!-- Employer Description -->
                        <Paragraph>{{ employer.description }}</Paragraph>

                        <!-- Employer Responsibilities -->
                        <div v-for="role in employer.roles" :key="role.id">
                            <div v-if="role.responsibilities.length > 0">
                                <!-- Role Title -->
                                <div v-if="employer.roles.length > 1" class="text-green-700 font-bold">
                                    {{ role.title }}
                                </div>

                                <!-- Responsibilities List -->
                                <div v-if="role.responsibilities.length > 0">
                                    <ul class="pl-4 list-disc text-sm">
                                        <li v-for="responsibility in role.responsibilities" :key="responsibility.id" class="text-justify">
                                            {{ responsibility.description }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <span v-for="skillID in decodeSkills(role.skills)" :key="skillID">
                                <Pill :name="getSkillName(skillID)" pillColour="skill-pill" />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Card>

</template>
