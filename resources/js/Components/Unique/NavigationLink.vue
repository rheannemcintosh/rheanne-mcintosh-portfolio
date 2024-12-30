<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import { computed } from 'vue';

    const props = defineProps<{
        href: string;
        active?: boolean;
    }>();

    const classes = computed(() =>
        props.active
            ? 'rounded-t-xl cursor-pointer text-center w-24 px-4 py-1 border-rmAccent border-b-2 bg-rmAccent text-rmDark font-bold'
            : 'rounded-t-xl cursor-pointer text-center w-24 px-4 py-1 border-rmAccent border-t-2 border-x-2'
    );
</script>

<template>
    <Link :href="href" >
        <div :class="classes">
            <slot />
        </div>
    </Link>
</template>

<style scoped>

</style>
