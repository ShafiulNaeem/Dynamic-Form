import Vue from 'vue';
import routes from './router/index';
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css';
import { HasError, AlertError } from 'vform';
import CxltToastr from 'cxlt-vue2-toastr';

Vue.use(CxltToastr);
var toastrConfigs = {
    position: 'top right',
    showDuration: 2000
};
Vue.use(CxltToastr, toastrConfigs);

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
require('./bootstrap');



 Vue.component('app-header', require('./components/header.vue').default);

const app = new Vue({
    el: '#app',
    router:routes,
});
