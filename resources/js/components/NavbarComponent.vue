<template>
  <nav class="h-36 bg-primary-main w-full">
    <div class="h-full flex flex-col justify-center px-8 container">
      <div class="flex justify-between mb-8">
        <div class="text-grey-main text-2xl font-bold">My Store</div>
        <div class="text-grey-main text-md hover:bg-cyan-800 px-2 dropdown inline-block relative group ">
          <div>
            <h3 class="hidden lg:inline-block">Wisnu</h3>

            <img
              :src="'../../../images/'+image"
              alt=""
              class="ml-2 w-8 rounded-full inline"
            />
          </div>
          <ul class="transition ease-in-out duration-300 absolute hidden group-hover:block text-gray-700 pt-2 right-2 w-36 z-10">
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="person-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Profile</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="cart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Cart</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="heart-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Wishlist</a></li>
            <li class="py-2 px-4 rounded-t bg-gray-100 hover:bg-gray-200 block"><ion-icon name="log-out-outline" class="align-middle mr-3"></ion-icon><a class="static" href="#">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="flex justify-between">
        <div class="">
          <ul class="flex">
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="/home" class="py-2 group-hover:text-white">Home</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="/about" class="py-2 group-hover:text-white">Product</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">About Us</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">Contact Us</router-link>
            </li>
          </ul>
        </div>
        <div class="hidden lg:block">
          <div class="relative flex items-center justify-end">
            <input
              type="text"
              class="
                block
                w-60
                h-8
                rounded-lg
                border-gray-300
                shadow-sm
                focus:border-indigo-300
                focus:ring
                focus:ring-indigo-200
                focus:ring-opacity-50
              "
              placeholder="  Search"
            />
            <ion-icon
              name="search-outline"
              class="absolute mr-5"
              size="small"
            ></ion-icon>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: "NavbarComponent",
  props: ["image"]
}
</script>