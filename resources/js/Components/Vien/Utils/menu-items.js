import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import {
  IconHome,
  IconSettings,
  IconUsers,
} from "@tabler/icons-vue";

export function useMenuItems() {
    /**
     * id harus unique
     * semua attribut wajib diisi
     */
    const menuItems = ref([
        {
            id: 1,
            title: "Articles",
            routeName: "article.index",
            component: "Article/Index",
            icon: IconHome,
        }
    ]);
    return {
        menuItems
    };
}
