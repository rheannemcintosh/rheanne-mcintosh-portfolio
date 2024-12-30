<script setup lang="ts">
    import Pill from "@/Components/Unique/Pill.vue";
</script>

<template>
    <div class="max-w-3xl text-rmLight">
        <div class="flex items-center text-rmLight">
                    <span class="material-symbols-rounded text-5xl text-rmAccent">
                        work
                    </span>
            <h1 class="text-rmLight text-5xl font-bold my-8 pl-4">
                Experience
            </h1>
        </div>
        <div class="space-y-4">
            <div class="grid grid-cols-9 p-2">
                <div class="text-xs p-2 col-span-2 text-rmAccent font-black">SEP 2023 - PRESENT</div>
                <div class="col-span-7 p-2">
                    <h2 class="font-black text-lg flex items-center pb-1">LEAD SOFTWARE ENGINEER, <span class="text-rmAccent pl-1">The Skills Network</span></h2>
                    <p class="text-justify">
                        At one of the UK's largest distance-learning providers, I combine software engineering expertise with leadership and technical product management.
                        My role focuses on delivering high-quality features, alongside fostering a culture of code quality, mentoring engineers to elevate coding practices, implementing agile methodologies to boost team productivity and leading impactful projects.
                    </p>
                    <div class="pt-2 flex justify-center">
                        <Pill name="PHP" pillColour="skill-pill"/>
                        <Pill name="Laravel" pillColour="skill-pill"/>
                        <Pill name="PostgreSQL" pillColour="skill-pill"/>
                        <Pill name="Vue" pillColour="skill-pill"/>
                        <Pill name="Jira" pillColour="skill-pill"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-9 p-2">
                <div class="text-xs p-2 col-span-2 text-rmAccent font-black">MAY 2021 - AUG 2023</div>
                <div class="col-span-7 p-2">
                    <h2 class="font-black text-lg flex items-center pb-1">SOFTWARE ENGINEER, <span class="text-rmAccent pl-1">Visualsoft</span></h2>
                    <p class="text-justify">
                        As a software engineer at a global e-commerce platform supporting over 1,000 clients, I developed and maintained innovative features such as building a payment API to integrate Stripe’s beta platform to boost conversions, and optimising search functionality with ElasticSearch for improved usability.
                    </p>
                    <div class="pt-2 flex justify-center">
                        <Pill name="PHP" pillColour="skill-pill"/>
                        <Pill name="Laravel" pillColour="skill-pill"/>
                        <Pill name="MySQL" pillColour="skill-pill"/>
                        <Pill name="ElasticSearch" pillColour="skill-pill"/>
                        <Pill name="Jira" pillColour="skill-pill"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-9 p-2">
                <div class="text-xs p-2 col-span-2 text-rmAccent font-black">JUL 2019 - MAY 2021</div>
                <div class="col-span-7 p-2">
                    <h2 class="font-black text-lg flex items-center pb-1">JUNIOR SOFTWARE DEVELOPER,<span class="text-rmAccent pl-1">University of Aberdeen</span></h2>
                    <p class="text-justify">
                        As a junior software developer, I maintained custom eLearning platforms, led a complex Moodle-to-Laravel migration, and developed widely used tools such as a NHS room booking system and a COVID-19 attendance monitoring solution.
                    </p>
                    <div class="pt-2 flex justify-center">
                        <Pill name="PHP" pillColour="skill-pill"/>
                        <Pill name="Laravel" pillColour="skill-pill"/>
                        <Pill name="MySQL" pillColour="skill-pill"/>
                        <Pill name="CodeIgniter" pillColour="skill-pill"/>
                        <Pill name="Moodle" pillColour="skill-pill"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
