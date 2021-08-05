<template>
  <nav>
                     <div class ="bg-blue-grey h-screen font-body ">
                         <div class = "title mb px-16 pt-6 pb-16">
                          <jet-Application-Logo :href="route('dashboard')" :active="route().current('dashboard')">                           
                          </jet-Application-Logo>
                         </div>
                         <div class = "flex flex-col">
                           <div class = "text-center container mx-auto w-48">
                            <p class = "py-3 opacity-20 text-sm">Main Modules</p>
                                    <hr>
                                    </div>
                             <div class="main-modules flex flex-row flex-wrap justify-center  my-10 ">  
                                <inertia-link :href="route('dashboard')" :active="route().current('dashboard')">
                                <div class="dashbaord p-3 mx-3 text-center transition transition-shadow duration-300 hover:shadow-lg">
                                     <div class = "w-10 h-8 bg-white m-auto rounded-md text-center shadow-md"> <img :src="'/assets/icons/dash.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash"> </div>
                                   <p class = "text-xs font-body font-bold mt-2">Dashboard</p>
                                </div>
                                </inertia-link>
                                <inertia-link :href="route('payroll')">
                                <div class="payroll p-3 mx-3 text-center  transition transition-shadow duration-300 hover:shadow-lg">
                                        <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md "><img :src="'/assets/icons/money.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                   <p class = "text-xs font-body font-bold mt-2">Payroll</p>
                                </div>
                                </inertia-link>
                                  <inertia-link  :href ="route('employees')">
                                     <div class="employes p-3 mx-3 text-center transition transition-shadow duration-300   hover:shadow-lg">
                                        <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/emp.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                            <p class = "text-xs font-body font-bold mt-2">   Employees </p>
                                </div>
                                  </inertia-link>

                                  <inertia-link  :href="route('training')">
                                 <div class="employes p-3 mx-3 text-center  transition transition-shadow duration-300  hover:shadow-lg">
                                         <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/training.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                          <p class = "text-xs font-body font-bold mt-2">Training</p>
                                </div>
                                </inertia-link>

                                </div>
                        <div class = "text-center container mx-auto w-48">
                            <p class = "py-3 opacity-20 text-sm">Sub Modules</p>
                                            <hr>
                                            </div> 
                                <div class="sub-modules flex flex-row flex-wrap justify-center my-10">
                                   <inertia-link :href ="route('dept')">
                                    <div class="training p-3 mx-3 text-center transition transition-shadow duration-300  hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/dept.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                      <p class = "text-xs font-body font-bold mt-2"> Department</p>
                                    </div>
                                    </inertia-link>
                                    <inertia-link :href="route('leave')">
                                    <div class="departments p-3 mx-3 text-center transition transition-shadow duration-300   hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md" > <img :src="'/assets/icons/leave.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                       <p class = "text-xs font-body font-bold mt-2"> Leave </p>
                                    </div>
                                    </inertia-link>

                                    <inertia-link href="">
                                    <div class="training p-3 mx-3 text-center transition transition-shadow duration-300  hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/dept.png'" class = "m-auto inline-block align-middle" style = "width:20px" alt="dash">  </div>
                                      <p class = "text-xs font-body font-bold mt-2"> Resignation</p>
                                    </div>
                                    </inertia-link>

                                    <inertia-link href="">
                                    <div class="departments p-3 mx-3 text-center transition transition-shadow duration-300  hover:shadow-lg">
                                            <div class = "w-10 h-8 bg-white m-auto rounded-md shadow-md"><img :src="'/assets/icons/user.png'" class = "m-auto inline-block align-middle" style = "width:20px;" alt="dash"> </div>
                                      <p class = "text-xs font-body font-bold mt-2">  Users </p>
                                    </div>
                                    </inertia-link>
                                </div>
                         </div>
                     </div>
                 </nav>
</template>

<script>
    import JetNavLink from '@/Jetstream/NavLink'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'
export default {
name : 'Sidebar',
components:{
           JetNavLink,
           JetApplicationLogo
}

}
</script>

<style>

</style>