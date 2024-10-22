<script setup lang="ts">
    import StandardLayout from "@/Layouts/StandardLayout.vue";
    import PageHeading from "@/Components/Headings/PageHeading.vue";
    import PageIntroduction from "@/Components/Text/PageIntroduction.vue";
    import Link from "@/Components/Link/Link.vue";

    defineProps<{
        title: string;
        pageIntroduction: string;
    }>();
</script>

<template>
    <StandardLayout>
        <div class="m-4 max-w-3xl mx-auto">
            <PageHeading :title="title" />

            <PageIntroduction>
                {{ pageIntroduction }}
                <Link url="/" text="You can download a copy of my latest CV here!"/>
            </PageIntroduction>
            <slot />
        </div>
    </StandardLayout>
</template>

<style scoped lang="postcss">

body {
    @apply bg-rmDark;
}

</style>

