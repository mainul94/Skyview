<template>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div v-for="menu in menus"
             :class="menu.custom_class">
            <ul class="nav navbar-nav"><img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <li v-for="item in menu.menu_items"
                    :class="[{dropdown: item.has_child}, item.custom_class]"
                >
                    <a :href="item.link" :class="{'dropdown-toggle': item.has_child}">
                        <span class="hidden-xs" v-if="!item.only_icon">{{ item.label }}</span>
                        <i v-if="item.icon && item.style=='normal'" :class="item.icon"> </i>
                        <img v-if="item.style=='user'" src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                logo: {
                    mini: '',
                    lg: ''
                },
                home_page: '/',
                menus: [
                    {
                        custom_class: 'navbar-custom-menu',
                        menu_items: [
                            {
                                label: "Email",
                                icon: "fa fa-envelope-o",
                                has_budget: true,
                                only_icon: true,
                                custom_class: 'messages-menu',
                                custom_style: '',
                                has_child: true,
                                link: '#',
                                children: [],
                                style: 'normal'
                            },
                            {
                                label: "Notification",
                                icon: "fa fa-bell-o",
                                has_budget: true,
                                only_icon: true,
                                custom_class: 'notifications-menu',
                                custom_style: '',
                                has_child: true,
                                link: '#',
                                children: [],
                                style: 'normal'
                            },
                            {
                                label: "Task",
                                icon: "fa fa-flag-o",
                                has_budget: true,
                                only_icon: true,
                                custom_class: 'tasks-menu',
                                custom_style: '',
                                has_child: true,
                                link: '#',
                                children: [],
                                style: 'normal'
                            },
                            {
                                label: "Mainul Islam",
                                image: "",
                                has_budget: false,
                                only_icon: false,
                                custom_class: 'user user-menu',
                                custom_style: '',
                                has_child: true,
                                link: '#',
                                children: [],
                                style: 'user'
                            }
                        ]
                    }

                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    };
</script>
