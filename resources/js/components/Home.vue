<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Go Your page</div>

                    <div class="card-body text-center">
                        <router-link :to="{name:'create-formData'}" class="nav-link text-info">
                            <h3 class="text-info">Create Your Details</h3>
                        </router-link>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
