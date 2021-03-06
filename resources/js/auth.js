import auth from './auth.js';

window.auth = auth;


class Auth {
    constructor() {

        this.token = null;
        this.user = null;
        

        this.token = window.localStorage.getItem('token');

        let userData = window.localStorage.getItem('user');
        this.user = userData ? JSON.parse(userData) : null;

        if (this.token) {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token;
        }
    }

    login(token, user) {
        window.localStorage.setItem('token', token);
        window.localStorage.setItem('user', JSON.stringify(user));

        axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

        this.token = token;
        this.user = user;



        Event.$emit('userLoggedIn');

    }

    logout() {
        window.localStorage.removeItem("user");
        window.localStorage.removeItem("token");

    }

    check() {
        return !!this.token;
    }
}

export default Auth;