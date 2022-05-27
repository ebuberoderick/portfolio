<template>
    <div class="w-full h-full overflow-auto md:overflow-visible flex flex-col px-5 bg-gray-300 dark:bg-gray-900 bg-transparent dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 backdrop-blur-lg dark:backdrop-blur-lg">
        <div class="py-7"></div>
        <div class="flex-grow md:overflow-y-auto space-y-3 pt-4">
            <Link :href="'qkeefaewwrjvnjsdcvwejkcjwke'" class="flex gap-3 items-center group cursor-pointer" :class="active == 'Dashboard'?'pl-5 text-green-600 dark:text-green-400':'hover:pl-5 hover:text-green-600 text-gray-500 dark:text-gray-300'">
                <div class="h-8 w-8  rounded-full group-hover:bg-green-400 group-hover:text-white" :class="active == 'Dashboard'?'bg-green-400':'bg-gray-400'"></div>
                <div class="flex-grow relative" style="top:1px">Dashboard</div>
            </Link>
            <Link :href="'sdsadcvksvsefvhecresdkscfjh'" class="flex gap-3 items-center group cursor-pointer" :class="active == 'jobs'?'pl-5 text-green-600 dark:text-green-400':'hover:pl-5 hover:text-green-600 text-gray-500 dark:text-gray-300'">
                <div class="h-8 w-8  rounded-full group-hover:bg-green-400 group-hover:text-white" :class="active == 'jobs'?'bg-green-400':'bg-gray-400'"></div>
                <div class="flex-grow relative" style="top:1px">Manage Jobs</div>
            </Link>
            <Link :href="'oierfoijsadocjoweireogierot'" class="flex gap-3 items-center group cursor-pointer" :class="active == 'reviews'?'pl-5 text-green-600 dark:text-green-400':'hover:pl-5 hover:text-green-600 text-gray-500 dark:text-gray-300'">
                <div class="h-8 w-8  rounded-full group-hover:bg-green-400 group-hover:text-white" :class="active == 'reviews'?'bg-green-400':'bg-gray-400'"></div>
                <div class="flex-grow relative" style="top:1px">Manage Reviews</div>
            </Link>
            <Link :href="'ljkaefjknejrcwkejvujnieurcv'" class="flex gap-3 items-center group cursor-pointer" :class="active == 'skills'?'pl-5 text-green-600 dark:text-green-400':'hover:pl-5 hover:text-green-600 text-gray-500 dark:text-gray-300'">
                <div class="h-8 w-8  rounded-full group-hover:bg-green-400 group-hover:text-white" :class="active == 'skills'?'bg-green-400':'bg-gray-400'"></div>
                <div class="flex-grow relative" style="top:1px">Manage Skills</div>
            </Link>
            <Link :href="'hdhsfvlkocdfvkolekrvmkioero'" class="flex gap-3 items-center group cursor-pointer xl:hidden" :class="active == 'message'?'pl-5 text-green-600 dark:text-green-400':'hover:pl-5 hover:text-green-600 text-gray-500 dark:text-gray-300'">
                <div class="h-8 w-8  rounded-full group-hover:bg-green-400 group-hover:text-white" :class="active == 'message'?'bg-green-400':'bg-gray-400'"></div>
                <div class="flex-grow relative" style="top:1px">Quick Messages</div>
            </Link>
        </div>
        <div class="py-3 space-y-1 relative">
            <div class="flex flex-col relative bottom-1 md:bottom-2 justify-center space-y-4 md:h-60">
                <div class="overflow-hidden relative hidden dark:block">
                    <span class="cursor-pointer group" @click="toggleTheme()">
                        <span class="p-3 text-white z-50 bg-gray-500 rounded-md inline-flex">
                            <i class="ri-sun-line dark:hidden transform hover:rotate-180 transition-all duration-300"></i>
                            <i class="ri-moon-fill hidden dark:block transform hover:rotate-180 transition-all duration-300"></i>
                        </span>
                        <span class="bg-gray-300 px-3 py-2 relative rounded-r-lg group-hover:-left-2 -left-20 transition-all duration-300 cursor-pointer" style="bottom:3.5px;z-index: -9999">
                            dark
                        </span>
                    </span>
                </div>
                <div class="overflow-hidden relative dark:hidden">
                    <span class="cursor-pointer group" @click="toggleTheme()">
                        <span class="p-3 text-white z-50 bg-gray-500 rounded-md inline-flex">
                            <i class="ri-sun-line dark:hidden transform hover:rotate-180 transition-all duration-300"></i>
                            <i class="ri-moon-fill hidden dark:block transform hover:rotate-180 transition-all duration-300"></i>
                        </span>
                        <span class="bg-gray-300 px-3 py-2 relative rounded-r-lg group-hover:-left-2 -left-20 transition-all duration-300 cursor-pointer" style="bottom:3.5px;z-index: -9999">
                            light
                        </span>
                    </span>
                </div>
                <div class="overflow-hidden relative">
                    <span class="cursor-pointer group">
                        <span class="p-3 text-white z-50 bg-purple-500 rounded-md inline-flex">
                            <i class="ri-line-chart-line"></i>
                        </span>
                        <span class="bg-purple-300 px-3 py-2 relative rounded-r-lg group-hover:-left-2 -left-20 transition-all duration-300 cursor-pointer" style="bottom:3.5px;z-index: -9999">traffic</span>
                    </span>
                </div>
                <div class="overflow-hidden relative">
                    <span @click="logout()" class="cursor-pointer group">
                        <span class="p-3 text-white z-50 bg-red-500 rounded-md inline-flex">
                            <i class="ri-login-box-line "></i>
                        </span>
                        <span @click="logout()" class="bg-red-300 px-3 py-2 relative rounded-r-lg group-hover:-left-2 -left-20 transition-all duration-300 cursor-pointer" style="bottom:3.5px;z-index: -9999">logout</span>
                    </span>
                </div>
            </div>
            <div class="md:absolute w-full h-60 rounded-3xl bg-green-400 md:bottom-5 md:left-36"></div>
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
            toggleBtn: false
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
        logout() {
            this.$inertia.post(route('logout'));
        },
    },
}
</script>

<style>

</style>