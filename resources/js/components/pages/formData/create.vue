<template>
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Create Your Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" @submit.prevent="formDataCreate" enctype="multipart/form-data" method="POST">
                            <div class="card-body">
                                <div class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1">Form Name</label>
                                    <input type="text" name="form_name" v-model="formData.form_name" required autocomplete="off" class="form-control" placeholder=" Form Name">
                                </div>
                                <div class="col-md-6 float-left">
                                    <div class="custom-control custom-checkbox col-md-6 float-left">
                                        <input type="checkbox" name="name" v-model="formData.name" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Take Name</label>

                                    </div>
                                    <div class="custom-control custom-checkbox col-md-6 float-left">
                                        <input type="checkbox" name="email" v-model="formData.email" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Take Email</label>

                                    </div>
                                    <div class="custom-control custom-checkbox col-md-6 float-left">
                                        <input type="checkbox" phone="name" v-model="formData.phone" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Take Phone</label>

                                    </div>
                                    <div class="custom-control custom-checkbox col-md-6 float-left">
                                        <input type="checkbox" name="address" v-model="formData.address" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Take Address</label>

                                    </div>

                                </div>


                                <div class="form-group col-md-6 float-left">
                                    <label for=""></label>
                                    <button type="submit" class="btn btn-outline-dark btn-block mt-2">Form Submit</button>
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
                formData: new Form({
                    form_name:'',
                    name:'',
                    email:'',
                    phone:'',
                    address:'',
                    input_phone:'',
                    input_email:'',
                    input_address: '',
                })
            }
        },
        methods:{
            formDataCreate(){
                // axios.post('/api/customer',{
                //     name:this.name,
                //     email:this.email,
                //     phone:this.phone,
                //     address:this.address,
                //     status:this.status,
                // }).then(response => {
                //     console.log(response);
                // })

                this.formData.post('/api/formData')
                    .then(({ data }) => { console.log(data) });
                this.formData = '';
                this.$toast.success('inserted Successfully ...');
                this.$router.push({path:'/formData'});
            }
        }
    }
</script>

<style scoped>

</style>
