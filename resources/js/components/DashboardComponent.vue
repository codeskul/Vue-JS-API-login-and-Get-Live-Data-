<template>
    <div class="container">
        <h2>Dashboard</h2>
        <ul>
            <li v-for="item in lists">{{item}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                lists:'',
                errors:''
            }            
        },
        mounted() {
            setInterval(function(){
                console.log('Component mounted.')
                axios.post('/api/getData')
                    .then((response) => {
                        this.lists = response.data
                        console.log(response.data)
                        })
                    .catch((error) => this.errors = error.response.data.errors);
            }, 3000);
            
        },
        
    }
</script>
