<template>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="card-header col-md-12">
                    <h3 class="card-title"> Your Details</h3>
                </div>
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
                    <tr v-for="customer in customers" :key="customer.id">
                        <td>{{ customer.unique_id }}</td>
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.email }}</td>
                        <td>{{ customer.phone }}</td>
                        <td>{{ customer.address }}</td>
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
                customers: [],
            }
        },
        methods:{
            loadCustomers(){
                axios.get('/api/customer').then(response => {
                    this.customers = response.data;
                });
            }
        },
        mounted() {
            this.loadCustomers();
        }
    }
</script>

<style scoped>

</style>
