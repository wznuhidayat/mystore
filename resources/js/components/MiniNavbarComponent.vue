<template>
  <nav class="h-16 bg-primary-main w-full">
    <div class="h-full py-3 px-8 container">
      <div class="flex justify-between mb-8">
        <div class="text-grey-main text-2xl font-bold">My Store</div>
        <div class="text-grey-main text-md hover:bg-cyan-800 px-2 dropdown inline-block relative group ">
          <div class="">
            <h3 class="hidden lg:inline-block">{{username}}</h3>
              <img
                :src="'../../../images/'+image"
                alt=""
                class="ml-2 w-8 rounded-full inline"
              />
          </div>
          <ul class="transition ease-in-out duration-300 absolute hidden group-hover:block text-gray-700 pt-2 right-2 w-36">
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="person-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Profile</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="cart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Cart</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="heart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Wishlist</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="log-out-outline" class="align-middle mr-3"></ion-icon><a class="static" @click.prevent="$emit('logout')">Logout</a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: "MiniNavbarComponent",
  props: ["username","image"]
  
}
</script>