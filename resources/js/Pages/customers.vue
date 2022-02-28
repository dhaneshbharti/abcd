<template>
    
<h3 class=" mt-2 text-center text-blue-500">Thank You For Choosing This Store</h3>
<div>

    <div class="p-5">
        <form>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            <label class="p-3">District</label>
                <select>
                    <option>Select any district</option>
                    <option>Singraui</option>
                    <option>Sidhi</option>
                    <option>Rewa</option>
                </select>
            <label class="p-3">Tehsil</label>
                <select>
                    //singrauli
                    <option>Chitrangi</option>
                    <option>Deosar</option>
                    <option>Singrauli</option>
                    <option>Mada</option>
                    <option>Sarai</option>
                    //sidhi
                    <option>Kusumi</option>
                    <option>Bahari</option>
                    <option>Rampur Naikin</option>
                    <option>Gopad Banas</option>
                    <option>Rampur</option>
                    <option>Churahat</option>
                    <option>Sihaval</option>
                    //Rewa
                    <option>Huzur</option>
                    <option>Hanumana</option>
                    <option>Teonthar</option>
                    <option>Mangwaon</option>
                    <option>Jawa</option>
                    <option>Sirmaur</option>
                    <option>Mauganj</option>
                    <option>Naigarhi</option>
                    <option>Semaria</option>
                    <option>Gurh</option>
                    <option>Rampur Karchuliyan</option>

                </select>
            <label class="p-3">Village</label>
                <select>
                    //singrauli
                    <option>Pipara Kurand</option>
                    <option>Tiyara</option>
                    <option>Sidhdhi</option>
                    <option>Karauti</option>
                      //mada
                    <option>Sakhauha</option>
                    <option>Bhudkud</option>
                    <option>Khamhariya</option>
                    <option>Dhanhara</option>
                    //chitrangi
                    <option>Agarhawa</option>
                    <option>Ajani</option>
                    <option>Ajgudh</option>
                    <option>Akla</option>
                    //Deosar
                    <option>semra</option>
                    <option>Pokhra</option>
                    <option>amethi</option>
                    <option>ooni</option>


                    //sidhi
                    <option></option>
                    <option>Bahari</option>
                    <option>Rampur Naikin</option>
                    <option>Gopad Banas</option>
                    <option>Rampur</option>
                    <option>Churahat</option>
                    <option>Sihaval</option>
                    //Rewa
                    <option>Huzur</option>
                    <option>Hanumana</option>
                    <option>Teonthar</option>
                    <option>Mangwaon</option>
                    <option>Jawa</option>
                    <option>Sirmaur</option>
                    <option>Mauganj</option>
                    <option>Naigarhi</option>
                    <option>Semaria</option>
                    <option>Gurh</option>
                    <option>Rampur Karchuliyan</option>
                </select>
        </form>
        <table class="w-full p-5 mt-3">
            <thead class=" bg-blue-500 text-white">
            <tr class="p-5">
                <td>No</td>
                <td> Name</td>
                <td>Father's name</td>
                <td>Number</td>
                <td>Email</td>
                <td>Address</td>
                
            </tr> 
            </thead>
            <tbody>
               <tr v-for="(item,index) in tabledata">
                    <td>{{item.id}}</td>  	
                    <td>{{item.Cname}}</td>
                    <td>{{item.Cfname}}</td>
                    <td>{{item.Number}}</td>
                    <td>{{item.Email}}</td>
                    <td>{{item.Address}}</td>
               
               </tr>    
            </tbody>
        </table>    
    </div>
</div>
</template>


<script> 
 export default {
    name:"customers",
     data(){
            return{
                tabledata:[]
            }
        },
        methods:{
            fetchList(){
                axios.post('/api/dhannu').then(response =>{
                    if(response.status === 200){
                       this.tabledata = response.data.data
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