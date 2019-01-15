
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

 #ex01{
        padding-top: 55px        
 }
        
</style>

<template>
    <div id='ex01' class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-body">
                        Eu sou um exemplo de componente - VUE js aa!
                        <alert-sucess></alert-sucess>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
