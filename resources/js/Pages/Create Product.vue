<template>
 <div class="p-10 " >
        <form method="GET" class=" bg-white ">
            <div class="grid grid-cols-2 gap-6" >
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Name</label>
                    <input v-model="product_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Type</label>
                    <input v-model="product_type" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                  <label class="rounded text-blue-500">Product ID</label>
                   <input v-model="product_id" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                 </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Company</label>
                    <input v-model="pro_company" type="text" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Base price</label>
                    <input v-model="baseprice" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">    
                    <label class="rounded text-blue-500">selling price price</label>
                    <input v-model="sellingprice" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
              
                <div style="padding-top:30px; padding-left:100px;" >
                <button  @click.prevent="submit"  class="bg-blue-500 rounded bg-cover border-2 p-1  text-white">SUBMIT </button>
                </div>
            </div>
        </form>
    </div>

</template>
<script>
 export default {
        name: "Create product",
        data(){
            return{
                product_name:'',
                product_type:'',
                product_id:'',
                pro_company:'',
                baseprice:'',
                sellingprice:'',
            }
        },
        methods:{
            submit(){
                const payload ={
                    product_name: this.product_name,
                    product_type: this.product_type,
                    product_company: this.product_id,
                    product_id: this.pro_company,
                    base_price: this.baseprice,
                    selling_price: this.sellingprice,
                   
                }
                console.log('Check');
               axios.post('/api/product/create', payload).then(response =>{
                   if(response.status === 200){
                       this.$inertia.get('/table');
                   }
               })
            }
        }
    }







</script>
<style scoped>

</style>