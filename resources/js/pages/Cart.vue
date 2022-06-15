<template>
  <section>
    <mini-navbar :username="user.username" :image="user.image" :countcart="this.productInCart.length"></mini-navbar>

    <div class="container px-8 mt-5 grid grid-cols-3 gap-4">
      <div class="col-span-3 md:col-span-2 ">
        <h1 class="text-xl mb-3 font-medium">Cart</h1>
        <div class="flex">
          <div class="w-4/6">
            <h2 class="text-center font-medium text-gray-600">Product</h2>
          </div>
          <div class="w-1/6">
            <h2 class="text-center font-medium text-gray-600">Qty</h2>
          </div>
          <div class="w-1/6">
            <h2 class="text-center font-medium text-gray-600">Total Price</h2>
          </div>
        </div>
        <div class="grid grid-cols-1 divide-y-2 " v-for="product in this.productInCart" :key="product.id">
          <list-cart :product="product"></list-cart>
        </div>
      </div>
      <div class="hidden md:flex md:flex-col rounded-lg shadow-sm border px-3 py-6 bg-white h-fit ">
        <h1 class="text-xl mb-4 font-medium">Summary</h1>
        <div class="flex justify-between mb-2">
          <h4 class="text-md">Subtotal</h4>
          <h4 class="text-md font-bold">{{formatRupiah(subtotal)}}</h4>
        </div>
        <div class="flex justify-between mb-2">
          <h4 class="text-md">Vocher</h4>
          <h4 class="text-md font-bold">$ 100</h4>
        </div>
        <hr class="mb-2">
        <div class="flex justify-between mb-2">
          <h4 class="text-md">Total</h4>
          <h4 class="text-md font-bold">$ 200</h4>
        </div>
        <div class="flex w-full gap-2 mt-2 mb-2">
          <input type="text" class="flex-none w-8/12 rounded-lg border-none bg-slate-300 h-fit">
          <button class="grow bg-grey-main rounded-lg hover:bg-sec-primary ease-in-out duration-300 py-2">Apply</button>
        </div>
        <button class="py-2 bg-primary-main text-white font-medium rounded-lg hover:bg-sec-primary mt-3 shadow-sm ease-in-out duration-300">Checkout</button>
      </div>
    </div>
  </section>
</template>
<script>
import axios from 'axios';
import MiniNavbar from "../components/MiniNavbarComponent.vue";
import { mapGetters } from 'vuex'
import ListCartComponent from '../components/ListCartComponent.vue';
export default {
  name: "Cart",
  components: {
    "mini-navbar": MiniNavbar,
    ListCartComponent,
  },
  data() {
    return {
      qty: 1,
      product: [],
    };
  },
  methods: {
   formatRupiah(numb) {
      const format = numb.toString().split('').reverse().join('');
      const convert = format.match(/\d{1,3}/g);
      const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
      return rupiah;
    },
  },
  mounted() {
    this.$store.dispatch('getUser')
  },
  computed: {
      ...mapGetters({ 
        isLoggedIn: 'isLoggedIn',
        user: 'user',
        productInCart: 'getCart',
        subtotal: 'getSubtotal',
      })
  },
};
</script>