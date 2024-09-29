<script setup lang="ts">
    import { ref } from "vue";
    import NavigationLinks from "@/Components/Unique/NavigationLinks.vue";

    const isMobileMenuVisible = ref(false);

    const toggleMobileMenu = () => {
        isMobileMenuVisible.value = !isMobileMenuVisible.value;
    };
</script>

<template>
    <nav>
        <div id="navigation" class="bg-green-800 p-8 xl:px-20">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div id="logo" class="flex">
                    <span class="material-symbols-rounded text-7xl text-gray-50 items-center">
                        support_agent
                    </span>
                </div>

                <!-- Navigation Links for Desktop -->
                <div id="navigation-links" class="hidden md:flex md:space-x-12 md:text-gray-50 md:text-bold">
                    <NavigationLinks />
                </div>

                <!-- Burger Icon for Mobile -->
                <div id="burger-icon" class="md:hidden flex">
                    <span class="material-symbols-rounded text-4xl text-gray-50 cursor-pointer" @click="toggleMobileMenu">
                        menu
                    </span>
                </div>

            </div>
        </div>

        <!-- Navigation Links for Mobile -->
        <div v-if="isMobileMenuVisible" id="mobile-menu" class="bg-pink-500">
            <div class="bg-green-900 text-gray-50 p-4">
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
