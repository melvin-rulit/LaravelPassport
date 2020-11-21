<template>
    <div class="top">
        <table>
  <tr class="topnav">
    <td><router-link to="/">Home</router-link></td>
    <td><router-link to="/profile">Profile</router-link></td>
    <td><router-link to="/dashboard">Dashboard</router-link></td>
    <td> <router-link to="/callendar">Callendar</router-link></td>
    <td><router-link to="/register">Register</router-link></td>
    <td v-if="authenticated && user"><router-link to="/logout">Logout</router-link></td>
      <td v-else> <router-link to="/login">Login</router-link></td>
  </tr>

</table>


       
    </div>

  
</template>

<script>
    export default {
        data() {
            return {
                authenticated: auth.check(),
                user: auth.user,

            };
        },

        mounted() {
            Event.$on('userLoggedIn', () => {
                this.authenticated = true;
                this.user = auth.user;
            });
        }
        
    }
</script>

<style>

    /*   Блок стилизации  шапки Header.vue*/
    .top {
        background-color: rgb(229, 238, 240); 
        overflow: hidden;
        margin-bottom: 10px;
    }


    /* Стиль ссылок внутри панели навигации */
    .topnav td {
        float: left;
        padding: 16px 18px;
        font-size: 17px;
        list-style: none;
    }

  /* Убираем подчеркивание ссылок */
    .topnav a {
        text-decoration: none;
    }

    /* Изменить цвет ссылок при наведении */
    .topnav td:hover {
        background-color: #ddd;
        color: black;
    }

   /* Центрирование ссылок в шапке */
     .top tr {
        margin-left: 30%;
    }

</style>
