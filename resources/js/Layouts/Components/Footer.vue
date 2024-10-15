<script setup lang="ts">

    import { ref } from "vue";
    import { FooterProps } from "@/types/FooterProps";

    const currentYear = ref(new Date().getFullYear());

    const props = withDefaults(defineProps<FooterProps>(),{
        showPrivacyPolicy: true,
        showCV: true
    });

</script>

<template>
    <footer class="mt-auto bg-rmDark text-white p-4 border-t-2 border-rmLight">
        <div class="container mx-auto text-center">
            <p class="pb-2">&copy; {{ currentYear }} Rheanne McIntosh</p>

            <div class="mt-4 grid grid-cols-3 gap-4">
                <div>
                    <a v-if="props.showPrivacyPolicy" href="/">
                        <div class="h-full hover:bg-green-900 hover:scale-105 text-sm font-bold flex items-center justify-center py-4">
                            Privacy Policy
                        </div>
                    </a>
                </div>
                <div>
                    <a href="mailto:rhm41@bath.ac.uk">
                        <div class="h-full hover:bg-green-900 hover:scale-105 text-sm font-bold flex items-center justify-center py-4">
                            rheanne.mcintosh@outlook.com
                        </div>
                    </a>
                </div>
                <div>
                    <a v-if="props.showCV"  href="/">
                        <div class="h-full hover:bg-green-900 hover:scale-105 text-sm font-bold flex items-center justify-center py-4">
                            Download CV
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
