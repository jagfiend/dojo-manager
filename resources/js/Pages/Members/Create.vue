<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import NavLink from "@/Components/NavLink.vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, useForm} from '@inertiajs/vue3';

const form = useForm({
    first_name: null,
    last_name: null,
    address_1: null,
    address_2: null,
    address_3: null,
    city: null,
    county: null,
    postcode: null,
    date_of_birth: null,
    gender: null,
    phone: null,
    email: null,
    insurance_date: null,
    insurance_type: null,
    emergency_contact_name: null,
    emergency_contact_phone: null,
    emergency_contact_email: null,
    grade: null,
    last_grading_date: null,
    graded_by: null,
    next_grading_date: null,
    is_instructor: 0,
    email_contact_consent: 0,
});

const submit = () => {
    form.post(route('members.store'));
};

</script>

<template>
    <Head title="Create Member"></Head>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight pb-3">
                Create Member
            </h2>

            <NavLink :href="route('members.index')">&lt;&lt; Return to members</NavLink>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 border-b">
                        <form @submit.prevent="submit">
                            <div class="pb-3">
                                <InputLabel for="first_name" value="First Name *" />
                                <TextInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name" />
                                <InputError class="mt-2" :message="form.errors.first_name" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="last_name" value="Last Name *" />
                                <TextInput id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name" />
                                <InputError class="mt-2" :message="form.errors.last_name" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="address_1" value="Address 1" />
                                <TextInput id="address_1" type="text" class="mt-1 block w-full" v-model="form.address_1" />
                                <InputError class="mt-2" :message="form.errors.address_1" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="address_2" value="Address 2" />
                                <TextInput id="address_2" type="text" class="mt-1 block w-full" v-model="form.address_2" />
                                <InputError class="mt-2" :message="form.errors.address_2" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="address_3" value="Address 3" />
                                <TextInput id="address_3" type="text" class="mt-1 block w-full" v-model="form.address_3" />
                                <InputError class="mt-2" :message="form.errors.address_3" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="city" value="Town / City" />
                                <TextInput id="city" type="text" class="mt-1 block w-full" v-model="form.city" />
                                <InputError class="mt-2" :message="form.errors.city" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="county" value="County" />
                                <TextInput id="county" type="text" class="mt-1 block w-full" v-model="form.county" />
                                <InputError class="mt-2" :message="form.errors.county" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="postcode" value="Postcode" />
                                <TextInput id="postcode" type="text" class="mt-1 block w-full" v-model="form.postcode" />
                                <InputError class="mt-2" :message="form.errors.postcode" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="date_of_birth" value="Date of Birth" />
                                <TextInput id="date_of_birth" type="date" class="mt-1 block w-full" v-model="form.date_of_birth" />
                                <InputError class="mt-2" :message="form.errors.date_of_birth" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="gender" value="Gender" />
                                <TextInput id="gender" type="text" class="mt-1 block w-full" v-model="form.gender" />
                                <InputError class="mt-2" :message="form.errors.gender" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="phone" value="Phone" />
                                <TextInput id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" />
                                <InputError class="mt-2" :message="form.errors.phone" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="email" value="Email" />
                                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" />
                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="insurance_date" value="Insurance Date" />
                                <TextInput id="insurance_date" type="date" class="mt-1 block w-full" v-model="form.insurance_date" />
                                <InputError class="mt-2" :message="form.errors.insurance_date" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="insurance_type" value="Insurance Type" />
                                <TextInput id="insurance_type" type="text" class="mt-1 block w-full" v-model="form.insurance_type" />
                                <InputError class="mt-2" :message="form.errors.insurance_type" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="emergency_contact_name" value="Emergency Contact Name" />
                                <TextInput id="emergency_contact_name" type="text" class="mt-1 block w-full" v-model="form.emergency_contact_name" />
                                <InputError class="mt-2" :message="form.errors.emergency_contact_name" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="emergency_contact_phone" value="Emergency Contact Name" />
                                <TextInput id="emergency_contact_phone" type="tel" class="mt-1 block w-full" v-model="form.emergency_contact_phone" />
                                <InputError class="mt-2" :message="form.errors.emergency_contact_phone" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="emergency_contact_email" value="Emergency Contact Email" />
                                <TextInput id="emergency_contact_email" type="email" class="mt-1 block w-full" v-model="form.emergency_contact_email" />
                                <InputError class="mt-2" :message="form.errors.emergency_contact_email" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="grade" value="Grade" />
                                <TextInput id="grade" type="text" class="mt-1 block w-full" v-model="form.grade" />
                                <InputError class="mt-2" :message="form.errors.grade" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="last_grading_date" value="Last Grading Date" />
                                <TextInput id="last_grading_date" type="date" class="mt-1 block w-full" v-model="form.last_grading_date" />
                                <InputError class="mt-2" :message="form.errors.last_grading_date" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="graded_by" value="Graded By" />
                                <TextInput id="graded_by" type="text" class="mt-1 block w-full" v-model="form.graded_by" />
                                <InputError class="mt-2" :message="form.errors.graded_by" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="next_grading_date" value="Next Grading Date" />
                                <TextInput id="next_grading_date" type="date" class="mt-1 block w-full" v-model="form.next_grading_date" />
                                <InputError class="mt-2" :message="form.errors.next_grading_date" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="is_instructor" value="Is Instructor" />
                                <input id="is_instructor" type="checkbox" class="form-checkbox mt-1" v-model="form.is_instructor" />
                                <InputError class="mt-2" :message="form.errors.is_instructor" />
                            </div>
                            <div class="pb-3">
                                <InputLabel for="email_contact_consent" value="Email Contact Consent" />
                                <input id="email_contact_consent" type="checkbox" class="form-checkbox" v-model="form.email_contact_consent" />
                                <InputError class="mt-2" :message="form.errors.email_contact_consent" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton :disabled="form.processing">Create</PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
