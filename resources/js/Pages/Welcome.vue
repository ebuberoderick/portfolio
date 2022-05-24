<template>
    <Head title="Welcome"/>
    <div class="h-screen p-3 flex items-center w-full relative">
        <menu-vue :active="active"></menu-vue>
        <div class="p-3 w-full grid grid-cols-1 lg:grid-cols-2 max-w-7xl mx-auto">
            <div class="lg:order-2 bg-black">

            </div>
            <div class="space-y-2">
                <div class="text-3xl dark:text-gray-200">
                    Welcome! I'm Bube
                </div>
                <div class="text-6xl font-extrabold text-gray-700 dark:text-gray-50 capitalize">software <span class="text-green-600 underline">developer</span></div>
                <div class="max-w-md text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-5xl first-letter:font-bold first-letter:text-gray-500 first-letter:mr-3 first-letter:float-left">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus vero provident enim explicabo sapiente, hic officia nobis deleniti, expedita labore vel. Laborum ipsam in 
                </div>
                <div class="flex items-center gap-3">
                    <Link :href="'about'" class="py-2 px-8 text-lg text-white cursor-pointer bg-green-400">About Me</Link>
                    <a href="https://github.com/ebuberoderick" target="blank" class=""><i class="ri-facebook-circle-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank" class=""><i class="ri-whatsapp-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank" class=""><i class=" ri-linkedin-box-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank" class=""><i class="ri-github-line text-3xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 flex justify-center items-center w-screen right-0 animate-bounce text-gray-400">
            <div class="h-16 text-center shadow-lg shadow-green-900 border-gray-400 relative rounded-full border-2" style="">
                <span class="text-3xl relative -bottom-6">&darr;</span>
            </div>
        </div>
    </div>
    <div class="p-3 py-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 lg:gap-x-0">
                <div class="p-5 sm:col-span-2 lg:col-span-2 md:col-span-3">
                    <div class="flex w-full">
                        <div class="flex-grow space-y-4">
                            <div class="text-6xl font-extrabold text-gray-900">
                                <div class="dark:text-gray-400">My awesome</div>
                                <div class="text-yellow-400" style="text-shadow:2px 2px 8px #ff0000">Services</div>
                            </div>
                            <div class="max-w-xl text-sm text-gray-400">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet eum expedita possimus ipsa magnam laudantium aliquid.
                            </div>
                            <div class="space-x-3">
                                <span class="text-lg cursor-pointer px-4 py-2 bg-green-400 uppercase text-white">download cv</span>
                                <span class="text-lg cursor-pointer px-4 py-2 bg-yellow-400 uppercase text-white">hire me</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class=" p-2 lg:px-5 flex justify-center items-center sm:row-span-2 md:row-span-1">
                    <div class="bg-gray-50 relative bottom-0 lg:bottom-8 dark:bg-gray-500 w-full text-center rounded-lg p-8 shadow-lg border border-green-300 space-y-3">
                        <div class="dark:text-gray-200 cursor-default">
                            <i class="ri-macbook-line text-5xl"></i>
                            <div class="font-bold text-xl relative bottom-3">WEB DEVELOPMENT</div>
                        </div>
                        <div class="text-sm text-gray-400 cursor-default">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. deleniti nisi quae aliquam necessitatibus facere Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa, sapiente facere possimus
                        </div>
                        <div class="">
                            <div class="uppercase text-lg bg-white dark:bg-gray-800 py-2 cursor-pointer text-green-400">learn more</div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block"></div>
                <div class="justify-end md:col-span-2 gap-3 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-2">
                        <div class="bg-gray-50 dark:bg-gray-500 w-full relative bottom-0 sm:bottom-16 md:bottom-0 lg:bottom-24 text-center rounded-lg p-8 shadow-lg border border-yellow-300 space-y-3" style="z-index: -1;">
                            <div class="dark:text-gray-200 cursor-default">
                                <i class="ri-smartphone-line text-5xl"></i>
                                <div class="font-bold text-xl relative bottom-3">MOBILE DEVELOPMENT</div>
                            </div>
                            <div class="text-sm text-gray-400 cursor-default">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi voluptate deleniti nisi quae aliquam necessitatibus facere Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa, sapiente facere possimus
                            </div>
                            <div class="">
                                <div class="uppercase text-lg bg-white dark:bg-gray-800 py-2 cursor-pointer text-yellow-400">learn more</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:mr-12">
                        <div class="bg-gray-50 dark:bg-gray-500 w-full text-center rounded-lg p-8 shadow-lg border border-blue-300 space-y-3">
                            <div class="dark:text-gray-200 cursor-default">
                                <i class="ri-article-line text-5xl"></i>
                                <div class="font-bold text-xl relative bottom-3">UI/UX DESIGN</div>
                            </div>
                            <div class="text-sm text-gray-400 cursor-default">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi voluptate deleniti nisi quae aliquam necessitatibus facere Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa, sapiente facere possimus
                            </div>
                            <div class="">
                                <div class="uppercase text-lg bg-white dark:bg-gray-800 py-2 cursor-pointer text-blue-400">learn more</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 px-3 lg:px-0">
        <div class="md:w-3/4 lg:ml-auto relative mx-auto lg:mx-0 p-8 bg-green-50 dark:bg-gray-400 grid lg:grid-cols-3">
            <div class="py-4">
                <div class="lg:absolute lg:w-1/2 mx-auto h-full top-0 flex items-center lg:-left-44 xl:-left-72">
                    <div class="bg-black w-full h-96"></div>
                </div>
            </div>
            <div class="lg:col-span-2 space-y-8">
                <div class="font-bold text-4xl dark:text-gray-200">WHY HIRE <span class="text-blue-900">ME?</span></div>
                <div style="">
                    <div class="p-8 pt-0 border-l-2 border-blue-800 relative before:absolute before:w-3 before:bg-yellow-400 before:h-3 before:-top-1 before:rounded-full before:-left-1 after:absolute after:w-3 after:bg-blue-300 after:h-3 after:-top-1 after:rounded-full after:-left-2">
                        <div class="font-bold text-3xl relative bottom-4">Quick Delivery </div>
                        <div class="max-w-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut labore repellat eum ab beatae nobis ratione consequuntur necessitatibus quasi eaque maxime aliquid ex et laboriosam a, expedita ducimus magnam incidunt.</div>
                    </div>
                    <div class="p-8 pt-0 border-l-2 border-blue-800 relative before:absolute before:w-3 before:bg-yellow-400 before:h-3 before:-top-1 before:rounded-full before:-left-1 after:absolute after:w-3 after:bg-blue-300 after:h-3 after:-top-1 after:rounded-full after:-left-2">
                        <div class="font-bold text-3xl relative bottom-4">Best Price Rate </div>
                        <div class="max-w-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut labore repellat eum ab beatae nobis ratione consequuntur necessitatibus quasi eaque maxime aliquid ex et laboriosam a, expedita ducimus magnam incidunt.</div>
                    </div>
                    <div class="p-8 pt-0 border-l-2 border-blue-800 relative before:absolute before:w-3 before:bg-yellow-400 before:h-3 before:-top-1 before:rounded-full before:-left-1 after:absolute after:w-3 after:bg-blue-300 after:h-3 after:-top-1 after:rounded-full after:-left-2">
                        <div class="font-bold text-3xl relative bottom-4">Fantastic UI & UX</div>
                        <div class="max-w-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut labore repellat eum ab beatae nobis ratione consequuntur necessitatibus quasi eaque maxime aliquid ex et laboriosam a, expedita ducimus magnam incidunt.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 px-3 my-8">
        <div class="max-w-7xl mx-auto bg-gray-200 dark:bg-gray-900 md:px-4 rounded-xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 px-3 py-12">
                <div class="py-8 bg-black"></div>
                <div class="py-8 space-y-5">
                    <div class="text-4xl font-extrabold dark:text-gray-100">I'm <span class="text-yellow-400 font-mono uppercase">skilled</span> @</div>
                    <div class="">
                        <progress-bar-vue  v-for="(skill,i) in 5" :key="i"></progress-bar-vue>
                    </div>
                    <div class="">
                        <span class="text-lg cursor-pointer px-4 py-2 bg-green-400 uppercase text-white">view all skill</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <div class="text-center text-4xl font-bold text-green-400" style="font-family:'Segoe Script'">i've worked with</div>
        <div class="max-w-2xl mx-auto text-gray-400 text-center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi tempore possimus reiciendis doloribus impedit rem distinctio quam pariatur officiis facilis omnis reprehenderit, dignissimos laborum veritatis ipsam! Explicabo quia quam voluptates?
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 text-center">
            <div class="hidden xl:block"></div>
            <div class="py-5"><img class="w-20 mx-auto h-16 cursor-pointer" src="imgs/index2.png" alt="skyrootnet" style="filter: grayscale(100%);"></div>
            <div class="py-5"><img class="w-24 mx-auto h-16 cursor-pointer" src="imgs/index.png" alt="programmers city" style="filter: grayscale(100%);"></div>
            <div class="py-5"><img class="w-16 mx-auto h-16 cursor-pointer" src="imgs/cielogo.png" alt="cie" style="filter: grayscale(100%);"></div>
            <div class="py-5"><img class="w-28 mx-auto h-12 cursor-pointer" src="imgs/logo.png" alt="lieresulte" style="filter: grayscale(100%);"></div>
            <div class="hidden xl:block"></div>
        </div>
        <div class="relative">
            <div class="text-center text-4xl font-bold text-green-400" style="font-family:'Segoe Script'">Some projects i've worked on</div>
            <div class="max-w-2xl mx-auto text-gray-400 text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi tempore possimus reiciendis doloribus impedit rem distinctio quam pariatur officiis facilis omnis reprehenderit, dignissimos laborum veritatis ipsam! Explicabo quia quam voluptates?
            </div>
        </div>
    </div>
    <some-works-vue></some-works-vue>
    <div class="max-w-7xl mx-auto">
        <div class="py-12 pb-40 px-3 space-y-8">
            <div class="">
                <div class="text-center text-4xl font-bold text-green-400" style="font-family:'Segoe Script'">What people say about me</div>
                <div class="max-w-2xl mx-auto text-gray-400 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi tempore possimus reiciendis doloribus impedit rem distinctio quam pariatur officiis facilis omnis reprehenderit, dignissimos laborum veritatis ipsam! Explicabo quia quam voluptates?
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 py-8">
                    <testimonyVue v-for="(testimony,i) in 3" :key="i"></testimonyVue>
                </div>
                <div class="text-right">
                    <Link :href="'testimony'" class="text-lg cursor-pointer px-4 py-2 bg-green-600 uppercase text-white rounded-tl-lg rounded-br-lg">read more</Link>
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
    import testimonyVue from './inc/testimony.vue';
    import someWorksVue from './inc/someWorks.vue';
    
    

    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
            progressBarVue,
            testimonyVue,
            someWorksVue,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        },
        data(){
            return{
                theme:localStorage,
                active : 'welcome'
            }
        },

        methods: {
        }
    })
</script>
