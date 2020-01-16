<template>
    <div class="h-screen bg-white">
  
        <div class="flex">

          <div class="pl-6 bg-gray-200 w-48 h-screen border-r-2 border-gray-400">
            <nav class="pt-4">
                <router-link to="/"><h1 class="text-3xl font-bold">WOOJIN</h1></router-link> 
                <p class="pt-12 text-xs text-gray-500 uppercase font-bold">Create</p> 

                <router-link to="/">
                    <p class="pt-2 font-bold">Add New</p>
                </router-link>


                <p class="pt-12 text-xs text-gray-500 uppercase font-bold">General</p> 
                <p class="pt-12 text-xs text-gray-500 uppercase font-bold">Settings</p> 
            </nav>
        </div>
        <div>
            <div></div>
            <div>
               <router-view></router-view>
           </div>
       </div>         
         </div>

    </div>
</template>

<script>

export default{
    name: "App"
}

</script>

<style scoped>

</style>
