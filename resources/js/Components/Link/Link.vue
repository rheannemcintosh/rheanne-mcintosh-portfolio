<script setup lang="ts">

    // Import the relevant types
    import { Link } from "@/types/Link/Link";

    // Define the props
    const props = defineProps<Link>();

</script>

<template>

    <a :href="props.url">
        {{ props.text}}
    </a>

</template>

<style scoped>
    a {
        @apply text-rmAccent underline font-bold;
    }
</style>
