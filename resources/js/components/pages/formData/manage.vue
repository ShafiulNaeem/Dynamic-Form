<template>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="card-header col-md-12">
                    <div class="card">
                        <div class="card-header">All Form</div>

                        <div class="card-body" v-for="fData in formData" :key="fData.id">
                            <router-link :to="{name:'show-formData', params: {id: fData.id}}" class="nav-link text-info">{{ fData.form_name }} </router-link>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</template>

<script>
    export default {
        name: "manage",
        data(){
            return{
                formData: [],
            }
        },
        methods:{
            loadFormData(){
                axios.get('/api/formData').then(response => {
                    this.formData = response.data;
                });
            }
        },
        mounted() {
            this.loadFormData();
        }
    }
</script>

<style scoped>

</style>
