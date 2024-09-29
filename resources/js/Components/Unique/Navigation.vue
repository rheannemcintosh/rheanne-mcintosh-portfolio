<script setup lang="ts">

import { ref } from "vue";

const isMobileMenuVisible = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuVisible.value = !isMobileMenuVisible.value;
};

</script>

<template>

    <nav>
        <!-- Desktop and Mobile Navigation Container -->
        <div id="navigation" class="bg-green-900 p-8 xl:px-20">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div id="logo" class="flex">
          <span class="material-symbols-rounded text-7xl text-gray-50 items-center">
            support_agent
          </span>
                </div>

                <!-- Desktop Navigation Links -->
                <div id="navigation-links" class="hidden md:flex md:space-x-12 md:text-gray-50 md:text-bold">
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Home</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">CV</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Skills</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Timeline</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Contact</div>
                </div>

                <!-- Burger Icon for Mobile -->
                <div id="burger-icon" class="md:hidden flex">
          <span class="material-symbols-rounded text-4xl text-gray-50 cursor-pointer" @click="toggleMobileMenu">
            menu
          </span>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isMobileMenuVisible" id="mobile-menu" class="bg-pink-500">
            <div class="bg-green-900 text-gray-50 p-4">
                <div class="space-y-4">
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Home</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">CV</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Skills</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Timeline</div>
                    <div class="hover:bg-green-950 rounded-xl px-4 py-1 cursor-pointer">Contact</div>
                </div>
            </div>
        </div>
    </nav>
</template>

<style scoped>

/* Custom styles to handle the mobile menu dropdown */
#mobile-menu {
    display: none;
}

@media (max-width: 767px) {
    #mobile-menu {
        display: block;
    }
}

</style>
