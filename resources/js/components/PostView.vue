<script>
export default {
    data() {
        return {
            email: ''
        }
    },
    methods: {
        subscribe() {
            // axios.post('/endpoint',data)
            alert('your email is : ' + this.email)
            this.email = ''
        }
    }
}
</script>
