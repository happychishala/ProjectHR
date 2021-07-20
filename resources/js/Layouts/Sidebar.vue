<template>
  <nav>
                     <div class ="bg-blue-grey h-screen font-body">
                         <div class = "title mb px-20 pt-6 pb-20">
                          <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                                   <img :src="'/assets/icons/logo.svg'"  style = "width:700em;" alt="logo">
                                </jet-nav-link>
                         </div>
                         <div class = "flex flex-col">
                           <div class = "text-center container mx-auto w-48">
                            <p class = "py-3 opacity-20 text-sm">Main Modules</p>
                                    <hr>
                                    </div>
                             <div class="main-modules flex flex-row flex-wrap justify-center  my-10 ">  
                                <div class="dashbaord p-3 mx-3 text-center  hover:shadow-lg">
                                     <div class = "w-10 h-8 bg-white m-auto rounded-md text-center shadow-md"> <img :src="'/assets/icons/dash.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash"> </div>
                                   <p class = "text-xs font-medium mt-2">Dashboard</p>
                                </div>
                                <div class="payroll p-3 mx-3 text-center   hover:shadow-lg">
                                        <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md "><img :src="'/assets/icons/money.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                   <p class = "text-xs font-medium mt-2">Payroll</p>
                                </div>

                                     <div class="employes p-3 mx-3 text-center    hover:shadow-lg">
                                             <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/emp.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                               <p class = "text-xs font-medium mt-2">   Employees </p>
                                </div>
                                 <div class="employes p-3 mx-3 text-center    hover:shadow-lg">
                                         <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/training.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                             <p class = "text-xs font-medium mt-2">   Training </p>
                                </div>

                                </div>
                        <div class = "text-center container mx-auto w-48">
                            <p class = "py-3 opacity-20 text-sm">Sub Modules</p>
                                            <hr>
                                            </div> 
                                <div class="sub-modules flex flex-row flex-wrap justify-center my-10">
                                   
                                    <div class="training p-3 mx-3 text-center   hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/dept.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                      <p class = "text-xs font-medium mt-2"> Department</p>
                                    </div>
                                    <div class="departments p-3 mx-3 text-center    hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md" > <img :src="'/assets/icons/leave.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                       <p class = "text-xs font-medium mt-2"> Leave </p>
                                    </div>
                                    <div class="departments p-3 mx-3 text-center   hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/user.png'" class = "m-auto inline-block align-middle" style = "width:20px;" alt="dash"> </div>
                                      <p class = "text-xs font-medium mt-2">  Users </p>
                                    </div>
                                </div>
                         </div>
                     </div>
                 </nav>
</template>

<script>
    import JetNavLink from '@/Jetstream/NavLink'
export default {
name : 'Sidebar',
components:{
           JetNavLink,
}

}
</script>

<style>

</style>