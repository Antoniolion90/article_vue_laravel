<script setup>
import {ref} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ToggleDarkMode from "@/Components/Vien/ToggleDarkMode.vue";
import AppToast from "@/Components/Vien/AppToast.vue";
import NavLink from "@/Components/NavLink.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav class="bg-white dark:bg-gray-800 dark:border-gray-700 sticky-top">
                <!-- Primary Navigation Menu -->
                <div class="px-2 mx-auto">
                    <div class="flex justify-between h-16">
                        <div class="hidden xl:flex">
                            <!-- Logo -->
                            <div class="pl-3 shrink-0 flex items-center">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                            </div>
                        </div>

                        <div class="hidden xl:flex sm:items-center sm:ms-6">
                            <ToggleDarkMode/>
                            <NavLink :href="route('main')" class="mx-2">Главная</NavLink>
                            <NavLink :href="route('article.index')">Статьи</NavLink>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center xl:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown,
                    }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown,
                    }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <AppToast/>
            <!-- Page Content -->

            <div class="grid grid-cols-12">

                <slot/>

            </div>

            <footer class="p-16 text-sm text-black dark:text-white/70">
                <h2 class="text-xl font-semibold text-black dark:text-white">Тредиум</h2>
                <p>&copy; 2001 - {{ new Date().getFullYear() }} Все права защищены</p>
            </footer>
        </div>
    </div>
</template>


<style scoped>
.sticky-top {
    position: sticky;
    top: 0;
    z-index: 20;
}
</style>
