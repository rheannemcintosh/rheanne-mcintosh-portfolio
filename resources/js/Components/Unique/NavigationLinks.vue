<script setup lang="ts">
    import NavigationLink from "@/Components/Unique/NavigationLink.vue";
</script>

<template>
    <NavigationLink :href="route('home')" :active="route().current('home')">Home</NavigationLink>
    <NavigationLink :href="route('cv')" :active="route().current('cv')">Timeline</NavigationLink>
<!--    <NavigationLink :href="route('skills')" :active="route().current('skills')">Skills</NavigationLink>-->
<!--    <NavigationLink :href="route('timeline')" :active="route().current('timeline')">Timeline</NavigationLink>-->
<!--    <NavigationLink :href="route('contact')" :active="route().current('contact')">Contact</NavigationLink>-->
</template>

<style scoped>

</style>
