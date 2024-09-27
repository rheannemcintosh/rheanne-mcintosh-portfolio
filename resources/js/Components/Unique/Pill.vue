<script setup lang="ts">
    defineProps<{
        name: string;
        pillColour?: string;
    }>();
</script>

<template>
    <button @click.prevent="" class="m-1 px-8 rounded-xl font-bold text-white" :class="pillColour">
        {{ name }}
    </button>
</template>

<style scoped>
    .green-pill {
        @apply bg-green-600 hover:bg-green-800;
    }

    .red-pill {
        @apply bg-red-600 hover:bg-red-800;
    }

    .orange-pill {
        @apply bg-orange-600 hover:bg-orange-800;
    }

    .pink-pill {
        @apply bg-pink-600 hover:bg-pink-800;
    }

    .blue-pill {
        @apply bg-blue-600 hover:bg-blue-800;
    }

    .purple-pill {
        @apply bg-purple-600 hover:bg-purple-800;
    }
</style>
