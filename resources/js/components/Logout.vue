<template>
    <div>
        <!-- Кнопка разлогинивания Logout -->
        <button type="button" @click="loGout" class="btn btn-primary">
            Logout
        </button>
    </div>
</template>
<script>
    export default {


        methods: {
            loGout() {

                axios.post("api/logout").then(response => {
                    auth.logout();
                    delete axios.defaults.headers.common['Authorization'];
                    setTimeout(function () {
                        window.location.replace("/");
                    }, 2000);


                });
            }
        }
    }

</script>
