<template>
    <div class="flex flex-col md:flex-row px-4 justify-center items-center font-heading text-dark-cream">
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
.datepicker__wrapper {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNi45NSAyNC41Ij48ZGVmcz48c3R5bGU+LmNscy0xLC5jbHMtMiwuY2xzLTN7ZmlsbDpub25lO3N0cm9rZTojMDg0MTM3O3N0cm9rZS1taXRlcmxpbWl0OjEwO30uY2xzLTF7c3Ryb2tlLXdpZHRoOjJweDt9LmNscy0ye3N0cm9rZS13aWR0aDowLjc0cHg7fS5jbHMtM3tzdHJva2Utd2lkdGg6Mi4zM3B4O308L3N0eWxlPjwvZGVmcz48dGl0bGU+Y2FsZW5kYXI8L3RpdGxlPjxnIGlkPSJMYXllcl8yIiBkYXRhLW5hbWU9IkxheWVyIDIiPjxnIGlkPSJXZWJwYWdlIj48cmVjdCBjbGFzcz0iY2xzLTEiIHg9IjEiIHk9IjIuMTciIHdpZHRoPSIyNC45NSIgaGVpZ2h0PSIyMS4zMyIvPjxsaW5lIGNsYXNzPSJjbHMtMSIgeDE9IjYuMDYiIHgyPSI2LjA2IiB5Mj0iNC4zNCIvPjxsaW5lIGNsYXNzPSJjbHMtMiIgeDE9IjYuMDYiIHgyPSI2LjA2IiB5Mj0iNC4zNCIvPjxsaW5lIGNsYXNzPSJjbHMtMSIgeDE9IjIwLjUyIiB5MT0iMC4zNiIgeDI9IjIwLjUyIiB5Mj0iNC43Ii8+PGxpbmUgY2xhc3M9ImNscy0yIiB4MT0iMjAuNTIiIHkxPSIwLjM2IiB4Mj0iMjAuNTIiIHkyPSI0LjciLz48bGluZSBjbGFzcz0iY2xzLTMiIHgxPSIzLjc2IiB5MT0iOC43NSIgeDI9IjcuMTEiIHkyPSI4Ljc1Ii8+PGxpbmUgY2xhc3M9ImNscy0zIiB4MT0iMy43NiIgeTE9IjE0LjA1IiB4Mj0iNy4xMSIgeTI9IjE0LjA1Ii8+PGxpbmUgY2xhc3M9ImNscy0zIiB4MT0iMy43NiIgeTE9IjE5LjM2IiB4Mj0iNy4xMSIgeTI9IjE5LjM2Ii8+PGxpbmUgY2xhc3M9ImNscy0zIiB4MT0iOS4xMiIgeTE9IjguNzUiIHgyPSIxMi40NyIgeTI9IjguNzUiLz48bGluZSBjbGFzcz0iY2xzLTMiIHgxPSI5LjEyIiB5MT0iMTQuMDUiIHgyPSIxMi40NyIgeTI9IjE0LjA1Ii8+PGxpbmUgY2xhc3M9ImNscy0zIiB4MT0iOS4xMiIgeTE9IjE5LjM2IiB4Mj0iMTIuNDciIHkyPSIxOS4zNiIvPjxsaW5lIGNsYXNzPSJjbHMtMyIgeDE9IjE0LjQ4IiB5MT0iOC43NSIgeDI9IjE3LjgzIiB5Mj0iOC43NSIvPjxsaW5lIGNsYXNzPSJjbHMtMyIgeDE9IjE0LjQ4IiB5MT0iMTQuMDUiIHgyPSIxNy44MyIgeTI9IjE0LjA1Ii8+PGxpbmUgY2xhc3M9ImNscy0zIiB4MT0iMTQuNDgiIHkxPSIxOS4zNiIgeDI9IjE3LjgzIiB5Mj0iMTkuMzYiLz48bGluZSBjbGFzcz0iY2xzLTMiIHgxPSIxOS44MyIgeTE9IjguNzUiIHgyPSIyMy4xOCIgeTI9IjguNzUiLz48bGluZSBjbGFzcz0iY2xzLTMiIHgxPSIxOS44MyIgeTE9IjE0LjA1IiB4Mj0iMjMuMTgiIHkyPSIxNC4wNSIvPjxsaW5lIGNsYXNzPSJjbHMtMyIgeDE9IjE5LjgzIiB5MT0iMTkuMzYiIHgyPSIyMy4xOCIgeTI9IjE5LjM2Ii8+PC9nPjwvZz48L3N2Zz4=);
    background-position-x: 17px;
    background-position-y: center;
    background-size: 16px;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: #fff;
}


</style>

<style>
    button.datepicker__clear-button {
        color: #084137;
        font-weight: 200;
    }
</style>