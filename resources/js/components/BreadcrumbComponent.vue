<template>
  <div class="container px-8">
    <div
      class="
        flex
        mt-4
        py-3
        px-3
        text-gray-700
        shadow-sm
        rounded-lg
        border border-gray-200
        dark:bg-gray-800 dark:border-gray-700
      "
      aria-label="Breadcrumb"
    >
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a
            href="#"
            class="
              inline-flex
              items-center
              text-sm
              font-medium
              text-gray-700
              hover:text-gray-900
              dark:text-gray-400 dark:hover:text-white
            "
          >
            <ion-icon name="bag-handle-outline" class="mr-2 w-4 h-4"></ion-icon>
            Product
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <ion-icon
              name="chevron-forward"
              class="w-5 h-5 text-gray-400"
            ></ion-icon>
            <span
              href="#"
              class="
                ml-1
                text-sm
                font-medium
                text-gray-700
                hover:text-gray-900
                md:ml-2
                dark:text-gray-400 dark:hover:text-white
              "
              >{{Category}}</span
            >
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <ion-icon
              name="chevron-forward"
              class="w-5 h-5 text-gray-400"
            ></ion-icon>
            <span
              class="
                ml-1
                text-sm
                font-medium
                text-gray-400
                md:ml-2
                dark:text-gray-500
                line-clamp-1
              "
              >{{NameProduct}}</span
            >
          </div>
        </li>
      </ol>
    </div>
  </div>
</template>
<script>
export default {
  name: "Breadcrumb",
  props: ["Category","NameProduct"]
}
</script>