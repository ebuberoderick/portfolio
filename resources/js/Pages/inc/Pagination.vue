<template>
  <div v-if="totalRecords > pageLimit" :class="classes">
    <div class="flex flex-wrap flex-initial -mb-1 ml-auto">
      <template v-for="(link, i) in links"  :key="i">
        <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
        <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded dark:text-gray-700 hover:bg-gray-400 hover:text-white dark:bg-gray-300 dark:hover:bg-blue-400 bg-gray-50 dark: focus:border-indigo-500 focus:text-indigo-500" :class="{ 'bg-blue-500 hover:text-gray-50 dark:bg-gray-600 dark:text-white text-gray-50': link.active }" :href="link.url" v-html="link.label"></Link>
      </template>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components:{ Link },
    props: {
        links: Array,
        classes: String,
        pageLimit: Number,
        totalRecords:Number
    },
}
</script>