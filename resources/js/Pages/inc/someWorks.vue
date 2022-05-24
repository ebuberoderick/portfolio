<template>
    <div class="mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-green-500 relative md:rounded-r-3xl pb-0 pt-3 overflow-hidden md:py-3 flex flex-col gap-3 items-center">
                <div class="px-3 mt-3">
                    <div class="text-white w-40">
                        Am i the right One ?
                        <hr class="w-2/6 border-white border-2">
                    </div>
                    <div class="text-white text-3xl font-bold">Some awesome<br> projects i have <br class="hidden sm:block lg:hidden"> completed </div>
                </div>
                <img src="imgs/delivery.png" class="md:absolute relative h-96 bottom-0 left-3">
            </div>
            <div class="flex items-center relative">
                <div class="relative md:py-24 md:right-32 w-full">
                    <div class="w-full p-4 text-center grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <div v-for="(works,i) in 3" :key="i" class="p-3 rounded-xl bg-gray-50 dark:bg-gray-600">
                        <div class="h-56"></div>
                        <div class="">
                            <div class="font-bold text-lg dark:text-gray-100">Creative Movers</div>
                            <div class="text-sm text-gray-400 dark:text-gray-300">Website | Mobile App | UI/UX</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{

    }
</script>

<style scoped>
.inset{
    background: #f6f4f6;
    box-shadow: inset 20px 20px 60px #d1cfd1,
            inset -20px -20px 60px #ffffff;
}
</style>