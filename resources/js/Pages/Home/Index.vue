<script setup lang="ts">
    import StandardLayout from "@/Layouts/StandardLayout.vue";
    import Hi from "@/Pages/Home/Sections/Hi.vue";
</script>

<template>
    <StandardLayout>
        <section id="hello" class="section bg-rmDark text-rmLight border-t-2 border-rmAccent">
            <Hi />
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
</style>
