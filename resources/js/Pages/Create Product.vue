<template>
 <div class="p-10 " >
        <form method="GET" class=" bg-white ">
            <div class="grid grid-cols-2 gap-6" >
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Name</label>
                    <input v-model="product_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Description </label>
                    <input v-model="description" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                  <label class="rounded text-blue-500">Price</label>
                   <input v-model="price" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                 </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">featured image</label>
                    <input v-model="featured_image" type="text" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Slug</label>
                    <input v-model="slug" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
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
                description:'',
                price:'',
                featured_image:'',
                slug:'',
            }
        },
        methods:{
            submit(){
                const payload ={
                    product_name: this.product_name,
                    description: this.description,
                    price: this.price,
                    featured_image: this.featured_image,
                    slug: this.slug,
                   
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