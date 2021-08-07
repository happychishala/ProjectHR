<template>
    <div>
        <jet-banner />
        <div class="min-h-screen bg-white">
         <div class ="flex flex-row ">
             <div class = "w-72 h-screen sidebar">
                 <sidebar />
             </div>
             
             <div class = "w-screen"><!-- content and navbar div -->
           <navbar />
            <div>
                           <!-- Page Content -->
                  <main class = "bg-blue-grey h-5/6">
                <slot></slot>
            </main>
            <footer class = "footer">
         <nav class="bg-white  text-center h-3 shadow-inner max-width-screen-lg ">
          <p class = "px-3 pt-3 opacity-30 font-alt font-medium"> &copy; ProjectHR 2021 </p>   
         </nav>
            </footer>
            </div>
            </div>
</div>     
 
          
        </div>
    </div>
</template>

<script>

    import Navbar from '@/Layouts/Navbar'
    import Sidebar from '@/Layouts/Sidebar'
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            Navbar,
            Sidebar,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },
    }
</script>
