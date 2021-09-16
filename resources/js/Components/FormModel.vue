<template>
    <div>
        <span @click="openMode">
            <slot />
        </span>

        <jet-dialog-modal :show="addnew" @close="closeModal">
            <template #title>
                {{ title }}
            </template>

            <template #content>
                <form action="" @submit.prevent="createemp">
                    <div class="flex flex-col">
                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Firstname" class="font-body"
                                    >Firstname
                                </label>
                                <input
                                    type="text"
                                    v-model="form.firstname"
                                    placeholder="e.g. George"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        place
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Last" class="font-body"
                                    >Lastname</label
                                >
                                <input
                                    type="text"
                                    v-model="form.lastname"
                                    placeholder="e.g. Kunda"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>
                        </div>

                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Address" class="font-body"
                                    >Address</label
                                >
                                <input
                                    type="text"
                                    v-model="form.address"
                                    placeholder="e.g. 15B junda chande"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Email" class="font-body"
                                    >Email</label
                                >
                                <input
                                    type="text"
                                    v-model="form.email"
                                    placeholder="umupondo@gmail.com"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>
                        </div>

                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="NRC" class="font-body">NRC</label>
                                <input
                                    type="text"
                                    v-model="form.nrc"
                                    placeholder="125673/61/1"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Position" class="font-body"
                                    >Position</label
                                >
                                <input
                                    type="text"
                                    v-model="form.position"
                                    placeholder="Cadre"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>
                        </div>

                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Mobile" class="font-body"
                                    >Mobile</label
                                >
                                <input
                                    type="text"
                                    v-model="form.mobile"
                                    placeholder="e.g 0952621222"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Department" class="font-body"
                                    >Department</label
                                >
                                <select
                                    type="text"
                                    v-model="form.deptID"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                >
                                    <option
                                        value=""
                                        class="font-grey-500 text-opacity-50"
                                    >
                                        Select Department
                                    </option>
                                    <option type="text" value="1">
                                        Human Resource
                                    </option>
                                    <option type="text" value="2">
                                        Accounts
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Gender" class="font-body"
                                    >Gender</label
                                >
                                <input
                                    type="text"
                                    v-model="form.gender"
                                    placeholder="e.g Female"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Marital-status" class="font-body"
                                    >Marital Status</label
                                >
                                <input
                                    type="text"
                                    v-model="form.maritalStatus"
                                    placeholder="e.g Single"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>
                        </div>

                        <div class="flex space-between">
                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Start-Date" class="font-body"
                                    >Start Date</label
                                >
                                <input
                                    type="date"
                                    v-model="form.start_date"
                                    placeholder="e.g 22/4/2022"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>

                            <div class="p-2 flex flex-col space-y-2 w-2/4">
                                <label for="Salary" class="font-body"
                                    >Salary
                                </label>
                                <input
                                    type="number"
                                    v-model="form.salary"
                                    class="
                                        placeholder-gray-500
                                        placeholder-opacity-50
                                        rounded-md
                                        outline-none
                                        bg-white
                                        focus:ring-green-main focus:outline-none
                                        ring-green-main
                                        focus:border-green-main
                                    "
                                />
                            </div>
                        </div>
                    </div>
                    <button type="submit">submit</button>
                </form>
            </template>

            <template #footer>
                <jet-button @click="closeModal"> Cancel </jet-button>
            </template>
        </jet-dialog-modal>
    </div>
</template>

<script>
import JetDialogModal from "@/Jetstream/DialogModal";
import JetButton from "@/Jetstream/Button";

export default {
    props: {
        title: {
            default: "Add New Employee",
        },
        create_emp: String,
    },
    data() {
        return {
            addnew: false,
            form: {
                firstname: "",
                lastname: "",
                address: "",
                email: "",
                nrc: null,
                position: "",
                mobile: null,
                dept: null,
                gender: "",
                marital_status: "",
                start_date: null,
                salary: null,
            },
        };
    },

    components: {
        JetDialogModal,
        JetButton,
    },
    methods: {
        openMode() {
            this.addnew = true;
        },
        createemp() {
            this.$inertia.post("/employees.store", this.form);
            this.addnew = false;
        },
        closeModal() {
            this.addnew = false;
        },
    },
};
</script>
