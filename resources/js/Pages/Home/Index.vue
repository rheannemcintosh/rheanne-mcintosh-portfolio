<script setup lang="ts">
    import StandardLayout from "@/Layouts/StandardLayout.vue";
    import Hi from "@/Pages/Home/Sections/Hi.vue";
    import About from "@/Pages/Home/Sections/About.vue";
    import Education from "@/Pages/Home/Sections/Education.vue";
    import Experience from "@/Pages/Home/Sections/Experience.vue";
</script>

<template>
    <StandardLayout>
        <section id="hi" class="section bg-rmDark text-rmLight border-t-2 border-rmAccent">
            <Hi />
        </section>
        <section id="about" class="section text-rmLight border-t-2 border-rmAccent">
            <About />
        </section>
        <section id="experience" class="section text-rmLight border-t-2 border-rmAccent">
            <Experience />
        </section>
        <section id="education" class="section text-rmLight border-t-2 border-rmAccent">
            <Education />
        </section>
    </StandardLayout>
</template>

<style scoped lang="postcss">
    .section {
        height: calc(100svh - 9rem); /* Adjust for nav height */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 1024px) {
        .section {
            height: auto; /* Let the content define the height */
            padding: 2rem 1rem; /* Add padding for spacing */
        }
    }
</style>
