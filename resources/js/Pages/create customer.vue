<template>
 <div class="p-10 " >
        <div v-if="error_message">{{ error_message }}</div>
        <form method="POST" class=" bg-white ">
            <div class="grid grid-cols-2 gap-6" >
                <div class="w-full">
                    <label class="rounded text-blue-500"> Name</label>
                    <input v-model="product_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Father's name</label>
                    <input v-model="product_type" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                  <label class="rounded text-blue-500">phone</label>
                   <input v-model="product_id" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                 </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Email</label>
                    <input v-model="product_MFG" type="text" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">address</label>
                    <input v-model="expiry_date" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div style="padding-top:30px; padding-left:100px;">
                <button  @click.prevent="submit"  class="bg-blue-500 rounded bg-cover border-2 p-1  text-white">SUBMIT </button>
                </div>
            </div>
        </form>
    </div>

</template>