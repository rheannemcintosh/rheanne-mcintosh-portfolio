<script setup lang="ts">

    // Import the relevant Components
    import Navigation from "@/Components/Unique/Navigation.vue";
    import Footer from "@/Layouts/Components/Footer.vue";

</script>

<template>

    <body>

        <div class="min-h-screen flex flex-col ">

            <!-- Navigation -->
            <Navigation />

            <slot />

        </div>

        <!-- Footer -->
        <Footer :show-privacy-policy="false" :show-c-v="false" />

    </body>

</template>

<style scoped lang="postcss">

    body {
        @apply bg-rmDark;
    }

</style>
