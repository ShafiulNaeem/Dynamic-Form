<template>
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Create {{formData.form_name}} Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" @submit.prevent="createFromValue" enctype="multipart/form-data" method="POST">
                            <div class="card-body">
<!--                                <textarea hidden type="text" name="form_data_id" v-model="formValue.form_data_id"  autocomplete="off" class="form-control">{{formData.id}}</textarea>-->
                                <div v-if="formData.name" class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" name="name" v-model="formValue.name" autocomplete="off" class="form-control" placeholder=" Name">

                                </div>

                                <div v-if="formData.email" class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" v-model="formValue.email" autocomplete="off" class="form-control" placeholder=" Email">

                                </div>

                                <div v-if="formData.phone" class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1">Contact</label>
                                    <input type="tel" name="phone" v-model="formValue.phone"   autocomplete="off" class="form-control"  placeholder=" Phone">
                                </div>

                                <div v-if="formData.address" class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" name="address" v-model="formValue.address"  autocomplete="off" class="form-control" placeholder=" Address">
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
    import {Form} from "vform";

    export default {
        name: "show",
        data(){
            return{
                formData: {},
                formValue: new Form({
                    // form_data_id:'',
                    name:'',
                    email:'',
                    phone:'',
                    address:'',
                })
            }
        },
        methods:{
            createFromValue(){
                let id = this.$route.params.id;
                this.formValue.put('/api/formData/'+id)
                    .then(({ data }) => { console.log(data) });
                // this.formValue = '';
                this.$toast.success('inserted Successfully ...');
                this.$router.push({path:'/formValue'});
            },
            showForm(){
                let id = this.$route.params.id;
                //console.log(id);
                axios.get('/api/formData/'+id).then(response => {
                     //console.log(response);
                    this.formData = response.data[0];
                    console.log(this.formData);
                });
            }
        },
        mounted() {
            this.showForm();
        }
    }
</script>

<style scoped>

</style>
