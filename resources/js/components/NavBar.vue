<script>
export default {
    data() {
        return {
            showBurger: false,
            showDropDown: false
        }
    },
    methods: {
        toggleBurger() {
            this.showBurger = !this.showBurger
        },
        toggleDropDown() {
            this.showDropDown = !this.showDropDown
        }
    }
}
</script>
