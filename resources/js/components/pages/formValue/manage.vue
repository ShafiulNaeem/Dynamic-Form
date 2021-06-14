<template>
    <section class="content">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="fValue in formValue" :key="fValue.id">
                        <td>{{ fValue.id }}</td>
                        <td>{{ fValue.name }}</td>
                        <td>{{ fValue.email }}</td>
                        <td>{{ fValue.phone }}</td>
                        <td>{{ fValue.address }}</td>
                    </tr>
                    </tbody>
                </table>

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
                formValue: [],
            }
        },
        methods:{
            loadFormData(){
                axios.get('/api/formValue').then(response => {
                    this.formValue = response.data;
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
