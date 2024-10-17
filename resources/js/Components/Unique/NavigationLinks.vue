<script setup lang="ts">
    import NavigationLink from "@/Components/Unique/NavigationLink.vue";
    import { usePage } from '@inertiajs/vue3';
    import { computed } from 'vue';

    const page = usePage();
    const pages = computed(() => page.props.pages);
</script>

<template>

    <NavigationLink :href="route('home')" :active="route().current('home')">Home</NavigationLink>
    <div v-for="page in pages" :key="page.id">
        <NavigationLink :href="route(page.slug)" :active="route().current(page.slug)">{{ page.title }}</NavigationLink>
    </div>

</template>

<style scoped>

</style>
