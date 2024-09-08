<script setup>
    const props = defineProps({
        title: String,
        icon: String,
    });

</script>

<template>
    <dv class="flex items-center text-green-700 ">
            <span class="material-symbols-rounded text-4xl">
                {{ icon }}
            </span>
        <h1 class="pl-2 font-bold text-4xl">
            {{ title }}
        </h1>
    </dv>


</template>

<style scoped>

</style>
