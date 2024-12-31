<template>
    <div class="p-4 md:p-8 max-w-3xl lg:max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row items-center text-rmLight text-center md:text-left">
            <span class="material-symbols-rounded text-4xl md:text-5xl text-rmAccent">
                school
            </span>
            <h1 class="text-rmLight text-3xl md:text-5xl font-bold my-4 md:my-8 md:pl-4">
                Education
            </h1>
        </div>
        <div class="space-y-4">
            <div>
                <h2 class="font-black text-md md:text-lg flex flex-col md:flex-row items-center pb-1">
                    <span class="uppercase text-center md:text-left">MSc In Computer Science with Distinction</span>
                    <span class="hidden md:block">, </span>
                    <span class="text-rmAccent md:pl-1 text-center md:text-left">University of Bath</span>
                </h2>
                <p class="text-justify text-sm md:text-base">I completed a master’s degree to deepen my understanding of computer science, artificial intelligence, and cybersecurity. Driven by my interest in gamification, my dissertation explored how gamified digital badges can enhance knowledge retention in endangered language learning, with a case study on Scottish Gaelic.</p>
                <div class="pt-2 flex flex-wrap justify-center gap-2">
                    <Pill name="C" pillColour="skill-pill"/>
                    <Pill name="Java" pillColour="skill-pill"/>
                    <Pill name="Python" pillColour="skill-pill"/>
                    <Pill name="Haskell" pillColour="skill-pill"/>
                    <Pill name="PHP" pillColour="skill-pill"/>
                    <Pill name="Laravel" pillColour="skill-pill"/>
                    <Pill name="MySQL" pillColour="skill-pill"/>
                </div>
            </div>
            <div>
                <h2 class="font-black text-md md:text-lg flex flex-col md:flex-row items-center pb-1">
                    <span class="uppercase text-center md:text-left">BSc In Computing with 1st Class Honours</span>
                    <span class="hidden md:block">, </span>
                    <span class="text-rmAccent md:pl-1 text-center md:text-left">Robert Gordon University</span>
                </h2>
                <p class="text-justify text-sm md:text-base">My undergraduate degree in Computing for Graphics and Animation combined the fundamentals of computer science and software engineering with the creative aspects of 3D graphics and animation, sparking my passion for agile development, software engineering, accessibility, UX design, and gamification.</p>
                <div class="pt-2 flex flex-wrap justify-center gap-2">
                    <Pill name="Java" pillColour="skill-pill"/>
                    <Pill name="JavaScript" pillColour="skill-pill"/>
                    <Pill name="HTML" pillColour="skill-pill"/>
                    <Pill name="CSS" pillColour="skill-pill"/>
                    <Pill name="Trello" pillColour="skill-pill"/>
                    <Pill name="Swift" pillColour="skill-pill"/>
                    <Pill name="C++" pillColour="skill-pill"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import Pill from "@/Components/Unique/Pill.vue";
</script>
