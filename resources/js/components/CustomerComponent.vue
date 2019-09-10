<template>

   <div class="container">
     <form  method="post">
     	<input type="text" v-model="name" placeholder="name"><br>
     	<input type="text" v-model="phone" placeholder="phone"><br>
     	<input type="text" v-model="address" placeholder="address"><br>
     	<button type="submit" @click.prevent="customerDataSave()">Submit</button>
     </form>
   	</div>
</template>
<script>
    export default {
        data(){
           return{
               
               name: '',
               phone: '',
               address: ''
           }
        },
        mounted() {
            
        },
        methods: {
           customerDataSave()
           { 
           	  console.log('workde');
           	  axios.post('/customer-save', {
				    name: this.name,
				    phone: this.phone,
				    address: this.address
				  })
				  .then(function (response) {
				    console.log(response, 'response');
				  })
				  .catch(function (error) {
				    console.log(error, 'error');
				  });
           }
        }
    }
</script>


