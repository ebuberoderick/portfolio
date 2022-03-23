<template>
    <Head title="Testimonies"/>
    <div class="py-80 bg-green-500"></div>
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
    

    export default defineComponent({
        components: {
            Head,
            Link,
            menuVue,
            footerVue,
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
