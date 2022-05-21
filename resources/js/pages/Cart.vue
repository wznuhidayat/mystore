<template>
  <section>
    <mini-navbar :username="user.username" image="no-image.png" @logout="logout()"></mini-navbar>

    <div class="container px-8 mt-5 grid grid-cols-3 gap-4">
      <div class="col-span-3 md:col-span-2">
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
        <div class="grid grid-cols-1 divide-y-2 ">
          <div class="flex">
            <div class="w-4/6 px-2 py-4 flex gap-3">
            <div class="flex-none w-20 h-20 md:w-24 md:h-24 overflow-hidden border rounded-lg">
              <img
                src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg"
                alt=""
                class="w-20 h-20 md:w-24 object-cover object-center md:h-24"
              />
            </div>
            <div class=" py-2">
              <h3 class="line-clamp-1 mb-2 text-xs md:text-sm">
                SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s lorem
              </h3>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <h3 class="mt-2 text-xs md:text-sm font-bold">$ 109.95</h3>
            </div>
          </div>
          <div class="w-1/6 m-auto">
            <div class="qty mx-auto pl-5">
              <button
                class="
                  w-8
                  h-8
                  border
                  rounded-lg
                  bg-grey-main
                  hover:bg-primary-main hover:text-grey-main ease-in-out duration-300
                "
                size="large"
                @click="minus()"
              >
                <ion-icon
                  class="text-center align-middle"
                  name="remove-circle-outline"
                ></ion-icon>
              </button>
              <input
                type="num"
                :value="qty"
                class="w-5 text-center align-middle "
              />
              <button
                class="
                  w-8
                  h-8
                  border
                  rounded-lg
                  bg-grey-main
                  hover:bg-primary-main hover:text-grey-main ease-in-out duration-300
                "
                size="large"
                @click="plus()"
              >
                <ion-icon
                  class="text-center align-middle"
                  name="add-circle-outline"
                ></ion-icon>
              </button>
            </div>
          </div>
          <div class="w-1/6 text-center my-auto font-bold text-xs md:text-sm">$ 109.95</div>  
          </div>
          <div class="flex">
            <div class="w-4/6 px-2 py-4 flex gap-3">
            <div class="flex-none w-20 h-20 md:w-24 md:h-24 overflow-hidden border rounded-lg">
              <img
                src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg"
                alt=""
                class="w-20 h-20 md:w-24 object-cover object-center md:h-24"
              />
            </div>
            <div class=" py-2">
              <h3 class="line-clamp-1 mb-2 text-xs md:text-sm">
                SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s lorem
              </h3>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <ion-icon
                name="star"
                class="text-yellow-400 w-4 h-4"
              ></ion-icon>
              <h3 class="mt-2 text-xs md:text-sm font-bold">$ 109.95</h3>
            </div>
          </div>
          <div class="w-1/6 m-auto">
            <div class="qty mx-auto pl-5">
              <button
                class="
                  w-8
                  h-8
                  border
                  rounded-lg
                  bg-grey-main
                  hover:bg-primary-main hover:text-grey-main ease-in-out duration-300
                "
                size="large"
                @click="minus()"
              >
                <ion-icon
                  class="text-center align-middle"
                  name="remove-circle-outline"
                ></ion-icon>
              </button>
              <input
                type="num"
                :value="qty"
                class="w-5 text-center align-middle "
              />
              <button
                class="
                  w-8
                  h-8
                  border
                  rounded-lg
                  bg-grey-main
                  hover:bg-primary-main hover:text-grey-main ease-in-out duration-300
                "
                size="large"
                @click="plus()"
              >
                <ion-icon
                  class="text-center align-middle"
                  name="add-circle-outline"
                ></ion-icon>
              </button>
            </div>
          </div>
          <div class="w-1/6 text-center my-auto font-bold text-xs md:text-sm">$ 109.95</div>
          </div>
        </div>
      </div>
      <div class="hidden md:flex md:flex-col rounded-lg shadow-sm border px-3 py-6 bg-white h-fit ">
        <h1 class="text-xl mb-4 font-medium">Summary</h1>
        <div class="flex justify-between mb-2">
          <h4 class="text-md">Subtotal</h4>
          <h4 class="text-md font-bold">$ 100</h4>
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
export default {
  name: "Cart",
  components: {
    "mini-navbar": MiniNavbar,
  },
  data() {
    return {
      qty: 1,
      product: [],
      user: []
    };
  },
  methods: {
    plus() {
      this.qty = this.qty + 1;
    },
    minus() {
      if (this.qty > 1) {
        this.qty = this.qty - 1;
      }
    },
    logout() {
      axios.post('/auth/logout').then(()=>{
         this.$router.push({ name: "login" });
      })
    },
  },
  mounted() {
    axios.get('auth/user').then((response) => {
      this.user = response.data
      // console.log(this.user);
    })
  },
};
</script>