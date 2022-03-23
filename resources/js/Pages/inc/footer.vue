<template>
    <div class="bg-green-200 dark:bg-gray-400 dark:text-white">
        <div class="max-w-7xl mx-auto px-3 md:px-8 pb-6 space-y-3">
            <div class="bg-white dark:bg-gray-600 transform rotate-180 shadow-lg px-4 relative bottom-24 overflow-hidden">
                <div class="transform -rotate-180 grid grid-cols-1 md:grid-cols-2">
                    <div class="py-20 px-4">
                        <div class="uppercase text-4xl font-bold">get in touch now</div>
                        <div class="space-y-6">
                            <div>
                                Contact me for any software development, Be it Moblie Application(ios/Andorid), Website and UI/UX. <br> Always ready to speak with you +234 813 0075 358
                            </div>
                            <div class="">
                                <Link :href="'contact'" class="uppercase py-3 px-5 text-white cursor-pointer bg-green-500">More Contact <i class="ri-arrow-right-line relative top-1"></i></Link>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        sdfjk
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 relative bottom-9 lg:grid-cols-5 gap-5">
                <div class="lg:col-span-2">
                    <div class="text-4xl">
                        Bube
                    </div>
                    <div class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam et ratione assumenda facere. Id fugiat eligendi est odio eveniet amet earum dicta, cum hic voluptatem rem sunt voluptas? Nulla, dolor.
                    </div>
                    <img src="imgs/myQR.png" alt="website QR_code" class="w-24 h-24 pointer-events-none" style="pointer-events:none !important">
                </div>
                <div class="lg:col-span-3 grid gap-3 grid-cols-1 md:grid-cols-4 sm:grid-cols-2 lg:grid-cols-2 ">
                    <div class="py-5">
                        <div class="text-2xl font-bold">Social</div>
                        <div class="text-gray-500 dark:text-gray-300 capitalize grid">
                            <a href="https://github.com/ebuberoderick" target="blank" class="hover:text-gray-700">linkedin</a>
                            <a href="https://github.com/ebuberoderick" target="blank" class="hover:text-gray-700">facebook</a>
                            <a href="https://github.com/ebuberoderick" target="blank" class="hover:text-gray-700">twitter</a>
                            <a href="https://github.com/ebuberoderick" target="blank" class="hover:text-gray-700">whatsapp</a>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="text-2xl font-bold">I'm ready For</div>
                        <div class="text-gray-500 dark:text-gray-300">
                            <div class="">Remote Job</div>
                            <div class="">Freelancing</div>
                            <div class="">Contract</div>
                            <div class="">Software consultant</div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="text-2xl font-bold">Address</div>
                        <div class="text-gray-500 dark:text-gray-300">
                            NO.10 Ejerenwa street,Oyigbo Rivers State, Nigeria
                        </div>
                    </div>
                    <div class="py-5">
                        <span class="uppercase py-2 px-5 text-white cursor-pointer bg-green-500">download cv</span>
                    </div>
                </div>
            </div>
            <hr class="border-green-600 dark:border-gray-100 border-2 border-dotted">
            <div class="flex flex-col md:flex-row justify-center items-center">
                <div class="flex-grow">Copyright Bube </div>
                <div class="flex gap-3">
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-facebook-circle-line text-xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-whatsapp-line text-xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class=" ri-linkedin-box-line text-xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
                    <a href="https://github.com/ebuberoderick" target="blank"  class=""><i class="ri-github-line text-xl relative top-1 dark:text-gray-300 cursor-pointer hover:scale-75"></i></a>
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
    }
}
</script>

<style>

</style>