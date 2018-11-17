<template>
    <div class="container">
        <form action="" v-on:submit.prevent>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" class="form-control" id="email" v-model="user.username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" v-model="user.password">
            </div>
            
            <button type="submit" @click="login" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
            user:{
                username:'',
                password:''
            },
            errors:{}
            }
        },
        methods:{
            login(){
                axios.post('/api/login',this.$data.user)
                    .then((response) => {
                        console.log(response.data)
                        if(response.status == 200){
                            this.$router.push('dashboard')
                        }
                        })
                    .catch((error) => console.log('error'));

            }
        }
    }
</script>
