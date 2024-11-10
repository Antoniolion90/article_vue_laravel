<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {IconEye, IconHeart} from "@tabler/icons-vue";
import Main from "@/Pages/Main.vue";

defineProps({
    article: {
        type: Object
    }
});
</script>

<template>
    <Head :title="article.title" />

    <MainLayout>
        <div class="col-span-12">
            <main>
        <div class="py-12">
            <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden text-black bg-white dark:bg-black dark:text-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-semibold text-black bg-white dark:bg-black dark:text-white">{{article.title}}</h1>
                        <div class="pt-2 dark:text-white/50">
                            <div class="inline-flex gap-2">
                                <IconEye class="size-7"/> <p>{{ article.likes }}</p>
                            </div>

                            <div class="inline-flex float-end">
                                <IconHeart class="size-7"/> {{ article.views }}
                            </div>
                        </div>
                        <img :src="'/'+article.image"
                             class="bd-placeholder-img card-img-top"
                             width="100%" height="225" />
                        <p class="text-black dark:text-white">{{article.content}}</p>
                    </div>
                </div>
            </div>
        </div>
            </main>
        </div>
    </MainLayout>
</template>
