<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

import {IconEye, IconHeart, IconHeartFilled} from "@tabler/icons-vue";

defineProps({
    articles: {
        type: Object
    }
});
</script>

<template>
    <Head title="Welcome"/>
    <MainLayout>
        <div class="col-span-12">
            <main>
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div
                class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 mb-6 lg:max-w-7xl">
                    <header class="py-10">
                        <div class="lg:col-start-2">
                            <h2 class="text-3xl font-semibold text-black dark:text-white">Успех</h2>
                            <p>Для молодых и успешных</p>
                        </div>
                    </header>

                    <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">

                        <a v-for="item in articles" :key="item.id" :href="route('article.show', {slug: item.slug})"
                           class="items-start rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                            <div>
                                <img :src="item.image"
                                    class="bd-placeholder-img card-img-top"
                                    width="100%" height="225" />

                                <h2 class="text-xl pt-2 font-semibold text-black dark:text-white">{{ item.title }}</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    {{ (item.content).length > 100 ? (item.content).slice(0, 100) + "..." : (item.content) }}
                                </p>
                            </div>


                            <div class="pt-2">
                                <div class="inline-flex gap-2">
                                    <IconEye class="size-7"/>
                                    {{ item.likes }}
                                </div>

                                <div class="inline-flex float-end">
                                    <IconHeart class="size-7"/>
                                    {{ item.views }}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            </main>
        </div>

    </MainLayout>
</template>
