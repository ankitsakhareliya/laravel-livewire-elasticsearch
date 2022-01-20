<template>
    <div>
        <div v-if="!secrets.length" class="row">
            <form action="#" @submit.prevent="handleLogin">
                <div class="form-row">
                    <input type="email" v-model="formData.email">
                </div>
                <div class="form-row">
                    <input type="password" v-model="formData.password">
                </div>
                <div class="form-row">
                    <button type="submit">Sign In</button>
                </div>
            </form>
        </div>
        <div v-if="secrets.length" class="row">
            <div class="secret" v-for="(secret, index) in secrets" :key="index">
                <strong v-text="secret.secret"></strong> - created at <span v-text="secret.created_at"></span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            secrets: [],
            formData: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        handleLogin() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/login', this.formData).then(response => {
                    console.log('data not found!');
                    this.getSecrets();
                }).catch(error => console.log(error)); // credentials didn't match
            });
        },
        getSecrets() {
            axios.get('/api/secrets').then(response => this.secrets = response.data);
        }
    }
}
</script>