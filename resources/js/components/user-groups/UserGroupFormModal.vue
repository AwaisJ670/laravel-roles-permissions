<template>
    <div>
        <div class="modal fade" id="userGroupFormModal" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <form @submit.prevent="save">
                    <div class="modal-content">
                        <div class="modal-header align-items-center">
                            <h3 class="card-title text-bold text-capitalize form-title">{{ modal_type }} User Group</h3>
                            <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close" @click="$emit('close-modal')">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-content pb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">Group Name</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="Group Name"
                                            placeholder="Group Name"
                                            v-model="group.name"
                                            required
                                        >

                                    </div>
                                </div>
                                <!-- <div class="row ml-0 mr-0">
                                    <div class="form-group">
                                        <label class="mb-0">Permissions</label>
                                        <treeselect
                                            :options="all_modules"
                                            :multiple="true"
                                            v-model="form_data.modules"
                                            :normalizer="normalizer"
                                            placeholder="Select Modules"
                                        >
                                        </treeselect>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="modal-footer border-top border-warning">
                            <button type="submit"
                                class="btn btn-outline-warning theme-button-color float-right"
                                :disabled="data_loading || crud_loading"
                            >
                                <span v-if="modal_type === 'add' && !crud_loading">Create</span>
                                <span v-if="modal_type === 'edit' && !crud_loading">Update</span>
                                <span v-if="crud_loading" class="spinner-border spinner-border-sm"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'modal_type', 'group'
    ],
    data() {
        return {
            crud_loading: false,
            data_loading: false,
            is_all_select: false,
            formData: [],
        }
    },
    methods: {
        save() {
            this.crud_loading = true;

            // let url = this.modal_type === 'add' ? `/admin/management/user_groups` : `/admin/management/user_groups/${this.obj_id}`;
            // let method = this.modal_type === 'add' ? 'POST' : 'PUT';

            axios({
                url: '/permissions/store',
                method: 'POST',
                data: this.group
            })
            .then(response => {
                window.location.reload();
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
        // toggleSelectAll() {
        //     if (this.is_all_select) {
        //     // If selectAll is true, select all modules
        //         this.form_data.modules = this.all_modules.map(module => module.name);
        //     } else {
        //     // If selectAll is false, deselect all modules
        //         this.form_data.modules = [];
        //     }
        // },
        getDataForEdit() {
            axios({
                url: `/admin/management/user_groups/${this.obj_id}/edit`,
                method: 'GET',
            })
            .then(response => {
                this.form_data.name = response.data.user_group.name
                // /this.form_data.modules = response.data.user_group.assigned_modules
                // this.formData = response.data
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
    },
    mounted() {
        this.modal_type === 'edit' ? this.getDataForEdit() : null;
    }

}
</script>

<style scoped>

</style>
