<template>
    <div>
        <Head :title="title" />
        <div class="fixed w-72 h-screen top-0 left-0 bg-red-400">
            <auth-nav></auth-nav>
        </div>
        <div class="md:ml-72">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import authNav from '../Pages/inc/authNav.vue';
    

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            Link,
            authNav,
        },

        data() {
            return {
            }
        },

        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
<style scoped>
    @media (min-width: 640px) {
    .xs\:bg-green-90 {
            --tw-bg-opacity: 1;
            background-color: rgba(127, 29, 9, var(--tw-bg-opacity));
        }
    }
</style>
