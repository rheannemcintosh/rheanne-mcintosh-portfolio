<template>

    <div class="max-w-3xl">
        <div class="flex items-center text-rmLight">
                <span class="material-symbols-rounded text-5xl text-rmAccent">
                    school
                </span>
            <h1 class="text-rmLight text-5xl font-bold my-8 pl-4">
                Education
            </h1>
        </div>
        <div class="space-y-8">
            <div>
                <h2 class="font-black text-lg flex items-center pb-1"><span class="uppercase">MSc In Computer Science with Distinction</span>,<span class="text-rmAccent pl-1">University of Bath</span></h2>
                <p class="text-justify">I completed a master’s degree to deepen my understanding of computer science, artificial intelligence, and cybersecurity.  Driven by my interest in gamification, my dissertation explored how gamified digital badges can enhance knowledge retention in endangered language learning, with a case study on Scottish Gaelic.</p>
                <div class="pt-2 flex justify-center">
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
                <h2 class="font-black text-lg flex items-center pb-1"><span class="uppercase">BSc In Computing with 1st Class Honours</span>,<span class="text-rmAccent pl-1">Robert Gordon University</span></h2>
                <p class="text-justify">My undergraduate degree in Computing for Graphics and Animation combined the fundamentals of computer science and software engineering with the creative aspects of 3D graphics and animation, sparking my passion for agile development, software engineering, accessibility, UX design and gamification.</p>
                <div class="pt-2 flex justify-center">
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
