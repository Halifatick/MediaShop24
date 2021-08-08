<template>
    <header class="header">
        <div class="header__inner">
            <header-toggle></header-toggle>
            <header-logo></header-logo>
            <div id="burger-menu" class="header__burger-menu parent">
                <header-burger-menu-menu-head></header-burger-menu-menu-head>
                <header-burger-menu-aside-wrap></header-burger-menu-aside-wrap>
                <header-burger-menu-logo></header-burger-menu-logo>
                <header-burger-menu-header-nav></header-burger-menu-header-nav>
                <header-burger-menu-header-interactive-wrap></header-burger-menu-header-interactive-wrap>
                <header-burger-menu-header-contact></header-burger-menu-header-contact>
                <header-burger-menu-header-close-button></header-burger-menu-header-close-button>
            </div>
            <header-right></header-right>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
