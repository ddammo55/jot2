<template>
    <div>
        <form @submit.privent="submitForm">

            <InputField name="name" label="Contact Name" placeholder="Contact Name"  @update:field="form.name = $event"/>
            <InputField name="name" label="Contact Email" placeholder="Contact Email"  @update:field="form.email = $event"/>
            <InputField name="name" label="Company" placeholder="Company"  @update:field="form.company = $event"/>
            <InputField name="name" label="Birthday" placeholder="MM/DD/YYYY"  @update:field="form.birthday = $event"/>

            <div class="flex justify-end">
                <button class="py-2 px-4 rounded text-red-700 border mr-5 hover:border-red-700">Cancel</button>
                <button class="bg-blue-500 py-2 px-4 rounded text-white hover:bg-blue-400">Add New Contact</button>
            </div>
        </form>
    </div>
</template>

<script>
import InputField from '../components/InputField';
export default {
    name: "ContactsCreate",
    components:{
        InputField
    },
    data: function () {
        return{
            form:{
                'name' : '',
                'email' : '',
                'company' : '',
                'birthday' : '',
            }
        }
    },

    methods:{

        submitForm: function(){
            axios.post('/api/contacts', this.form)
            .then(response => {

            })
            .catch(errors => {
                
            });
        }
    }
}
</script>

<style>
</style>