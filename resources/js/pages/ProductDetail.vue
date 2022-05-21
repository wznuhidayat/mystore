<template>
  <section>
    <mini-navbar image="no-image.png"></mini-navbar>
    <breadcrumb
      :Category="product.category"
      :NameProduct="product.title"
    ></breadcrumb>
    <div class="container px-8 mt-3">
      <div
        class="
          grid grid-cols-1
          md:grid-cols-2 md:h-106
          mt-2
          border
          rounded-lg
          overflow-hidden
          shadow-sm
          px-4 py-2
        "
      >
        <div
          class="bg-contain bg-center bg-no-repeat h-106 "
          :style="{
            'background-image': 'url(' + product.image + ')',
          }"
        ></div>
        <div class="px-3 py-4">
          <h1 class="line-clamp-2 text-2xl font-medium mb-2">
            {{ product.title }}
          </h1>
          <div class="" >
            <ion-icon name="star" class="text-yellow-400 w-5 h-5" v-for="star in rateFl" :key="star"></ion-icon>
            <ion-icon name="star-half" class="text-yellow-400 w-5 h-5" v-if="hfRate != 0"></ion-icon>
          </div>

          <h3 class="mt-2 text-lg font-bold">$ {{ product.price }}</h3>
          <p class="mt-2 line-clamp-4">{{ product.description }}</p>
          <div class="qty mt-3">
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
              class="w-5 text-center align-middle"
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
          <div class="mt-3 gap-1 flex">
            <button
              class="
                grow
                shadow-sm
                border
                py-2
                rounded-lg
                font-medium
                bg-primary-main
                text-grey-main text-lg
                hover:bg-sec-primary ease-in-out duration-300
              "
            >
              Add to Cart
              <ion-icon
                name="cart-outline"
                class="w-5 h-5 align-middle"
              ></ion-icon>
            </button>
            <button
              class="
                flex-none
                w-12
                h-12
                shadow-sm
                bg-grey-main
                rounded-lg
                border
                py-2
                hover:bg-sec-primary ease-in-out duration-300
              "
            >
              <ion-icon
                name="heart-outline"
                class="w-5 h-5 align-middle"
              ></ion-icon>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import MiniNavbar from "../components/MiniNavbarComponent.vue";
import Breadcrumb from "../components/BreadcrumbComponent.vue";
import axios from "axios";
export default {
  name: "ProductDetail",
  components: {
    "mini-navbar": MiniNavbar,
    breadcrumb: Breadcrumb,
  },
  data() {
    return {
      qty: 1,
      product: [],
      rateFl: 0,
      hfRate: 0,
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
    setProduct(data) {
      this.product = data;
    },
    rateFlor(data){
      this.rateFl = data;
    },
    halfRate(data){
      this.hfRate = data;
    }
  },
  mounted() {
    axios
      .get("http://localhost:3000/product/" + this.$route.params.id)
      .then((response) => {
        this.setProduct(response.data);
        this.rateFlor(Math.floor(response.data.rating.rate));
        this.halfRate(response.data.rating.rate - Math.floor(response.data.rating.rate));
      })
      .catch(function (error) {
        console.log(error);
      });
  },
};
</script>