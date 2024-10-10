<script setup lang="ts">
    const props = defineProps<{
        skill: string;
    }>();
</script>

<template>
    <span class="m-1 px-8 py-1 rounded-xl bg-green-950 font-bold text-gray-50">
        {{ skill }}
    </span>
</template>

<style scoped>

</style>
