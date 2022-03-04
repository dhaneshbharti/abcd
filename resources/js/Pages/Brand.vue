<template>
    <div>   <h3>this are table data ranmmmmmm</h3>
       <div>
           <table>
<!--               <div>-->
                   <thead>
                   <tr>
                       <td>id </td>
                       <td> Name</td>
                       <td> created</td>
                       <td>updated </td>
                   </tr>
                   </thead>
                   <tbody>
                   <tr v-for="(item, index) in Tabledata">
                        <td>{{item.id}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.created_at}}</td>
                        <td>{{item.updated_at}}</td>

                      </tr>
<!--                   <tr>-->
<!--                       <td>4</td>-->
<!--                       <td>sdhdh</td>-->
<!--                       <td>44546</td>-->
<!--                       <td>443</td>-->
<!--                   </tr>-->
                   </tbody>
<!--               </div>-->
           </table>
       </div>
    </div>

</template>

<script>
    export default {
        name: "Brand",
        data(){
            return{
                Tabledata:[]
            }
        },
        methods:{
            fetchList(){
                axios.post('/api/dhannu').then(response =>{
                    if(response.status === 200){
                        this.Tabledata = response.data.data
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