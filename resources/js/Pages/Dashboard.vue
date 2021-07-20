<template>
    <app-layout>
<div>
    <div class="heading">
        <h3 class = "p-3 opacity-60 font-body">Dashbaord</h3>
    </div>
        <div class="py-3  w-full " >
            <div class="container w-full  flex flex-wrap   items-stretch   mb-7  justify-center  h-20">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-3 w-80  p-10 h-24  bg-blue-grey sm:mb-3">
                  <!--  <welcome />-->
                  Total employees
                </div>
                  <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-3 w-80 h-24 p-10  bg-blue-grey sm:mb-3">
                  <!--  <welcome />-->
                 Present 
                </div>
                  <div class="bg-white overflow-hidden shadow-md sm:rounded-lg  w-80 h-24 p-10 bg-blue-grey sm:mb-3">
                  <!--  <welcome />-->
                 On leave 
                </div>
            </div>
            <div class="notification  ">
                <h3  class = "p-3 opacity-60 font-body  font-bold"> Notification</h3>
            </div>
            <div class="bottom-bar container  p-7 flex flex-row w-full">
                <div class = "leaveApp h-64 mx-3 bg-blue-grey w-2/5 shadow-md sm:rounded">
                    <div class="laevnot container m-auto p-3 ">
                        <p>Leave Application</p>
                        <hr>
                    </div>
                    <div class="applica flex content-around items-center p-2 justify-center">
                        <div class="photo bg-white rounded-full h-10 w-10 "></div>
                        <div class="name mx-3 "> <p class = "font-bold tracking-wider">Simon</p></div>
                        <div class="name mx-3 "><small>Vecation Leave</small> </div>
                        <div class="indicator w-3 h-3 rounded-full bg-status-pending ml-3 "></div>
                        <div class="status mx-1">Pending</div>
                    </div>

                       <div class="applica flex content-around items-center p-2 justify-center">
                        <div class="photo bg-white rounded-full h-10 w-10 "></div>
                        <div class="name mx-3 "> <p class = "font-bold tracking-wider">John</p></div>
                        <div class="name mx-3 "><small>School Leave</small> </div>
                        <div class="indicator w-3 h-3 rounded-full bg-status-approved ml-3 "></div>
                        <div class="status mx-1">Approved</div>
                    </div>

                       <div class="applica flex content-around items-center p-2 justify-center">
                        <div class="photo bg-white rounded-full h-10 w-10 "></div>
                        <div class="name mx-3 "> <p class = "font-bold tracking-wider">Frank</p></div>
                        <div class="name mx-3 "><small>School Leave</small> </div>
                        <div class="indicator w-3 h-3 rounded-full bg-status-declined ml-3 "></div>
                        <div class="status mx-1">Declined</div>
                    </div>

                </div>
                <div class = "notyet h-64 mx-3 bg-blue-grey w-3/5 mx-auto shadow-md sm:rounded">
                 
                </div>
            </div>
        </div>
        </div>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
