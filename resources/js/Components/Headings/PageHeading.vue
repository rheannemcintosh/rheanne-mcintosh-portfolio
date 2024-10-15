<script setup lang="ts">

    // Import the relevant types
    import { PageHeading } from "@/types/Headings/PageHeading";

    // Define the props
    const props = defineProps<PageHeading>();

</script>

<template>

    <h1>{{ props.title }}</h1>

</template>

<style scoped lang="postcss">

    h1 {
        @apply text-rmLight text-5xl font-bold my-8;
    }

</style>
