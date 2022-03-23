<template>
    <div class="">
        <div class="uppercase dark:text-white">
            html
        </div>
        <div class="">
            <div class="w-full bg-green-400  bg-opacity-25">
                <div class="px-3 progress-bar-striped text-white bg-green-500 text-center" style="width:70%">
                    70%
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
<style scoped>
    .progress-bar-striped{
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem;
        -webkit-animation: 1s linear infinite progress-bar-stripes;
        animation: 1s linear infinite progress-bar-stripes;
    }
    @-webkit-keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem;
        }
    }
    @keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem;
        }
    }
</style>