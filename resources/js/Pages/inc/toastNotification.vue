<template>
    <div>
        <div class="fixed transition-all duration-500 z-50" :class="toastPosition">
            <div class="w-96 h-24 bg-gray-50 shadow-lg dark:bg-gray-700 p-3 flex">
                <div class="w-8 iconType flex justify-center items-center">
                    <div v-if="toastdata.status" class="text-green-500 text-3xl" v-html="success"></div>
                    <div v-else class="text-red-500 text-3xl" v-html="error"></div>
                </div>
                <div class="flex-grow flex flex-col justify-center h-full">
                    <div class="font-bold text-2xl capitalize" :class="toastdata.status =='success' ? 'text-green-400':'text-red-300'">{{ toastdata.status }}</div>
                    <div class="text-gray-400">{{ toastdata.message }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    components: {
        
    },
    props:{
        toastdata:Object,
        toast_type:Number,
        toast_inteval:Number
    },
    data(){
        return{
            toastPosition:'',
            success:`<svg version="1.1" id="Warstwa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 430 430" style="enable-background:new 0 0 430 430;" xml:space="preserve">
                    <g>
                        <path class="st0" d="M215,381.52c-91.82,0-166.52-74.7-166.52-166.52c0-21.57,4.06-42.56,12.08-62.39
                            c12.29-30.4,33.13-56.32,60.26-74.96C148.6,58.57,181.17,48.48,215,48.48c91.82,0,166.52,74.7,166.52,166.52
                            S306.82,381.52,215,381.52z M215,61.08c-63.08,0-119.12,37.78-142.76,96.26v0c-7.41,18.32-11.16,37.72-11.16,57.66
                            c0,84.87,69.05,153.92,153.92,153.92S368.92,299.87,368.92,215S299.87,61.08,215,61.08z M66.4,154.98L66.4,154.98L66.4,154.98z"/>
                        <path class="st1" d="M176.53,291c-1.54,0-3.09-0.58-4.28-1.74c-0.29-0.28-29.09-28.28-57.42-56.5c-2.4-2.39-2.41-6.28-0.02-8.68
                            c2.39-2.4,6.28-2.41,8.68-0.02c21.92,21.83,44.12,43.54,53.13,52.32c19.21-17.92,98.16-91.83,135.85-131.27
                            c0.14-0.15,0.3-0.32,0.46-0.49c2.28-2.51,6.16-2.7,8.67-0.42c2.51,2.28,2.7,6.16,0.42,8.67c-0.21,0.23-0.43,0.47-0.65,0.7
                            c-43.15,45.15-139.69,134.88-140.66,135.78C179.53,290.45,178.03,291,176.53,291z"/>
                    </g>
                    </svg>`,
            error:``,
        }
    },
    methods:{
       toast(){
           if (this.toast_type == '1' ) { //top right
                this.toastPosition='top-3 -right-96'
            }else if (this.toast_type == '2' ) { //top left
                this.toastPosition='top-3 -left-96'
            }else if (this.toast_type == '3' ) { //bottom left
                this.toastPosition='bottom-3 -left-96'
            }else { //bottom right
                this.toastPosition='bottom-3 -right-96'
            }
       },
       onToast(){
           if (this.toast_type == '1' ) { //top right
                this.toastPosition='top-3 right-1'
            }else if (this.toast_type == '2' ) { //top left
                this.toastPosition='top-3 left-1'
            }else if (this.toast_type == '3' ) { //bottom left
                this.toastPosition='bottom-3 left-1'
            }else { //bottom right
                this.toastPosition='bottom-3 right-1'
            }
       },
       offToast(){
           if (this.toast_type == '1' ) { //top right
                this.toastPosition='top-3 -right-96'
            }else if (this.toast_type == '2' ) { //top left
                this.toastPosition='top-3 -left-96'
            }else if (this.toast_type == '3' ) { //bottom left
                this.toastPosition='bottom-3 -left-96'
            }else { //bottom right
                this.toastPosition='bottom-3 -right-96'
            }
       }
    },
    mounted(){
        if(this.toast_inteval == null || ''){
            this.toast_inteval = 5000
        }
        var offToast = setInterval(() => {
            this.offToast()
            clearInterval(offToast)
        }, 5000);
        var onToast = setInterval(() => {
            this.onToast();
            clearInterval(onToast)
        }, 500);
        this.toast()
    }
};
</script>

<style scoped>
    .st0{fill:#121331;}
	.st1{fill:#08A88A;}
	.st2{fill:none;stroke:#08A88A;stroke-width:12.25;stroke-miterlimit:14;}
	.st3{fill-opacity:0;}
	.st4{fill:#131432;}
	.st5{fill:none;}
</style>