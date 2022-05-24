<template>
    <Head title="Contact Me"/>
    <div class="pt-24 pb-12 bg-green-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 px-3">
            <div class="bg-black py-24"></div>
            <div class="lg:col-span-2 space-y-10">
                <div class="">
                    <div class="text-3xl text-gray-400">Always feel free to</div>
                    <div class="text-green-400 text-6xl font-bold uppercase">reachout to me</div>
                </div>
                <div class="space-y-6 dark:text-gray-200">
                    <div class="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed animi porro, rerum vel praesentium fugit, autem quidem aspernatur distinctio debitis unde. Ipsum repellendus optio ratione eaque placeat, at odit possimus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed animi 
                    </div>
                    <div class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam magni voluptatum hic mollitia assumenda unde, provident laborum accusantium, libero culpa, corrupti ullam ex incidunt possimus? Placeat ipsam praesentium aspernatur alias?
                    </div>
                </div>
                <div class="flex pb-12">
                    <div class="bg-white dark:bg-gray-500 dark:text-gray-100 shadow-lg py-12 px-10 rounded-tl-2xl rounded-br-2xl w-auto relative md:-left-32">
                        Hi, thanks for contacting me 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3">
        <menu-vue :active="active"></menu-vue>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 mb-28">
            <div class="my-auto px-8 sm:px-16 md:px-24 lg:px-0 lg:py-12">
                    <div class="shadow-lg text-white p-5 bg-green-500 divide-y relative top-24 lg:top-0 lg:left-32">
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">E-mail</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Phone</div>
                            <div class="">+234 813 0075 358</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">LinkedIn</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Skype</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Github</div>
                            <div class="">ebuberoderick</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">WhatsApp</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">FaceBook</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Instagram</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Twitter</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                        <div class="py-2 cursor-pointer hover:text-gray-300">
                            <div class="">Telegram</div>
                            <div class="">ebuberoderick2@gmail.com</div>
                        </div>
                    </div>
            </div>
            <div class="md:col-span-2 flex items-center bg-gray-100 dark:bg-gray-800 rounded-3xl px-5 pb-5 pt-28 lg:pl-36 lg:py-5 lg:pr-5">
                <div class="space-y-7 w-full">
                    <div class="">
                        <div class="text-center md:text-4xl font-bold text-green-400 text-xl" style="font-family:'Segoe Script'">leave a quick message</div>
                        <div class="mx-auto max-w-lg text-center text-gray-400 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem et amet enim ipsa adipisci, consequuntur sunt deleniti nesciunt quibusdam temporibus laborum ipsam rerum earum ea quia facilis nobis vitae soluta!
                        </div>
                    </div>
                    <div class="px-3 md:px-16 py-8 space-y-3">
                        <div class="relative group text-gray-400">
                            <span class="absolute h-full text-gray-400 flex items-center pl-2">
                                <i class="ri-account-circle-line my-auto" :class="name?'text-green-500':'group-focus-within:text-green-500'"></i>
                            </span>
                            <label for="name" class="absolute left-8 top-2 rounded-md transition-all duration-100 px-1 dark:bg-gray-500 pointer-events-none bg-white" :class="name?'text-green-500 -top-2 text-xs border border-green-400':'group-focus-within:text-green-400 group-focus-within:-top-2 group-focus-within:text-xs group-focus-within:border group-focus-within:border-green-400'">Enter Full-name</label>
                            <input v-model="nameVal" @keyup="updateName" type="text" id="name" class="w-full outline-none dark:bg-gray-500 rounded-lg pl-8 overflow-hidden focus:border text-green-500 focus:border-green-400 ring-0 focus:outline-none focus:ring-0" :class="name?'border border-green-400':' border-0'">
                        </div>
                        <div class="relative group text-gray-400">
                            <span class="absolute h-full text-gray-400 flex items-center pl-2">
                                <i class="ri-phone-line my-auto" :class="contact?'text-green-500':'group-focus-within:text-green-500'"></i>
                            </span>
                            <label for="contact" class="absolute left-8 top-2 rounded-md transition-all duration-100 px-1 dark:bg-gray-500 pointer-events-none bg-white" :class="contact?'text-green-500 -top-2 text-xs border border-green-400':'group-focus-within:text-green-400 group-focus-within:-top-2 group-focus-within:text-xs group-focus-within:border group-focus-within:border-green-400'">Enter Phone or Mail</label>
                            <input v-model="contactVal" @keyup="updateContact" type="text" id="contact" class="w-full outline-none dark:bg-gray-500 rounded-lg pl-8 overflow-hidden focus:border text-green-500 focus:border-green-400 ring-0 focus:outline-none focus:ring-0" :class="contact?'border border-green-400':' border-0'">
                        </div>
                        <div class="relative group text-gray-400">
                            <span class="absolute h-full text-gray-400 pt-2 pl-2">
                                <i class="ri-message-2-line my-auto" :class="msg?'text-green-500':'group-focus-within:text-green-500'"></i>
                            </span>
                            <label for="msg" class="absolute left-8 top-2 rounded-md transition-all duration-100 px-1 dark:bg-gray-500 pointer-events-none bg-white" :class="msg?'text-green-500 -top-2 text-xs border border-green-400':'group-focus-within:text-green-400 group-focus-within:-top-2 group-focus-within:text-xs group-focus-within:border group-focus-within:border-green-400'">Enter Phone or Mail</label>
                            <textarea v-model="msgVal" @keyup="updateMsg" type="text" id="msg" class="w-full h-96 outline-none dark:bg-gray-500 rounded-lg pl-8 overflow-hidden focus:border text-green-500 focus:border-green-400 ring-0 focus:outline-none focus:ring-0" :class="msg?'border border-green-400':' border-0'"></textarea>
                        </div>
                        <div class="bg-green-500 text-white text-center py-2 uppercase text-lg cursor-pointer hover:bg-green-400">
                            drop message
                        </div>
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
                active : 'contact',
                name : false,
                contact: false,
                msg: false,
                nameVal:'',
                contactVal:'',
                msgVal:'',
            }
        },

        methods: {
            updateName(){
                if(this.nameVal.length > 0){
                    this.name=true
                }else{
                    this.name=false
                }
            },
            updateContact(){
                if(this.contactVal.length > 0){
                    this.contact=true
                }else{
                    this.contact=false
                }
            },
            updateMsg(){
                if(this.msgVal.length > 0){
                    this.msg=true
                }else{
                    this.msg=false
                }
            },


        }
    })
</script>
