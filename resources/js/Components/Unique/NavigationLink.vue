<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import { computed } from 'vue';

    const props = defineProps<{
        href: string;
        active?: boolean;
    }>();

    const classes = computed(() =>
        props.active
            ? 'rounded-xl px-4 py-1 cursor-pointer m-2 w-24 text-center text-rmAccent font-bold bg-rmAccent/10'
            : 'hover:bg-rmAccent/10 rounded-xl px-4 py-1 cursor-pointer m-2 w-24 text-center'
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
