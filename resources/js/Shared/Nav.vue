<template>
    <nav>
        <ul class="nav">
            <li>
                <Link :class="{ linke: $page.component === 'Home' }" href="/"
                    >Home</Link
                >
            </li>
            <li>
                <Link
                    :class="{ linke: $page.component === 'About' }"
                    href="/about"
                    >About</Link
                >
            </li>
            <li>
                <Link
                    :class="{ linke: $page.component === 'Settings' }"
                    href="/settings"
                    >Settings</Link
                >
            </li>
            <li>
                <Link
                    :class="{ linke: $page.component === 'Users' }"
                    href="/users"
                    >Users</Link
                >
            </li>
            <li>
                <Link href="/logout" method="post" as="button">Logout</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";


export default {
    components: {
        Link,
    },
};

</script>
<style></style>
