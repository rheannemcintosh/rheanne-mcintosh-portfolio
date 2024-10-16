<script setup lang="ts">
    const props = defineProps<{
        name: string;
        pillColour?: string;
    }>();

    const emit = defineEmits(['pill-click']);

    const handleClick = () => {
        emit('pill-click', props.name);
    }
</script>

<template>
    <button @click.prevent="handleClick" class="m-1 px-8 py-1 rounded-lg text-white" :class="pillColour">
        {{ name }}
    </button>
</template>

<style scoped>

    .selected-pill {
        /* Selected Secondary Navigation */
        @apply border border-rmLight bg-rmLight text-rmDark font-bold ;
    }

    .secondary-pill {
        /* Not Selected Secondary Navigation */
        @apply border border-rmLight bg-rmDark text-rmLight hover:bg-rmLight/15 font-bold  ;
    }

    .skill-pill {
        @apply border border-rmLight bg-rmDark text-rmLight hover:bg-rmLight/15 text-xs ;
    }
</style>
