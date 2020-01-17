<template>
  <div class="h-screen bg-white">
    <div class="flex">
      <div class="pl-6 bg-gray-200 w-48 h-screen border-r-2 border-gray-400">
        <nav class="pt-4">
          <router-link to="/">
            <h1 class="text-3xl font-bold">WOOJIN</h1>
          </router-link>
          <p class="pt-12 text-xs text-gray-500 uppercase font-bold">Create</p>

          <router-link to="/contacts/create">
            <div class="pt-2 font-bold tracking-wide hover:text-blue-600 text-sm">Add New</div>
          </router-link>

          <p class="pt-12 text-xs text-gray-500 uppercase font-bold">General</p>

          <router-link to="/">
            <div class="pt-2 font-bold tracking-wide hover:text-blue-600 text-sm">Contacts New</div>
          </router-link>

          <router-link to="/">
            <div class="pt-2 font-bold tracking-wide hover:text-blue-600 text-sm">Birthdays</div>
          </router-link>

          <p class="pt-12 text-xs text-gray-500 uppercase font-bold">Settings</p>
          <router-link to="/">
            <div class="pt-2 font-bold tracking-wide hover:text-blue-600 text-sm">Logout</div>
          </router-link>

        </nav>
      </div>
      <div class="flex flex-col flex-1 h-screen overflow-y-hidden ">
        <div class="h-16 px-6 border-b border-gray-400 flex items-center justify-between">
            <div>
                Contacts
            </div>
            <div class="rounded-full border border-gray-400 text-white bg-blue-400 w-10 h-10 flex justify-center items-center">
                VG
            </div>
        </div>

         <div class="flex flex-col overflow-y-hidden flex-1">
              <router-view class="p-6 overflow-x-hidden"></router-view>
         </div>

      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: "App",

  props:[
    'user'
  ]
};
</script>

<style scoped>
</style>