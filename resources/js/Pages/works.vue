<template>
    <Head title="My Works"/>
    <div class="h-screen p-3 flex items-center w-full relative">
        <menu-vue :active="active"></menu-vue>
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
                active : 'works'
            }
        },

        methods: {
        }
    })
</script>
