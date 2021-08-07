<template>
    <div id ="main " >
      <!--<div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
                Dashboard
            </inertia-link>
            -->
   
            <!--    
                -->
          
                            <div id = "header" class = "px-20 h-screen mb-20 ">
                                <nav id = "main-nav " class = "flex justify-between py-10 overflow-hidden ">
                                      <div class = "title  ">                                  
                                      <jet-Application-Logo>                           
                                        </jet-Application-Logo>
                                        
                                      </div>

                                  <div class = "flex flex-wrap items-center">
                                            <ul class = "nav-list flex flex-wrap   px-2 ">
                                                <li class = "px-5"> <a href="#benefit" class = "font-body font-bold" > Benefits</a> </li>
                                                <li class = "px-5"> <a href="#about" class = "font-body font-bold"> About</a> </li>                                    
                                            </ul>
                                      <inertia-link :href="route('login')" class=" border-4 border-green-main p-2 w-28 text-green-main font-body font-bold text-center rounded-md hover:bg-green-main hover:text-white">
                                                         Log in
                                                                         </inertia-link>
                                      </div>
                                 </nav>
                                <div id="main" class = "flex  justify-between  h-5/6 shadow-lg p-10">
                                        <div class = "h-full w-2/4">
                                            <h1 class = "text-7xl py-10 font-alt font-bold leading-tight text-letter-grey origin-left transition-transform translate-x-45">Increasing value t<span class = "text-green-main">hr</span>ough people! </h1>
                                            <p class = " leading-tight font-alt font-medium">We believe a company's most valuable<strong class = "text-green-main"> asset. </strong> is it's human resource 
                                                    we therefore, pride ourselves in helping clients achieve a competitive 
                                                    advantage through their people   </p>
                                            <button href="#benefit" class = "animate-bounce my-10 p-2 w-48 text-white bg-green-main shadow-xl rounded-md font-body font-bold"> Learn More</button>
                                        </div>

                                        <div  class = "border border-grey-main h-full w-2/4">
                                          <img :src="'/assets/icons/computer-work.png'" class = "" style = "width:100%;border:0" alt="dash">
                                        </div>
                a
                                </div>

                            </div>
                            <div id = "benefit" class = "px-20 h-screen my-20">
                                <div class = "h-full">
                                    <benefits >
                                        </benefits>
                                </div>
                            </div>
                            <div id = "about" class = "px-20 h-screen my-20">
                                <div class = "h-full">
                                    <about>
                                        </about>
                                        </div>
                            </div>
        </div>
    
</template>

<style scoped>
    .bg-gray-100 {
        background-color: whitesmoke;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }
    html{
        scroll-behavior: smooth;
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }
img{
    border:0 none;
}
    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: whitesmoke;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'
    import Benefits from '@/Components/Benefits'
    import About from '@/Components/About'
    export default {
        components:{
            About,
             JetApplicationLogo,
             Benefits,
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        }
    }
</script>
