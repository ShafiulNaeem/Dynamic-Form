<template>
    <section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Upload Your Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" @submit.prevent="customerCreate" enctype="multipart/form-data" method="POST">
                        <div class="card-body">
                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" name="name" v-model="customerForm.name" required autocomplete="off" class="form-control" placeholder=" Name">
                            </div>

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" name="email" v-model="customerForm.email" required autocomplete="off" class="form-control" placeholder=" Email">

                            </div>

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Contact</label>
                                <input type="tel" name="phone" v-model="customerForm.phone" required  autocomplete="off" class="form-control"  placeholder=" Phone">
                            </div>

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" name="address" v-model="customerForm.address" required autocomplete="off" class="form-control" placeholder=" Address">
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1"> Status</label>
                                <select name="status" v-model="customerForm.status" id="status" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label for=""></label>
                                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Submit</button>
                            </div>

                        </div><!-- /.box-body -->

                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</section>
</template>

<script>
    import { Form } from 'vform';
    export default {
        name: "create",
        data(){
            return{
                customerForm: new Form({
                    name:'',
                    email:'',
                    phone:'',
                    address:'',
                    status:'',
                })
            }
        },
        methods:{
            customerCreate(){
                // axios.post('/api/customer',{
                //     name:this.name,
                //     email:this.email,
                //     phone:this.phone,
                //     address:this.address,
                //     status:this.status,
                // }).then(response => {
                //     console.log(response);
                // })

                this.customerForm.post('/api/customer')
                    .then(({ data }) => { console.log(data) });
                this.customerForm = '';
                this.$toast.success('inserted Successfully ...');
            }
        }
    }
</script>

<style scoped>

</style>
