//임포트 하는 곳
import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import ContactsCreate from "./views/ContactsCreate";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        //패스 설정하는 곳
        {path: '/', component: ExampleComponent,meta: { title: 'Welcome' }},
        {path: '/contacts/create', component: ContactsCreate,meta: { title: 'Welcome' }}
    ],
    mode: 'history'
});