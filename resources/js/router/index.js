import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import Home from "../components/Home";
import createCategory from "../components/pages/customer/create";
import manageCategory from "../components/pages/customer/manage";
import createformData from "../components/pages/formData/create";
import manageformData from "../components/pages/formData/manage";
import showformData from "../components/pages/formData/show";
import manageFormValue from "../components/pages/formValue/manage";
const routes = new VueRouter({
    mode:'history',
    routes:[
        {
        path:'/',
        component:Home,
        name:'home'
        },
        {
            path:'/category',
            component:manageCategory,
            name:'manage-category'
        },

        {
            path:'/category/create',
            component:createCategory,
            name:'create-category'
        },
        {
            path:'/formData',
            component:manageformData,
            name:'manage-formData'
        },
        {
            path:'/formData/create',
            component:createformData,
            name:'create-formData'
        },
        {
            path:'/formData/show/:id',
            component:showformData,
            name:'show-formData'
        },
        {
            path:'/formValue',
            component:manageFormValue,
            name:'manage-formValue'
        },
    ]
});

export default routes;
