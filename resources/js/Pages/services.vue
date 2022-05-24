<template>
    <Head title="Services"/>
    <div class="h-screen p-3 flex flex-col items-center w-full relative bg-gradient-to-b from-transparent via-transparent to-white dark:to-gray-700 ">
        <menu-vue :active="active"></menu-vue>
        <div class="p-3 space-y-5 w-full max-w-7xl mx-auto pt-24">
            <div class="flex items-center pointer-events-none dark:text-gray-600 text-gray-100">
                <div class="text-9xl">D</div>
                <div class="">
                    <div class="text-5xl">eveloper</div>
                    <div class="text-5xl">esigner</div>
                </div>
            </div>
            <div class="uppercase tracking-widest text-xl text-gray-300">Lorem ipsum dolor sit amet.</div>
            <div class="max-w-3xl text-2xl font-bold dark:text-gray-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ducimus temporibus harum praesentium qui error dolores. Pariatur, nostrum nisi placeat ipsam rem architecto. Culpa, magnam? Sit nesciunt dolore necessitatibus natus!</div>
            <div class="max-w-5xl dark:text-gray-300 text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea corrupti facilis libero odit, molestias temporibus exercitationem illum eos doloribus? Est corrupti nam at optio nemo impedit dolores esse. Aliquam, vero.</div>
            <div class="capitalize text-lg dark:text-gray-100">
                <Link :href="'about'" class="cursor-pointer">More about me</Link> <span class="text-sm px-4 text-gray-400">or</span> <Link :href="'works'" class="cursor-pointer">View some project</Link>
            </div>
        </div>
    </div>
    <div class="w-full px-3 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="flex gap-3 items-end w-full py-24">
                <div class="lg:text-right flex-grow order-1 text-gray-400 lg:order-none first-line:uppercase first-line:tracking-widest first-letter:font-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci iure natus ipsam quas doloribus impedit quidem soluta temporibus eius recusandae nisi porro, in maiores possimus beatae nemo quisquam. Voluptatum.
                </div>
                <div class="">
                    <div class="h-16 w-16 rounded-xl flex justify-center items-center bg-green-500 text-white text-2xl leading-4" style="font-family:'impact'">01</div>
                </div>
            </div>
            <div class="bg-green-500 py-24 md:row-span-4 lg:row-span-2 order-first lg:order-none">
            
            </div>
            <div class="flex gap-3 items-end w-full py-24">
                <div class="">
                    <div class="h-16 w-16 rounded-xl flex text-black justify-center items-center lg:bg-opacity-100 lg:bg-green-500 lg:text-white bg-opacity-50 dark:text-gray-100 bg-gray-200 text-2xl leading-4" style="font-family:'impact'">02</div>
                </div>
                <div class="flex-grow text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:font-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci iure natus ipsam quas doloribus impedit quidem soluta temporibus eius recusandae nisi porro, in maiores possimus beatae nemo quisquam. Voluptatum.
                </div>
            </div>
            <div class="flex gap-3 items-end w-full py-24">
                <div class="flex-grow text-gray-400  lg:text-right order-1 lg:order-none first-line:uppercase first-line:tracking-widest first-letter:font-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci iure natus ipsam quas doloribus impedit quidem soluta temporibus eius recusandae nisi porro, in maiores possimus beatae nemo quisquam. Voluptatum.
                </div>
                <div class="">
                    <div class="h-16 w-16 rounded-xl flex justify-center items-center text-white lg:text-black bg-green-500 lg:bg-opacity-50 lg:dark:text-gray-100 lg:bg-gray-200 text-2xl leading-4" style="font-family:'impact'">03</div>
                </div>
            </div>
            <div class="flex gap-3 items-end w-full py-24">
                <div class="">
                    <div class="h-16 w-16 rounded-xl flex justify-center items-center bg-opacity-50 dark:text-gray-100 bg-gray-200 text-2xl leading-4" style="font-family:'impact'">04</div>
                </div>
                <div class="flex-grow text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:font-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci iure natus ipsam quas doloribus impedit quidem soluta temporibus eius recusandae nisi porro, in maiores possimus beatae nemo quisquam. Voluptatum.
                </div>
            </div>
        </div>
    </div>
    <div class="mb-64 py-8 px-3 my-8">
        <div class="max-w-7xl mx-auto bg-gray-200 dark:bg-gray-900 md:px-4 rounded-xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 px-3 py-12">
                <div class="py-8 bg-black"></div>
                <div class="py-8 space-y-5">
                    <div class="text-4xl font-extrabold dark:text-gray-100">I'm <span class="text-yellow-400 font-mono uppercase">skilled</span> @</div>
                    <div class="">
                        <progress-bar-vue  v-for="(skill,i) in 7" :key="i"></progress-bar-vue>
                    </div>
                </div>
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
    import progressBarVue from './inc/progressBar.vue';
    
    

    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
            progressBarVue
        },
        data(){
            return{
                theme:localStorage,
                active : 'services'
            }
        },

        methods: {
        }
    })
</script>
