<template>
    <app-layout>
<div>
    <div class="heading ">
        <h3 class = "p-3 opacity-60 font-body font-bold text-md">Dashbaord Overview </h3>
    </div>
        <div class="py-3  w-full " >
            <div class="container w-full  flex flex-wrap justify-center p-1  h-44 mb-7 h-20">
            
                <div class="bg-white overflow-hidden shadow-md sm:rounded mr-7 w-96 transition transition-shadow duration-300 ease-in-out flex flex-wrap hover:shadow-lg p-10 h-full  sm:mb-3">
                  <!--  <welcome />-->
                  <div>
                 <h2 class = "font-body font-bold uppercase">- Total employees -</h2>
                  <p class = " font-body font-medium text-xs"> Total human resource in the organization</p>
                 </div>
                 <h3 class =" count text-lg opacity-10 font-body font-bold "> {{ all_emp}}</h3>
                </div>
              
                
                  <div class="bg-white overflow-hidden shadow-md sm:rounded mr-7 w-96 h-full transition transition-shadow duration-300 ease-in-out flex flex-wrap  p-10 hover:shadow-lg  sm:mb-3">
                  <!--  <welcome />-->
                  <div>
                   <h2 class = "font-body font-bold uppercase">-Present- </h2>
                     <p class = "font-body font-medium text-xs"> Employees currently reporting for work</p>
                   </div>
                 <h3 class = "count text-lg opacity-10 font-body font-bold ">187</h3>
                </div>
                  <div class="bg-white overflow-hidden shadow-md sm:rounded flex flex-wrap  w-96 h-full p-10 transition transition-shadow duration-300 ease-in-out  hover:shadow-lg  sm:mb-3">
                  <!--  <welcome />-->
                  <div>
                    <h3 class = "font-body font-bold uppercase"> -On Leave- </h3>
                     <p class = " font-body font-medium text-xs"> Employees currently on Leave</p>
                    </div>
                          <h3 class = "count text-lg opacity-10 font-body font-bold ">13</h3>
                </div>
            </div>
            <div class="notification ">
             <h3 class = "p-3 opacity-60 font-body font-bold text-md">Notications</h3>
            </div>
            <div class="bottom-bar container  p-5 flex flex-row w-full">
                <div class = "leaveApp h-64 bg-white mx-3  w-2/5  shadow-md sm:rounded pb-2">
                    <div class="laevnot container m-auto p-3   sm:rounded-sm">
                        <p class = "bg-green-main text-white rounded leading-normal text-xs py-3 font-body font-medium shadow-md "><span class = "font-body pl-3 font-bold m-auto uppercase ">Leave Applications</span></p>
                    </div>
                    <div class="applica overflow-hidden p-2">
                        <inertia-link href="">
                        <ul class = "flex flex-wrap  justify-around items-stretch  transition transition-shadow duration-300 ease-in-out   hover:shadow-lg p-1 shadow-sm  hover:bg-blue-grey">
                            <li class= "flex-auto"><div class="photo bg-white rounded-full h-10 w-10 "></div></li>
                            <li class= "flex-auto py-3"> <p class = "font-body font-bold ">Simon</p> </li>
                            <li class= "flex-auto py-3"><small class = "font-body text-xs">Vecation Leave</small> </li>
                            <li class= "flex-auto py-5">  <div class="animate-ping indicator w-2 h-2 rounded-full bg-status-pending  ml-1"></div></li>
                            <li class= "flex-auto py-5"><p class = "font-body text-xs">Pending</p></li>
                        </ul>
                        </inertia-link>

                        <inertia-link href = "#">
                        <ul class = "flex flex-wrap  justify-around items-stretch   transition transition-shadow duration-300 ease-in-out  hover:shadow-lg p-1 shadow-sm  hover:bg-blue-grey">
                            <li class= "flex-auto"><div class="photo bg-white rounded-full h-10 w-10 "></div></li>
                            <li class= "flex-auto py-3"> <p class = "font-body font-bold">John</p> </li>
                            <li class= "flex-auto py-3"><small class = "font-body text-xs">Vecation Leave</small> </li>
                            <li class= "flex-auto py-5">  <div class="indicator w-2 h-2 rounded-full bg-status-approved  ml-1"></div></li>
                            <li class= "flex-auto py-5"><p class = "text-xs font-body">Approved</p></li>                     
                        </ul>
                        </inertia-link>
                        <inertia-link href="#">
                          <ul class = "flex flex-wrap  justify-around items-stretch shadow-sm  transition transition-shadow duration-300 ease-in-out  hover:shadow-lg p-1 hover:bg-blue-grey">
                            <li class= "flex-auto"><div class="photo bg-white rounded-full h-10 w-10 "></div></li>
                            <li class= "flex-auto py-3"> <p class = "font-body font-bold">Frank</p> </li>
                            <li class= "flex-auto py-3"><small class = "text-xs font-body">School Leave</small> </li>
                            <li class= "flex-auto py-3">  <div class="indicator w-2 h-2 rounded-full bg-status-declined  ml-1"></div></li>
                            <li class= "flex-auto py-3"><p class = "font-body text-xs">Declined</p></li>
                        </ul>
                        </inertia-link>
                    </div>
                </div>
                <div class = "notyet h-64 p-3 mx-3 bg-white w-3/5 mx-auto shadow-md sm:rounded">
                <tabs />
                </div>
            </div>
        </div>
        </div>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import Tabs from '@/Components/Tabs'

    export default {
        props:['all_emp'],
        components: {
            Tabs,
            AppLayout,
            Welcome,
        },
    }
</script>
<style scoped>
.count{
    margin-top:20px;
    font-size:150px;
}
</style>