<template>
    <div class="card m-t-2">
        <div class="card-content">
            <p>this is test site.</p>

            <p class="has-text-grey-light m-t-1">
                <small>&copy; {{ appName }} 2018, by <a href="https:/yoshikawataiki.net" target="_blank">Yoshikawa Taiki</a></small>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SideFooter',
        computed: {
            appName() {
                return this.$store.getters.appName;
            }
        }
    }
</script>