<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Work</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link :to="{name:'home'}" class="nav-link">Home <span class="sr-only">(current)</span></router-link>
                </li>

                <li class="nav-item active">
                    <router-link :to="{name:'create-formData'}" class="nav-link">Create Form</router-link>
                </li>

                <li class="nav-item active">
                    <router-link :to="{name:'manage-formData'}" class="nav-link">All Form</router-link>
                </li>
                <li class="nav-item active">
                    <router-link :to="{name:'manage-formValue'}" class="nav-link">Form Details</router-link>
                </li>
<!--                <li class="nav-item active">-->
<!--                    <router-link :to="{name:'manage-category'}" class="nav-link">Customer Details</router-link>-->
<!--                </li>-->

<!--                <li class="nav-item active">-->
<!--                    <router-link :to="{name:'create-category'}" class="nav-link">Create Customer Details</router-link>-->
<!--                </li>-->


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "header"
    }
</script>

<style scoped>

</style>
