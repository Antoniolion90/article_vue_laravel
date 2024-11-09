<script setup>
import {ref} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";
import ToggleDarkMode from "@/Components/Vien/ToggleDarkMode.vue";
import AppToast from "@/Components/Vien/AppToast.vue";
import SideBar from "@/Components/Vien/SideBar.vue";

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
                                <Link :href="route('article.index')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
                                    />
                                </Link>
                            </div>
                        </div>

                        <div class="hidden xl:flex sm:items-center sm:ms-6">
                            <ToggleDarkMode/>
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

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
                    class="xl:hidden relative"
                >
                    <SideBar/>
                </div>
            </nav>

            <AppToast/>
            <!-- Page Content -->
            <div class="grid grid-cols-12">
                <div class="col-span-2 relative hidden xl:block">
                    <SideBar/>
                </div>
                <div class="col-span-12 xl:col-span-10">
                    <main>
                        <slot/>
                    </main>
                </div>
            </div>
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
