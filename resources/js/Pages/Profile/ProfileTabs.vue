<template>
  <div class="flex flex-wrap">
    <div class="w-full ">
      <ul class="flex mb-0 list-none flex-wrap  pb-4 flex-row">
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center cursor-pointer">
          <a class="text-xs font-body font-bold  uppercase px-5 py-3 shadow-md hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(1)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 1, 'text-white bg-green-main shadow-2xl ': openTab === 1}">
           Profile Information 
          </a>
        </li>
        <li class="-mb-px mr-2 last:mr-0 flex-auto cursor-pointer text-center">
          <a class="text-xs font-body font-bold uppercase px-5 py-3 shadow-md hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(2)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 2, 'text-white bg-green-main shadow-2xl ': openTab === 2}">
         Update Password
          </a>
        </li>
             <li class="-mb-px mr-2 last:mr-0 flex-auto cursor-pointer text-center">
          <a class="text-xs font-body font-bold uppercase px-5 py-3 shadow-md hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(3)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 3, 'text-white bg-green-main shadow-2xl ': openTab === 3}">
         Two Factor Authentication
          </a>
        </li>
     
      </ul>
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
        <div class=" px-5 py-3 flex-auto">
          <div class="tab-content tab-space">
            <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
               <slot name="profile">
                  </slot>
             
            </div>
            <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
           <slot name="password">
             </slot>
            </div>
           <div v-bind:class="{'hidden': openTab !== 3, 'block': openTab === 3}">
              <slot name="auth">
                </slot>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>


export default {
  name: "Tabs",
  components : {

  },
  data() {
    return {
      openTab: 1
    }
  },
  methods: {
    toggleTabs: function(tabNumber){
      this.openTab = tabNumber
    }
  }
}
</script>