<script setup lang="ts">
    import { ref } from "vue";
    import NavigationLinks from "@/Components/Unique/NavigationLinks.vue";

    const isMobileMenuVisible = ref(false);

    const toggleMobileMenu = () => {
        isMobileMenuVisible.value = !isMobileMenuVisible.value;
    };

    // Smooth scroll function
    const scrollToSection = (id: string) => {
        const section = document.getElementById(id);
        if (section) {
            section.scrollIntoView({ block: "end", behavior: "smooth" });
        }
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

                    <!-- Secondary Navigation for Home Page -->
                    <div id="home-secondary-navigation" class="hidden md:flex md:space-x-6 md:text-rmLight md:text-bold justify-center items-center text-xs border-t-2 border-rmAccent">
                        <a href="#hello" @click.prevent="scrollToSection('hello')" class="cursor-pointer px-4 pt-4">Hello</a>
                        <a href="#about" @click.prevent="scrollToSection('about')" class="cursor-pointer px-4 pt-4">About</a>
                        <a href="#experience" @click.prevent="scrollToSection('experience')" class="cursor-pointer px-4 pt-4">Experience</a>
                        <a href="#education" @click.prevent="scrollToSection('education')" class="cursor-pointer px-4 pt-4">Education</a>
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
                    <hr class="border-rmLight/50 my-4">
                    <a href="#hello" @click.prevent="scrollToSection('about')" class="block cursor-pointer">About</a>
                    <a href="#about" @click.prevent="scrollToSection('about')" class="block cursor-pointer">About</a>
                    <a href="#experience" @click.prevent="scrollToSection('experience')" class="block cursor-pointer">Experience</a>
                    <a href="#education" @click.prevent="scrollToSection('education')" class="block cursor-pointer">Education</a>
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
