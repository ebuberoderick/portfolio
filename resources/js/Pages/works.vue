<template>
    <Head title="My Works"/>
    <div class="pt-24 bg-teal-50 dark:bg-gray-900 px-3">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex w-full gap-8 flex-col justify-center">
                <div class="cursor-default">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-700 dark:text-gray-50 capitalize">Let's <span class="text-teal-500">start</span></div>
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-700 dark:text-gray-50 capitalize">Something</div>
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-teal-500 capitalize"> BIG <span class="underline">together</span><span class="text-gray-700 dark:text-gray-50 cursor-pointer">.</span></div>
                </div>
                <div class="">
                    <div class="max-w-sm dark:text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolor! adipisicing elit. Reprehenderit, dolor!
                    </div>
                </div>
                <div class="space-x-3">
                    <span class="text-lg cursor-pointer px-4 py-2 bg-teal-400 uppercase text-white">download cv</span>
                    <span class="text-lg cursor-pointer px-4 py-2 bg-yellow-400 uppercase text-white">hire me</span>
                </div>
                <div class="max-w-sm grid text-gray-300 dark:text-gray-600 grid-cols-3 gap-4">
                    <div class="py-12 md:pb-20">
                        <div class="text-5xl font-bold">30k</div>
                        <div class="text-sm">
                            <div class="">Web</div>
                            <div class="">Application</div>
                        </div>
                    </div>
                    <div class="py-12 md:pb-20">
                        <div class="text-5xl font-bold">30k</div>
                        <div class="text-sm">
                            <div class="">Mobile</div>
                            <div class="">Application</div>
                        </div>
                    </div>
                    <div class="py-12 md:pb-20">
                        <div class="text-5xl font-bold">30k</div>
                        <div class="text-sm">
                            <div class="">UI/UX</div>
                            <div class="">Design</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-black">
                
            </div>
        </div>
    </div>
    <div class="p-3 pt-0 w-full">
        <menu-vue :active="active"></menu-vue>
        <div class="relative -top-12 py-12 pt-0 max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-3 gap-5">
            <div class="p-3 sm:col-span-2 lg:col-span-1 bg-white dark:bg-gray-700 shadow-lg">
                <div class="border-b-4 pb-6 border-teal-600">
                    <div class="text-gray-200 dark:text-gray-500 text-2xl">01</div>
                    <div class="px-3 py-4 font-extrabold text-4xl dark:text-gray-50"><span class="text-teal-400">Quick</span> Delivery</div>
                    <div class="px-3 leading-7 text-gray-700 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit fuga recusandae, pariatur sapiente veritatis?
                    </div>
                </div>
            </div>
            <div class="p-3 sm:col-span-2 lg:col-span-1 bg-white dark:bg-gray-700 shadow-lg">
                <div class="border-b-4 pb-6 border-teal-600">
                    <div class="text-gray-200 dark:text-gray-500 text-2xl">02</div>
                    <div class="px-3 py-4 font-extrabold text-4xl dark:text-gray-50"><span class="text-teal-400">Best</span> Price Rate</div>
                    <div class="px-3 leading-7 text-gray-700 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit fuga recusandae, pariatur sapiente veritatis?
                    </div>
                </div>
            </div>
            <div class="hidden sm:block lg:hidden"></div>
            <div class="p-3 sm:col-span-2 lg:col-span-1 bg-white dark:bg-gray-700 shadow-lg">
                <div class="border-b-4 pb-6 border-teal-600">
                    <div class="text-gray-200 dark:text-gray-500 text-2xl">03</div>
                    <div class="px-3 py-4 font-extrabold text-4xl dark:text-gray-50"><span class="text-teal-400">Fantastic</span> UI & UX</div>
                    <div class="px-3 leading-7 text-gray-700 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit fuga recusandae, pariatur sapiente veritatis?
                    </div>
                </div>
            </div>
            <div class="hidden sm:block lg:hidden"></div>
        </div>
    </div>
    <div class="px-3 pb-36">
        <div class="max-w-7xl mx-auto">
            <div class="relative -top-10">
                <div class="text-center text-4xl font-bold text-teal-400" style="font-family:'Segoe Script'">Some projects i've worked on</div>
                <div class="max-w-2xl mx-auto text-gray-400 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi tempore possimus reiciendis doloribus impedit rem distinctio quam pariatur officiis facilis omnis reprehenderit, dignissimos laborum veritatis ipsam! Explicabo quia quam voluptates?
                </div>
            </div>
            <div v-show="false" class="py-5 sm:items-end flex-col mb-2 dark:text-gray-50 flex gap-5">
                <div class="pr-5 text-gray-400">Sort by</div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="space-x-2">
                        <input type="checkbox" name="" id="all">
                        <label for="all">All</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="" id="web">
                        <label for="web">Websites</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="" id="mobile">
                        <label for="mobile">Mobile Apps</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="" id="design">
                        <label for="design">UI/UX Designs</label>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="sm:col-span-2 h-96 sm:row-span-2 bg-gray-800 grid grid-cols-4 my-auto">
                        
                    </div>
                    <div v-for="(works,i) in 20" :key="i" class="p-3 text-center rounded-xl bg-gray-200 bg-opacity-20">
                        <div class="h-56"></div>
                        <div class="">
                            <div class="font-bold text-lg dark:text-gray-100">Creative Movers</div>
                            <div class="text-sm text-gray-400 dark:text-gray-300">Website | Mobile App | UI/UX</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
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
    import footerVue from './inc/footer.vue'
    import workForUVue from './inc/workForU.vue';
    
    

    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
            workForUVue,
        },
        data(){
            return{
                theme:localStorage,
                active : 'works'
            }
        },

        methods: {
        }
    })
</script>
