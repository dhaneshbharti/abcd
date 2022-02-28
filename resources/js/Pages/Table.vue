<template>
   <div class="text-center font-semibold mt-5 " >
         <h1 class="justify-content-center">
             Personal Data
         </h1>

        <div class="p-10">
            <table class="border-collapse  border   shadow-md  w-full">
                <thead class="border-1 rounded bg-blue-500 table-sortable text-white">
                        <tr class="font-semiboldbold ">
                            <td class="p-3" > Name.<i class="fa fa-sort" style="font-size:16px"></i> </td>
                            <td>Type <i class="fa fa-sort" style="font-size:16px"></i></td>
                            <td class="p-3" > Company<i class="fa fa-sort" style="font-size:16px"></i> </td>
                            <td>Id <i class="fa fa-sort" style="font-size:16px"></i></td>
                            <td class="p-3" > base price.<i class="fa fa-sort" style="font-size:16px"></i> </td>
                            <td>selling price <i class="fa fa-sort" style="font-size:16px"></i></td>
                            
                            <td>Action<i class="fa fa-sort" style="font-size:16px"></i> </td>
                        
                        </tr>
                </thead>
                <tbody>
                       <tr v-for="(item, index) in tableData" class="border h-10" >
                                <td class="p-2">{{item.product_name}}</td>
                                <td>{{item.product_type}} </td>
                                <td>{{item.product_company}} </td>
                                <td>{{item.product_id}} </td>
                                <td>{{item.base_price}} </td>
                                <td>{{item.selling_price}} </td>

                                
                        </tr>
                </tbody>

            </table>
        </div>
     </div>
</template>

<script>
export default {
    name:"view",
     data(){
            return{
                tableData:[]
            }
        },
        methods:{
            fetchList(){
                axios.post('/api/list').then(response =>{
                    if(response.status === 200){
                       this.tableData = response.data.data
                    }
                })
            }
        },
        created() {
            this.fetchList();

        }
}
</script>

<style scoped>

</style>
