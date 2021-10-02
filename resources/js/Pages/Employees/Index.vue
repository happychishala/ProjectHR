<template>
<app-layout>
<div id = "addbtn " class = "pl-7 pt-2">
  <!--  <button class="addNew p-2 bg-green-main w-40 text-white font-body font-bold rounded-md"> Add New</button>-->
</div>

<div id="employinfo" v-on:click="select_emp=true" class = "flex  h-1/2  pl-7 pb-5 pr-7 " :class="[select_emp? 'hidden': '' ]" >
        <div class = "profiledata bg-white shadow-md h-80 rounded-md w-2/4 p-5 flex">
        <div class="personalinfo border-r-2 border-opacity-40 pr-6  w-2/5">
            <div class = "photo bg-placeholder rounded-full bg-cover m-auto w-32 h-32">

            </div>
                <div class = "name p-2">
                        <hr>
                    <h1 class = "text-center font-alt font-bold, my-2 text-xl"> {{ emp.firstname}} {{ emp.lastname }}</h1>
                    <hr>
                </div>
                <div class = "email">
                    <p class ="text-center font-alt font-medium text-md">{{ emp.email}}</p>
                </div>
                <div class = "number ">
                        <p class="text-center font-alt  font-medium text-sm">{{emp.mobile}}</p>
                </div>
                <div class = "editbtn m-auto py-3">
                    <button class="p-1 border-2 border-green-main rounded-md font-body font-bold text-sm  rounded-md text-green-main w-full" >Edit Profile</button>
                </div>
                        </div>


                <div class = "otherdata w-3/5   pl-4">
                        <div class= "firstrow flex   justify-between mb-6">
                                <div class="status w-2/4 mr-16 ">
                                        <p class = "font-alt font-medium text-sm opacity-40">Address</p>
                                        <p class="font-alt font-bold text-sm py-2">{{ emp.address }}</p>
                                        <hr>
                                </div>
                                 <div class="status w-2/4 ">
                                        <p class = "font-alt font-medium text-sm opacity-40">NRC</p>
                                        <p class="font-alt font-medium text-sm py-2">{{ emp.nrc }}</p>
                                        <hr>
                                </div>                         
                        </div>

                         <div class= "secondrow flex  justify-between mb-6">
                                <div class="status w-2/4 mr-16  ">
                                        <p class = "font-alt font-medium text-sm opacity-40">Position </p>
                                        <p class="font-alt font-medium text-sm py-2">{{ emp.position}}</p>
                                        <hr>
                                </div>
                                 <div class="status w-2/4 ">
                                        <p class = "font-alt font-medium text-sm opacity-40">Gender</p>
                                        <p class="font-alt font-medium text-sm py-2">{{ emp.gender}}</p>
                                        <hr>
                                </div>                         
                        </div>
                                   <div class= "secondrow flex  justify-between mb-6">
                                <div class="status w-2/4 mr-16 ">
                                        <p class = "font-alt font-medium text-sm opacity-40">Salary</p>
                                        <p class="font-alt font-medium text-sm py-2">k {{ emp.salary}}</p>
                                        <hr>
                                </div>
                                 <div class="status w-2/4 ">
                                        <p class = "font-alt font-medium text-sm opacity-40">Marital Status</p>
                                        <p class="font-alt font-medium text-sm py-2">{{emp.maritalStatus}}</p>
                                        <hr>
                                </div>                         
                        </div>


                    </div>        
        </div>

        <div class="appraisals h-80 mb-3 shadow-md rounded-md overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-white bg-white mx-6 p-3 w-1/4">
                <div id = "title" class= "p-2 shadow-sm bg-white sticky top-0 ">
                            <h3 class = "font-body font-medium ">Appraisal </h3>                    
                </div>
           
                <div class="appraisal mb-3 p-4 bg-blue-grey h-4/5">
                        <h3 class = "head font-alt text-md font-medium">Annual Recomendation</h3>
                        <p class = "text-sm font-alt py-3"> I would like to commend Mr kapeza for his work regarding...  </p>
                    <div class = " ">
                            <div>
                                <p class="font-alt text-sm py-3">Date : <span class = "font-bold"> 11/12/2021</span> </p>
                                <p class = "font-alt text-sm">Submitted By : <span class = "font-bold"> Architect Manager </span></p>
                            </div>
                            <div>
                            <button class = "p-1 border-2 border-green-main rounded-md font-body font-bold text-sm  rounded-md text-green-main w-full my-2">Read </button>
                            </div>
                    </div>
                </div>

        </div>

        <div class="docs h-80 shadow-md rounded-md overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-white bg-white w-1/4 p-3 pr-5">
    <div id = "title" class= "p-2 shadow-sm bg-white sticky top-0 ">
                            <h3 class = "font-body font-medium">Files / Documents</h3>
                </div>
         
                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Grade 12 Results</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>

                <div class ="doc mb-2 p-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Bachelors Degree</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>

                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Architect Certificate</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>

                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Testimonial</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>
                
                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Testimonial</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>
                
                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Testimonial</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>
                
                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Testimonial</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>
                
                <div class ="doc p-2 mb-2 flex rounded-md bg-blue-grey justify-between border-l-4 border-green-main items-center">
                        <h3 class = "font-alt font-medium 3/4">Testimonial</h3>
                        <button class ="p-1 border-2 border-green-main text-green-main rounded-md text-sm font-body font-bold w-1/4" > View </button>
                </div>

           

        </div>

</div>

<div id="allemployees" class = "flex pl-7 pb-5 pr-7  h-4/5 " :class="[select_emp?'':' ']" >
        <div class = "emptable shadow-md bg-white rounded-md w-3/4 max-w-3/4 mr-6 p-2">
                  <div id = "tit;le" class= "p-2 bg-blue-grey rounded-full w-2/4 flex">
                            <button class = "bg-white rounded-full p-2 font-body font-medium shadow-md w-32">Department </button>
                        <form-model v-bind:create_emp="create_emp" :errorCount="errorCount" v-bind:checkinge="checkinge"><button class = "bg-white rounded-full p-2 font-body font-medium shadow-md w-32 mx-4">Add New</button> </form-model>  
                            
                </div>

         <div class="bg-white rounded-md shadow mt-5 overflow-x-auto" v-if="check_emp > 0"  :class="[select_emp?'max-h-96  overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-blue-grey':'max-h-44 overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-blue-grey']">
      <table class="w-3/4 max-w-3/4 whitespace-nowrap"   >
        <tr class="text-left font-medium font-body mb-4">
        
          <th class="px-6 pt-6 pb-4 " >Fullname</th> 
          <th class="px-6 pt-6 pb-4">Email  </th>
          <th class="px-6 pt-6 pb-4">Gender</th>
           <th class="px-6 pt-6 pb-4" >Address</th>
          <th class="px-6 pt-6 pb-4"  >Position</th>
          
        </tr>
        
        <tr   v-on:click="show_emp(employee.id)"  v-for = "employee in employees" :key="employee.id" class="hover:bg-blue-grey cursor-pointer focus-within:bg-blue-grey font-alt">
          <td class="border-t">
               
            <div class="px-6 py-4 flex items-center focus:text-indigo-500">
                <h3>{{ employee.id}}. {{ employee.firstname }} {{ employee.lastname }}  </h3>     
            </div>
        
          </td>
          <td class="border-t">
            <div class="px-6 py-4 flex items-center" tabindex="-1">
              <div >
                {{ employee.email}}
              </div>
            </div>
          </td>
          <td class="border-t">
            <div class="px-6 py-4 flex items-center" tabindex="-1">
          {{ employee.gender}}
            </div>
          </td>
          <td class="border-t">
            <div   class="px-6 py-4 flex items-center" tabindex="-1">
                   {{employee.address}}
            </div>
          </td>
          <td class="border-t w-px">
            <div  class="px-4 flex " >
                    {{ employee.position}}
            </div>
          </td>
        </tr>
   
        
      </table>
    </div>
                <div class="border-l-4 border-r-4 border-green-main m-3 p-3 mt-5 rounded-md shadow-sm"  v-else>
                                <h3 class="font-body font-medium" >No Records to show</h3>
                                <hr class = "my-2">
                                <small class="font-body font-small ">Click on the Add New button to create new employee record</small>
                </div>

        </div>

        <div class="requests h-64 shadow-md rounded-md bg-white overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-blue-grey  p-2 w-1/4"  :class="[select_emp?'max-h-64  overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-blue-grey':'max-h-64 overflow-y-scroll scrollbar-thin scrollbar-thin scrollbar-thumb-green-main scrollbar-track-blue-grey']">
        <div id = "title" class= "p-2 sticky bg-white top-0">
                            <h3 class = "font-body font-medium ">Requests</h3>                 
                </div>
                <div class="request p-2 bg-blue-grey mb-3">
                    <h3 class = "font-alt font-bold">Kabwe Derrick | IT Dept</h3>
                    <p class = "text-sm font-alt"> Requesting salary increment</p>
                    <p class = "font-alt text-sm">Date : 23/12/2022</p>
                </div>

                   <div class="request p-2 bg-blue-grey mb-3">
                    <h3 class = "font-alt font-bold">Henry Danger | Accounts Dept</h3>
                    <p class = "text-sm font-alt"> Requesting for human resource</p>
                    <p class = "font-alt text-sm">Date : 23/12/2022</p>
                </div>

       
        </div>

</div>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import FormModel from '@/Components/FormModel'

export default {
 props:{
         employees:Array,
         create_emp:String,
         check_emp:Number,
         myid:Number,
        
 },       
     emits: ['checke'],
 data(){
         return {           
                        emp:{},
                        select_emp:true,
                       errorCount:0,
         }
 },

 methods:{
      show_emp(id){ 
                fetch('/users/'+id+' ').then(response => response.json()).then(more => 
                this.emp = more) 
                this.select_emp=false;
         }
    
 },
 
 computed:{   
 },

components :{
    AppLayout,
    FormModel,
}

}
</script>

<style>

</style>
