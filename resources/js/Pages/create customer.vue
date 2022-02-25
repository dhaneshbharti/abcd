<template>
 <div class="p-10 " >
        <div>  kindly create your account first</div>
        <form method="POST" class=" bg-white ">
            <div class="grid grid-cols-2 gap-6" >
                <div class="w-full">
                    <label class="rounded text-blue-500"> Name</label>
                    <input v-model="c_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Father's name</label>
                    <input v-model="f_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                  <label class="rounded text-blue-500">phone</label>
                   <input v-model="number" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                 </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Email</label>
                    <input v-model="email" type="text" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">address</label>
                    <input v-model="address" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div style="padding-top:30px; padding-left:100px;">
                <button  @click.prevent="submit"  class="bg-blue-500 rounded bg-cover border-2 p-1  text-white">SUBMIT </button>
                </div>
            </div>
        </form>
    </div>

</template>
<script>
import { Method } from '@inertiajs/inertia'
  export default {
    name: "create customer",
    data(){
        return{
            c_name:"",
            f_name:"",
            number:"",
            email:"",
            address:"",
        }
    },
        Methods:{
            submit(){
                 const payload= {
                    Cname:this.c_name,
                    Cfname:this.f_name,
                    Number:this.number,
                    Email:this.email,
                    Address:this.address,
                }
            console.log('Check');
            axios.post('/api/customer/create', payload).then(response =>{
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