<template>
<div>
    <h2>Add note</h2>
    <form>
    <input type="text" v-model="status">
    <input type="textarea" v-model="payload" >
        <button @click="sendData"  >add</button>
    </form>
</div>
</template>

<script>
    export default {
        name: "Notes",
        data: function () {
            return{
                status: '',
                payload: ''
            }

        },
        methods: {
            sendData: function () {
                axios.post('api/v1/document', {
                       status:   this.status ,
                       payload:   this.payload


                })
                    .then(function (response) {
                        //console.log(response);
                        alert('data added');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    };
    

    
</script>

<style scoped>

</style>