/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// const { default: VueRouter } = require('vue-router');
require('./bootstrap');
window.Vue = require('vue').default;
import axios from 'axios';
import VueRouter from 'vue-router';
import InfiniteLoading from 'vue-infinite-loading';
import VueResource from 'vue-resource';
Vue.use(VueRouter);
Vue.use(InfiniteLoading);
Vue.use(VueResource);
Vue.config.ignoredElements = [/^ion-/];
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('card-product', require('./components/CardProduct.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const Home = require('./pages/Home.vue').default
const ProductDetail = require('./pages/ProductDetail.vue').default
const Login = require('./pages/Login.vue').default
const Register = require('./pages/Register.vue').default
const Cart = require('./pages/Cart.vue').default
const routes = [{
  path: '/home',
  component: Home,
  name: 'home'
},
{
  path: '/about',
  component: ProductDetail
},
{
  path: '/products/:id',
  component: ProductDetail
},
{
  path: '/login',
  component: Login,
  name: 'login',
  beforeEnter: (to,form,next)=>{
    axios.get('/auth/authenticated').then(()=>{
      return next({name: 'cart'})
    }).catch(()=>{
      next()
    })
  }
},
{
  path: '/register',
  component: Register,
  name: 'register',
  beforeEnter: (to,form,next)=>{
    axios.get('/auth/authenticated').then(()=>{
      return next({name: 'cart'})
    }).catch(()=>{
      next()
    })
  }
},
{
  path: '/cart',
  component: Cart,
  name: 'cart',
  beforeEnter: (to,form,next)=>{
    axios.get('/auth/authenticated').then(()=>{
      next()
    }).catch(()=>{
      return next({name: 'login'})
    })
  }
}
]
const router = new VueRouter({
  mode: 'history',
  routes
})
const app = new Vue({
  el: '#app',
  // data() {
  //   return {
  //     products: []
  //   }
  // },
  router,
  // methods: {
  //   setProduct(data) {
  //     this.products = data;
  //   }
  // },
  // mounted() {
  //   axios.get('http://localhost:3000/product')
  //     .then((response) => {
  //       this.setProduct(response.data)
  //     })
  //     .catch(function (error) {
  //       console.log(error);
  //     });
  // }
});
