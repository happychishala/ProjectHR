<template>
  <div class="flex flex-wrap">
    <div class="w-full ">
      <ul class="flex mb-0 list-none flex-wrap  pb-4 flex-row">
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center cursor-pointer">
          <a class="text-xs font-body font-bold  uppercase px-5 py-3 shadow-sm hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(1)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 1, 'text-white bg-green-main shadow-2xl ': openTab === 1}">
           Performance Graph
          </a>
        </li>
        <li class="-mb-px mr-2 last:mr-0 flex-auto cursor-pointer text-center">
          <a class="text-xs font-body font-bold uppercase px-5 py-3 shadow-sm hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(2)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 2, 'text-white bg-green-main shadow-2xl ': openTab === 2}">
            Upcoming Events 
          </a>
        </li>
        <li class="-mb-px mr-2 last:mr-0 flex-auto cursor-pointer text-center">
          <a class="text-xs font-body font-bold uppercase px-5 py-3 shadow-sm hover:shadow-2xl  transition transition-shadow duration-300 ease-in-out rounded block leading-normal" v-on:click="toggleTabs(3)" v-bind:class="{'text-emerald-600 bg-white': openTab !== 3, 'text-white bg-green-main shadow-2xl ': openTab === 3}">
            Interns 
          </a>
        </li>
      </ul>
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
        <div class="px-4 py-5 flex-auto">
          <div class="tab-content tab-space">
            <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
          <p> A Graph is supposed to come here </p>
            </div>
            <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
           <p>Show all upcoming events</p>
            </div>
            <div v-bind:class="{'hidden': openTab !== 3, 'block': openTab === 3}">
             <p>Show all Interns Available </p>
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