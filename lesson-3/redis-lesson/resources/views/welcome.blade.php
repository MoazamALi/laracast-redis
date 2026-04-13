<html>
    <head>

    </head>
    <body id="chat">
        <h1>New User</h1>
        <ul id="">
            <li v-for="user in users">@{{user}}</li>
        </ul>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.8.1/socket.io.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.5.22/vue.global.js"></script>
        <script type="text/javascript">
            var socket = io('http://127.0.0.1:3000');
            Vue.createApp({
                data() {
                    return {
                        users:[]
                    }
                },
                mounted(){
                    socket.on('test-channel:UserSignup',(data) => {
                        this.users.push(data.username);
                    });
                }, 
               
            }).mount('#chat')
        </script>
    </body>
</html>