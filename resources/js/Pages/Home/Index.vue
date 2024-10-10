<script setup lang="ts">

import Navigation from "@/Components/Unique/Navigation.vue";
import SkillPill from "@/Pages/Home/Components/Skill-Pill.vue";
import StandardLayout from "@/Layouts/StandardLayout.vue";
</script>

<template>
    <StandardLayout>
        <!-- Central Component -->
        <div class="flex-grow flex items-center justify-center bg-green-900">
            <div class="m-8 p-2 max-w-screen-lg">
                <div class="flex items-center justify-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-2">

                        <!-- Left Column -->
                        <div class="flex flex-col justify-between">
                            <div class="p-2 m-2 text-white space-y-8">
                                <h1 class="uppercase text-4xl md:text-5xl lg:text-6xl text-center font-bold">Rheanne</h1>
                                <h1 class="uppercase text-4xl md:text-5xl lg:text-6xl text-center font-bold">McIntosh</h1>
                            </div>
                            <div class="p-2 m-2 text-white space-y-8">
                                <h2 class="uppercase text-xl md:text-2xl text-center font-bold">Lead Software Engineer</h2>
                            </div>
                            <div class="p-2 m-2 text-white space-y-8">
                                <p class="text-justify">
                                    I enjoy building with Laravel, with a strong focus on process and testing.
                                    A self-proclaimed Jira enthusiast, I’m detail-oriented and thrive on
                                    organisation.
                                </p>
                            </div>
                            <div class="flex justify-center items-center p-2 m-2">
                                <button class="bg-white rounded-xl px-4 py-2 font-bold">What am I up to?</button>
                            </div>
                        </div>
                        <!-- Left Column End -->

                        <!-- Right Column -->
                        <div class="">
                            <div class=" m-2 p-2 flex items-center justify-center">
                                <div id="logo"
                                     class="flex items-center justify-center h-72 aspect-square bg-green-950 rounded-full">
                                <span
                                    class="material-symbols-rounded text-9xl text-gray-50 items-center">
                                    support_agent
                                </span>
                                </div>
                            </div>
                            <div class="m-2">
                                <div class="m-2 flex justify-center items-center flex-wrap">
                                    <SkillPill skill="Laravel"/>
                                    <SkillPill skill="PHP"/>
                                    <SkillPill skill="Jira"/>
                                </div>
                                <div class="m-2 flex justify-center items-center flex-wrap">
                                    <SkillPill skill="TailwindCSS"/>
                                    <SkillPill skill="MySQL"/>
                                </div>
                                <div class="m-2 flex justify-center items-center flex-wrap">
                                    <SkillPill skill="Vue.js"/>
                                    <SkillPill skill="Project Management"/>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column End -->

                    </div>
                </div>
            </div>
        </div>
    </StandardLayout>
</template>
