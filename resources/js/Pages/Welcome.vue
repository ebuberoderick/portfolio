<template>
    <Head title="Welcome" />
    <div class="bg-gray-300 to dark:bg-red-300" @click="toggleTheme()">
        fdkflklkf
    </div>
</template>

<style scoped>
    
</style>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
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
            }
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
            }
        }
    })
</script>
