<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="col-lg-10">
                                        <h3 class="card-title text-bold module-title">User Groups</h3>
                                    </div>
                                    <div class="col-lg-2 text-end">
                                        <button type="button"
                                            class="btn btn-warning theme-button-color module-create-button"
                                            data-bs-toggle="modal" data-bs-target="#userGroupFormModal"
                                            @click="openModal('add', group)">
                                            Add User Group
                                        </button>
                                        <!-- <button type="button"
                                            class="btn btn-warning theme-button-color w-rem-12 ml-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#userPermissionFormModal"
                                            @click="openPermissionModal('add', null)">
                                            Add User Group Permissions
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="mb-0">Search</label>
                                                <input type="text" class="form-control" v-model="search">
                                            </div>
                                        </div>
                                    </div>
                                    <table id="table" class="table table-stripped">
                                    <thead>
                                        <tr>
                                        <th class="">#</th>
                                        <th>Group Name</th>
                                        <th class="w-rem-5 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-if="filterData.length>0">
                                            <tr v-for="(obj, index) in filterData" :key="index">
                                            <td>{{ index + 1 }}</td>
                                            <td>{{ obj.name }}</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        More
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <button type="button"
                                                            class="btn btn-block btn-outline-warning btn-xs action-btn dropdown-item "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#userGroupFormModal"
                                                            @click="openModal('edit', obj)">
                                                            Edit
                                                        </button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-block btn-outline-warning btn-xs action-btn dropdown-item "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#userPermissionFormModal"
                                                                @click="openPermissionModal('edit', obj)">
                                                                Permissions
                                                            </button>

                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </template>

                                        <template v-else>
                                            <tr>
                                                <td colspan="10" class="text-info text-center">No User Group Found</td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- v-if="is_form_modal" -->
        <UserGroupFormModal
            :modal_type="modal_type"
            :group="group"
            @close-modal="is_form_modal = false">
        </UserGroupFormModal>
        <userPermissionFormModal
            :modal_type="modal_type"
            :all_modules="all_modules"
            :groups="roles"
            :group="group"
            @close-modal="is_permission_form_modal = false">
        </userPermissionFormModal>
    </div>
</template>
<!-- 19176 -->
<script>
import UserGroupFormModal from './UserGroupFormModal.vue';
import userPermissionFormModal from './UserPermissionFormModal.vue';
export default {
    props: ['roles','all_modules'],
    components:{UserGroupFormModal,userPermissionFormModal},
    data() {
        return {
            obj_id: null,
            is_form_modal: false,
            is_permission_form_modal: false,
            modal_type: null,
            data_loading: false,
            search: '',
            group:{
                name: '',
            }
        }
    },
    methods: {
        openModal(modalType, obj) {
            this.modal_type = modalType;
            this.group = obj;
        },
        closeModal(type) {
            this.modal_type = null;
            this.obj_id = this.group;
            this.getData();

            $(".modal-backdrop").remove();
            $("body").removeClass('modal-open');
        },
        openPermissionModal(modalType, group){
            this.modal_type = modalType;
            this.group = group;
            this.is_permission_form_modal = true;
        },
        getData() {
            this.data_loading = true
            axios({
                url: `/admin/management/user_groups/get/server/data`,
                method: 'GET',
            })
            .then(response => {
                this.data_loading = false
                this.data = response.data
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
    },
    computed: {
       filterData() {
            let filterData = null;
            if (this.search !== '') {
                filterData = this.roles.filter((obj) => {
                    return this.search.toLowerCase().split(' ').every(v =>
                        obj.name.toLowerCase().includes(v)
                    );
                });

                return filterData;
            }
            else {
                return this.roles;
            }
        },
    },
    mounted() {
        // this.getData();
    }
}
</script>
<style scoped>
 .module-create-button{
    width: 9rem;
 }
</style>

