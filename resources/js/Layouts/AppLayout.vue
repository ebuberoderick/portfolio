<template>
    <div>
        <Head :title="title" />
        <div class="py-2 sticky top-0 z-50 bg-gray-300 dark:bg-gray-900 bg-transparent dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 backdrop-blur-lg dark:backdrop-blur-lg">
            <div class="max-w-7xl mx-auto px-3">
                <div class="flex w-full items-center">
                    <div class="flex-grow text-2xl text-teal-400" style="font-family:'Segoe Script'">bube</div>
                    <div class="flex items-center gap-3">
                        <div class="relative cursor-pointer">
                            <div style="font-size:10px" class="py-1 px-2 left-2 text-white rounded-full bg-red-500 absolute">
                                1
                                <div class="relative w-full h-full">
                                    <div class="w-ful h-full p-1 left-2 rounded-full animate-ping bg-red-500 absolute"></div>
                                </div>
                            </div>
                            <i class="ri-notification-2-line text-xl dark:text-gray-300 cursor-pointer"></i>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div class="capitalize text-sm dark:text-white">
                                onyemzoro ebube
                            </div>
                            <div class="h-10 w-10 rounded-full bg-no-repeat bg-cover bg-[url('/imgs/6706352.png')]"></div>
                        </div>
                        <div class="md:hidden">
                            <div class="space-y-1 cursor-pointer py-3 px-2" @click="toggleMenu()">
                                <div class="w-4 h-1 bg-gray-800 dark:bg-gray-500 transition-all duration-700 delay-100" :class="bar1"></div>
                                <div class="w-7 h-1 bg-gray-800 dark:bg-gray-500"></div>
                                <div class="w-4 h-1 bg-gray-800 dark:bg-gray-500 transition-all duration-700 delay-100" :class="bar2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="fixed flex flex-col w-72 h-screen top-0 transition-all duration-300" :class="showMenu?'-left-72 md:left-0':'left-0'">
                <auth-nav :active="active"></auth-nav>
            </div>
            <div class="md:ml-72">
                <div class="">
                    <div class="xl:mr-96 p-3">
                        <slot></slot>
                        <!-- <div class="absolute w-full h-full bg-white top-0 left-0" v-if="traffic"></div> -->
                    </div>
                    <div class="fixed hidden xl:block w-96 h-screen top-0 right-0">
                        <div class="flex h-full w-full flex-col">
                            <div class="py-8"></div>
                            <div class="capitalize font-bold text-lg dark:text-gray-50">quick messages</div>
                            <div class="flex-grow p-3 overflow-y-auto space-y-3">
                                <div v-for="(message,i) in messages" :key="i" class="p-3 rounded-md shadow-md dark:shadow-gray-600    border dark:border-gray-600 cursor-pointer">
                                    <div class="capitalize text-lg dark:text-gray-200 relative">{{ message.fullname }} <div class="absolute top-1 right-1 text-xs">2 seconds ago</div></div>
                                    <div class="text-teal-500">{{ message.contact }} </div>
                                    <div class="truncate text-gray-400 dark:text-gray-300">{{ message.message }} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import authNav from '../Pages/inc/authNav.vue';
import axios from 'axios';
    

    export default defineComponent({
        props: {
            title: String,
            active: String
        },
        components: {
            Head,
            Link,
            authNav,
        },
        data() {
            return {
                messages:[],
                bar1:'mx-auto',
                bar2:'mx-auto',
                showMenu:true,
                traffic:false
            }
        },
        beforeMount() {
            this.fetchMessages()
        },
        methods: {
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
            fetchMessages(){
                axios.post('/fetchMessages').then((res) => {
                    this.messages = res.data.data
                })
            },
            traffic(){

            },
            
        },
    })
</script>
<style scoped>
    .nuum{
        border-radius: 12px;
        background: #ffffff;
        box-shadow:  22px 22px 44px #f5f5f5,-22px -22px 44px #ffffff;
    }
    .dark .dark\:nuum {
        border-radius: 12px;
        background: #374151;
        box-shadow:  24px 24px 48px #2c3441,-24px -24px 48px #424e61;
    }
    @media (min-width: 640px) {
    .xs\:bg-teal-90 {
            --tw-bg-opacity: 1;
            background-color: rgba(127, 29, 9, var(--tw-bg-opacity));
        }
    }
</style>
