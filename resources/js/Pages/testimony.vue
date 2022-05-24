<template>
    <Head title="Testimonies"/>
    <div class="pt-24 pb-20  bg-green-50 dark:bg-gray-900 px-3">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex w-full items-center">
                <div class="">
                    <div class="text-3xl dark:text-gray-200">My</div>
                    <div class="text-4xl sm:text-6xl font-extrabold text-gray-700 dark:text-gray-50 capitalize"><span class="underline">priority</span> <span class="text-3xl dark:text-gray-200">is</span></div>
                    <div class="text-4xl sm:text-6xl font-extrabold text-green-500 capitalize"><span class="text-3xl dark:text-gray-200 text-gray-700">your</span> satisfaction</div>
                    <div class="max-w-lg mt-5 text-gray-500">
                        Lorem, ipsum dolor sit amet consectetur  nesciunt voluptatum eligendi magnam corrupti earum iusto nam illo inventore, dignissimos, sapiente atque officia aliquid ipsam!
                    </div>
                </div>
            </div>
            <div class="">
                <img src="imgs/business-desktop.png" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="p-3">
        <menu-vue :active="active"></menu-vue>
        <div class=""></div>
        <div class="max-w-7xl mx-auto">
            <div class="">
                <div class="text-center text-4xl font-bold text-green-400" style="font-family:'Segoe Script'">What people say about me</div>
                <div class="max-w-2xl mx-auto text-gray-400 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi tempore possimus reiciendis doloribus impedit rem distinctio quam pariatur officiis facilis omnis reprehenderit, dignissimos laborum veritatis ipsam! Explicabo quia quam voluptates?
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <div class="py-5 pb-40 px-3 space-y-8">
            <div class="">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 py-8">
                    <testimonyVue v-for="(testimony,i) in 9" :key="i"></testimonyVue>
                </div>
            </div>
            <div class="">
                <workForUVue/>
            </div>
        </div>
    </div>
    <footer-vue></footer-vue>
</template>

<style scoped>
    
</style>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import menuVue from './inc/menu.vue';
    import footerVue from './inc/footer.vue';
    import testimonyVue from './inc/testimony.vue';
    import workForUVue from './inc/workForU.vue';
    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
            workForUVue,
            testimonyVue,
        },
        data(){
            return{
                theme:localStorage,
                active : 'testimonies'
            }
        },

        methods: {
        }
    })
</script>
