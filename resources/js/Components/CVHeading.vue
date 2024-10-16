<script setup>
    const props = defineProps({
        title: String,
        icon: String,
    });

</script>

<template>
    <div class="flex items-center text-rmLight ">
            <span class="material-symbols-rounded text-3xl text-rmAccent">
                {{ icon }}
            </span>
        <h1 class="pl-2 font-bold text-3xl">
            {{ title }}
        </h1>
    </div>


</template>

<style scoped>

</style>
