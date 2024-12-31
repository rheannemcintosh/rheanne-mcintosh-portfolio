<script setup lang="ts">
    import Pill from "@/Components/Unique/Pill.vue";
</script>

<template>
    <div class="p-4 md:p-8 max-w-3x md:max-w-4xl mx-auto text-rmLight">
        <div class="flex flex-col md:flex-row items-center text-rmLight text-center md:text-left">
                <span class="material-symbols-rounded text-4xl md:text-5xl text-rmAccent">
                    work
                </span>
            <h1 class="text-rmLight text-3xl md:text-5xl font-bold my-4 md:my-8 md:pl-4">
                Experience
            </h1>
        </div>
        <div class="space-y-4">
            <div class="flex flex-col md:grid md:grid-cols-9 p-2">
                <div class="text-xs p-2 md:col-span-2 text-rmAccent font-black text-center md:text-left">SEP 2023 - PRESENT</div>
                <div class="md:col-span-7 p-2">
                    <h2 class="font-black text-md md:text-lg flex flex-col md:flex-row items-center pb-1">
                        <span class="uppercase text-center md:text-left">Lead Software Engineer</span>
                        <span class="hidden md:block">, </span>
                        <span class="text-rmAccent md:pl-1 text-center md:text-left">The Skills Network</span>
                    </h2>
                    <div>
                        <p class="text-justify">
                            At one of the UK's largest distance-learning providers, I combine software engineering expertise with leadership and technical product management.
                            My role focuses on delivering high-quality features, alongside fostering a culture of code quality, mentoring engineers to elevate coding practices, implementing agile methodologies to boost team productivity and leading impactful projects.
                        </p>
                        <div class="pt-2 flex flex-wrap justify-center gap-1">
                            <Pill name="PHP" pillColour="skill-pill"/>
                            <Pill name="Laravel" pillColour="skill-pill"/>
                            <Pill name="PostgreSQL" pillColour="skill-pill"/>
                            <Pill name="Vue" pillColour="skill-pill"/>
                            <Pill name="Jira" pillColour="skill-pill"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:grid md:grid-cols-9 p-2">
                <div class="text-xs p-2 md:col-span-2 text-rmAccent font-black text-center md:text-left">MAY 2021 - AUG 2023</div>
                <div class="md:col-span-7 p-2">
                    <h2 class="font-black text-md md:text-lg flex flex-col md:flex-row items-center pb-1">
                        <span class="uppercase text-center md:text-left">Software Engineer</span>
                        <span class="hidden md:block">, </span>
                        <span class="text-rmAccent md:pl-1 text-center md:text-left">Visualsoft</span>
                    </h2>
                    <div>
                        <p class="text-justify">
                            As a software engineer at a global e-commerce platform supporting over 1,000 clients, I developed and maintained innovative features such as building a payment API to integrate Stripe’s beta platform to boost conversions, and optimising search functionality with ElasticSearch for improved usability.
                        </p>
                        <div class="pt-2 flex flex-wrap justify-center gap-2">
                            <Pill name="PHP" pillColour="skill-pill"/>
                            <Pill name="Laravel" pillColour="skill-pill"/>
                            <Pill name="MySQL" pillColour="skill-pill"/>
                            <Pill name="ElasticSearch" pillColour="skill-pill"/>
                            <Pill name="Jira" pillColour="skill-pill"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:grid md:grid-cols-9 p-2">
                <div class="text-xs p-2 md:col-span-2 text-rmAccent font-black text-center md:text-left">JUL 2019 - MAY 2021</div>
                <div class="md:col-span-7 p-2">
                    <h2 class="font-black text-md md:text-lg flex flex-col md:flex-row items-center pb-1">
                        <span class="uppercase text-center md:text-left">Junior Software Developer</span>
                        <span class="hidden md:block">, </span>
                        <span class="text-rmAccent md:pl-1 text-center md:text-left">University of Aberdeen</span>
                    </h2>
                    <div>
                        <p class="text-justify">
                            As a junior software developer, I maintained custom eLearning platforms, led a complex Moodle-to-Laravel migration, and developed widely used tools such as a NHS room booking system and a COVID-19 attendance monitoring solution.
                        </p>
                        <div class="pt-2 flex flex-wrap justify-center gap-2">
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
    </div>
</template>
