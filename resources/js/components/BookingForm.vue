<template>
    <div class="flex flex-col md:flex-row px-4 justify-center items-center font-sans">
        <HotelDatePicker class="max-w-sm"></HotelDatePicker>
        <a href="" class="no-underline inline-button mt-8 md:mt-0 mr-auto ml-auto md:ml-12 md:mr-0 btn-green">Book a Room</a>
    </div>
</template>

<script type="text/babel">
    import HotelDatePicker from "vue-hotel-datepicker";

    export default {
        components: {
            HotelDatePicker
        }
    }
</script>

<style scoped lang="scss" type="text/scss">

</style>