<template>
    <div :class="showMenu?'dark:bg-gray-900 bg-transparent dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 backdrop-blur-lg dark:backdrop-blur-lg':'dark:bg-gray-900 md:bg-transparent md:dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 md:backdrop-blur-lg md:dark:backdrop-blur-lg'" class="fixed right-0 top-0 w-screen px-3 z-50 bg-gray-300">
        <div class="flex max-w-7xl mx-auto py-1 items-center">
            <div class="flex-grow text-2xl text-green-400 py-2" style="font-family:'Segoe Script'">bube</div>
            <div class="md:hidden">
                <div class="space-y-1 cursor-pointer py-3 px-2" @click="toggleMenu()">
                    <div class="w-4 h-1 bg-gray-800 dark:bg-gray-500 transition-all duration-1000 delay-100" :class="bar1"></div>
                    <div class="w-7 h-1 bg-gray-800 dark:bg-gray-500"></div>
                    <div class="w-4 h-1 bg-gray-800 dark:bg-gray-500 transition-all duration-1000 delay-100" :class="bar2"></div>
                </div>
            </div>
            <div  :class="showMenu?'-left-72 md:left-0':'left-0'" class="flex pb-16 md:pb-0 flex-col md:flex-row fixed md:relative w-64 md:w-auto left-0 top-0 h-screen md:h-auto bg-gray-300 dark:bg-gray-900 md:bg-transparent md:dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 backdrop-blur-lg dark:backdrop-blur-lg">
                <div class="flex flex-col md:flex-row flex-grow">
                    <Link :href="'welcome'" @mouseenter="hovered = 'welcome'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='welcome' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='welcome' ? 'text-green-400':''">welcome</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='welcome'" :class="hovered =='welcome'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="'about'" @mouseenter="hovered = 'about'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='about' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='about' ? 'text-green-400':''">about</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='about'" :class="hovered =='about'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="'services'" @mouseenter="hovered = 'services'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='services' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='services' ? 'text-green-400':''">services</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='services'" :class="hovered =='services'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="'works'" @mouseenter="hovered = 'works'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='works' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='works' ? 'text-green-400':''">works</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='works'" :class="hovered =='works'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="'testimony'" @mouseenter="hovered = 'testimonies'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='testimonies' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='testimonies' ? 'text-green-400':''">testimonies</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='testimonies'" :class="hovered =='testimonies'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="'contact'" @mouseenter="hovered = 'contact'" @mouseleave="hovered = ''" class="relative px-3 py-3 md:py-0 md:px-12 cursor-pointer overflow-hidden md:text-center">
                        <div class="md:absolute w-full top-2 right-0 capitalize " :class="hovered=='contact' ? 'text-green-400': 'dark:text-gray-300'">
                            <span :class="active=='contact' ? 'text-green-400':''">contact</span>
                            <div class="relative">
                                <div class="absolute w-full">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative transition-all duration-200" v-if="active !='contact'" :class="hovered =='contact'?'top-1':'top-8'">
                                    <hr class="h-1 md:w-1/3 border-transparent bg-green-400 mx-auto relative top-1 transition-all duration-200" v-else>
                                </div>
                            </div>
                        </div>
                    </Link>
                </div>
                <div class="px-3 relative md:px-0 flex items-center h-10 w-32 overflow-hidden">
                    <div class="h-10 w-10 flex justify-center items-center transform hover:rotate-180 transition-all duration-300 neum dark:neum cursor-pointer mt-0 text-green-600 dark:text-gray-200" @click="toggleTheme()" @mouseenter="toggleBtn = true" @mouseleave="toggleBtn = false">
                        <i class="ri-sun-line dark:hidden transition-all duration-200"></i>
                        <i class="ri-moon-fill hidden dark:block transition-all duration-200"></i>
                    </div>
                    <div class="bg-gray-300 dark:bg-gray-600 p-1 absolute px-6 rounded-lg transition-all duration-200" :class="toggleBtn?'left-8 md:left-6 ':'right-32'" style="z-index: -9;top:3px">
                        <div class="hidden dark:block text-gray-300">Dark</div>
                        <div class="dark:hidden">Light</div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';
    export default {
        components:{
            Link
        },
        data() {
            return {
                hovered:'',
                toggleBtn: false,
                bar1:'mx-auto',
                bar2:'mx-auto',
                showMenu:true,
            }
        },
        props : {
            active : String
        },
        methods: {
            toggleTheme(){
                let htmlClasses = document.querySelector('html').classList;
                if(localStorage.theme == 'dark'){
                    localStorage.removeItem('theme')
                    htmlClasses.remove('dark')
                    this.darkMode = false;
                }else{
                    localStorage.theme = 'dark';
                    htmlClasses.add('dark');
                    this.darkMode = true;
                }
            },
            toggleMenu(){
                if (this.showMenu) {
                    this.bar1='ml-auto'
                    this.bar2=''
                    this.showMenu = false
                } else {
                    this.bar1='mx-auto'
                    this.bar2='mx-auto'
                    this.showMenu = true
                }
            },
        }
    }
</script>

<style scoped>
    .neum{
        border-radius: 50px;
        background: linear-gradient(145deg, #dddddd, #ffffff);
    }
    .dark .dark\:neum {
        background: linear-gradient(145deg, #959595, #cccaca);
    }
</style>