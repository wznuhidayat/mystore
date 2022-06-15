<template>
  <nav class="h-16 bg-primary-main w-full">
    <div class="h-full py-3 px-8 container">
      <div class="flex justify-between mb-8">
        <div class="text-grey-main text-2xl font-bold">My Store</div>
        <div class="text-grey-main text-md hover:bg-cyan-800 px-2 dropdown inline-block relative group " v-if="isLoggedIn">
          <div class="">
            <h3 class="hidden lg:inline-block">{{username}}</h3>
              <img
                :src="'../../../images/'+image"
                alt=""
                class="ml-2 w-8 rounded-full inline"
              />
          </div>
          <ul class="transition ease-in-out duration-300 absolute hidden group-hover:block text-gray-700 pt-2 right-2 w-40">
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="person-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Profile</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="cart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Cart</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="heart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Wishlist <span class="inline-flex items-center justify-center ml-1 px-2 py-1 text-xs font-light leading-none text-red-100 bg-sec-primary rounded-full">{{countcart}}</span></a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="log-out-outline" class="align-middle mr-3"></ion-icon><a class="static" @click.prevent="logout">Logout</a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </nav>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
  name: "MiniNavbarComponent",
  props: ["username","image","countcart"],
  methods: {
    logout() {
      this.$store.dispatch('logout').then(()=>{
        this.$router.push({ name: "login" });
      })
    }
  },
  computed: {
      ...mapGetters({ 
        isLoggedIn: 'isLoggedIn',
        user: 'user',
      })
  },
  
}
</script>