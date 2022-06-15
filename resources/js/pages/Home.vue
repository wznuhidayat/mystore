<style>
</style>
<template>
  <section>
    <navbar-component :username="user.username" :image="user.image" :countcart="this.productInCart.length"></navbar-component>
    <div class="carouserl-wrap">
      <div class="owl-carousel owl-theme">
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/gabrielle-henderson-pL1qsBqCatk-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                  ease-in-out
                  duration-300
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/keagan-henman-Won79_9oUEk-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                  ease-in-out
                  duration-300
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image': 'url(images/mnz-ToLMORRb97Q-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                  ease-in-out
                  duration-300
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/alyssa-strohmann-TS--uNw-JqE-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                  ease-in-out
                  duration-300
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-8 mx-auto mt-4">
      <div class="head-category mb-4">
        <h2 class="text-lg font-bold">Category</h2>
      </div>
      <div class="flex flex-wrap gap-5 mx-auto">
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img :src="'css/icon/shirts.png'" alt="" class="w-12 md:w-20" />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Men’s Clothing
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img :src="'css/icon/dress.png'" alt="" class="w-12 md:w-20" />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Women Clothing
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img :src="'css/icon/rings.png'" alt="" class="w-12 md:w-20" />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">Jewelery</h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-lg hover:shadow-md
            ease-in-out
            duration-300
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
      </div>
    </div>
    
    <div class="container px-8 mx-auto mt-4">
      <div class="head-product mb-4">
        <h2 class="text-lg font-bold">Product</h2>
      </div>
      <div class="flex flex-wrap gap-5 mx-auto">
        

        <div
          class="
            rounded-lg
            overflow-hidden
            shadow-md
            w-5/12
            md:w-3/12
            lg:w-2/12
            border
            group
            hover:-translate-y-2
            transition
            duration-300
          "
          
         v-for="product in products" :key="product.id"
        >
          <card-product :product="product" :userId="user.id"></card-product>
        </div>
       
      </div>
       <infinite-loading
        @distance="1"
        @infinite="handleLoadMore"
      ></infinite-loading>
      <!-- <div
        class="load-more flex justify-center mt-4"
        v-if="productsShow < products.length || products.length > productsShow"
      >
        <button
          class="
            py-2
            px-4
            rounded-lg
            border
            shadow-sm
            hover:bg-sec-primary
            ease-in-out
            duration-300
          "
          @click="productsShow += 5"
        >
          Load more
          <ion-icon
            name="caret-down-circle-outline"
            class="align-middle"
          ></ion-icon>
        </button>
      </div> -->
    </div>
  </section>
</template>
<script>
import NavbarComponent from "../components/NavbarComponent.vue";
import CardProduct from "../components/CardProduct.vue";
import { mapGetters  } from 'vuex';
export default {
  name: "Home",
  data() {
    return {
      products: [],
      page: 1,
    };
  },
  components: {
    "navbar-component": NavbarComponent,
    "card-product": CardProduct,
  },
  methods: {
    setProduct(data) {
      this.products = data;
    },
    // testcart(){
    //   this.$store.dispatch('testgetCart').then(()=>{
    //     // this.$router.push({ name: "cart" });
    //   }).catch((error) => {
    //     this.$router.push({ name: "login" });
    //     this.errors = error.response.data.errors;
    //   })
    // },
    handleLoadMore($state) {
      this.$http
        .get("http://127.0.0.1:8000/api/products?page=" + this.page)
        .then((res) => {
          return res.json();
        })
        .then((res) => {
          $.each(res.data, (key, value) => {
            this.products.push(value);
          });
          $state.loaded();
        });

      this.page = this.page + 1;
    },
  },
  mounted() {
    //get user login
    this.$store.dispatch('getUser') 
    // this.$store.dispatch('getCart') 
    // console.log(this.user.username)
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [
        "<ion-icon name='chevron-back-outline' class='text-grey-main hover:text-sec-primary' size='large'></ion-icon>",
        "<ion-icon name='chevron-forward-outline' class='text-grey-main hover:text-sec-primary' size='large'></ion-icon>",
      ],
      // navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    });
    $(".owl-nav").addClass("container mx-auto");
  },
  computed: {
      ...mapGetters({ 
        isLoggedIn: 'isLoggedIn',
        user: 'user',
        productInCart: 'getCart',
      })
  },
};
</script>
