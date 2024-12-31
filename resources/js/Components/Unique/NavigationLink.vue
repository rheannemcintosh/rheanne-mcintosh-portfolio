<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import { computed } from 'vue';

    const props = defineProps<{
        href: string;
        active?: boolean;
    }>();

    const classes = computed(() =>
        props.active
            ? 'rounded-t-xl cursor-pointer text-left md:text-center w-24 px-4 py-1 md:border-rmAccent md:border-b-2 md:bg-rmAccent text-rmAccent md:text-rmDark font-bold '
            : 'rounded-t-xl cursor-pointer text-left md:text-center w-24 px-4 py-1 md:border-rmAccent md:border-t-2 md:border-x-2'
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
