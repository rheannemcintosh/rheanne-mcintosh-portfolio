<script setup lang="ts">
    import { ref } from "vue";
    import NavigationLinks from "@/Components/Unique/NavigationLinks.vue";

    const isMobileMenuVisible = ref(false);

    const toggleMobileMenu = () => {
        isMobileMenuVisible.value = !isMobileMenuVisible.value;
    };
</script>

<template>
    <nav class="bg-rmDark">
        <div id="navigation" class="p-8 xl:px-20 fixed w-full bg-rmDark">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div id="logo" class="flex">
                    <span class="material-symbols-rounded text-7xl text-rmLight items-center">
                        support_agent
                    </span>
                </div>

                <div>
                    <!-- Main Navigation Links for Desktop -->
                    <div id="navigation-links" class="hidden md:flex md:space-x-4 md:text-rmLight md:text-bold justify-end">
                        <NavigationLinks />
                    </div>

                <!-- Burger Icon for Mobile -->
                <div id="burger-icon" class="md:hidden flex">
                    <span class="material-symbols-rounded text-4xl text-rmLight cursor-pointer" @click="toggleMobileMenu">
                        menu
                    </span>
                </div>
                </div>
            </div>
        </div>

        <div class="h-20 m-8"></div>

        <!-- Navigation Links for Mobile -->
        <div v-if="isMobileMenuVisible" id="mobile-menu">
            <div class="bg-rmDark text-rmLight p-4">
                <div class="space-y-4">
                    <NavigationLinks />
                </div>
            </div>
        </div>
    </nav>
</template>

<style scoped>
    #mobile-menu {
        display: none;
    }

    @media (max-width: 767px) {
        #mobile-menu {
            display: block;
        }
    }
</style>
