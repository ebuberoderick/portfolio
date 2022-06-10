<template>
    <Head title="About"/>
    <div class="p-3 pt-28 flex items-center w-full relative">
        <menu-vue :active="active"></menu-vue>
        <div class="p-3 w-full grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 max-w-7xl mx-auto gap-3">
            <div class="py-60 bg-black col-span-2 order-2 md:order-5 lg:col-span-3 flex w-full h-full justify-center items-end row-span-2 transition-all duration-1000"></div>
            <div class="col-span-2 order-1 md:order-1 lg:col-span-2 transition-all duration-1000">
                <div class="capitalize text-3xl dark:text-gray-200">hi i'm</div>
                <div class="text-3xl lg:text-4xl xl:text-5xl font-extrabold text-teal-500 capitalize">
                    <div class="">onyemzoro</div>
                    <div class="">ebube roderick</div>
                </div>
            </div>
            <div class="text-gray-600 relative md:right-6 dark:text-gray-400 flex flex-col text-center justify-center order-3 md:order-2 transition-all duration-1000">
                <div class="">UI/UX Designer</div>
                <div class="">Software Developer</div>
            </div>
            <div class="flex flex-col md:flex-row gap-2 relative left-0 sm:left-5 md:left-0 justify-center items-center md:items-end dark:text-gray-500 text-gray-300 order-5 md:order-3 lg:col-span-2 transition-all duration-1000">
                <div class="text-gray-400 dark:text-gray-500">
                    <div class="">Worked</div>
                    <div class="">with</div>
                </div>
                <span class="text-6xl">10+</span>
                <div class="pt-8 text-gray-400 dark:text-gray-500 relative -top-10 md:top-0 md:right-4">companies</div>
            </div>
            <div class="order-4 md:order-6 transition-all duration-1000 text-xl uppercase text-right dark:text-gray-300">
                <div class="">UI/UX Designer</div>
                <div class="">mobile app</div>
                <div class="">web developer</div>
            </div>
            <div class="transition-all order-6 md:order-4 duration-1000 text-gray-400 text-right md:text-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
            <div class="order-8 md:order-8 transition-all duration-1000">
                <div class="grid grid-cols-2 sm:grid-cols-4 text-right sm:text-center md:text-left gap-3">
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-facebook-circle-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-whatsapp-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class=" ri-linkedin-box-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-github-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                </div>
            </div>
            <div class="order-7 md:order-7 transition-all duration-1000 flex justify-center items-center dark:text-gray-500 text-gray-300">
                <span class="text-6xl">5+</span>
                <div class="text-gray-400 dark:text-gray-500">
                    <div class="">Years</div>
                    <div class="">experience</div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 h-screen">
        <div class=""></div>
        <div class="h-3/4 my-auto overflow-hidden relative">
            <div class="bg-gray-400 round absolute -right-40 rotate-45"></div>
        </div>
    </div>
    <div class="pb-28">
        
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
    
    

    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
        },
        data(){
            return{
                theme:localStorage,
                active : 'about'
            }
        },

        methods: {
        }
    })
</script>
 <style scoped>
    .round{
        border-radius: 100px;
        height: 100px;
        width: 100px;
    }
 </style>